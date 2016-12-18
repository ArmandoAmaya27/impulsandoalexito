<?php 
final class Productos extends Models{
	private $tmp;
	private $uploader;
	final public function __construct(){
		parent::__construct();
		$this->uploader = new Uploader;
	}
	
	final private function MoveToDirProd($id){
		$this->uploader->moveToDir('../../../static/system/images/productos/'.$id.'/', $this->tmp);
	}

	final public function tmp_dir(){
		return $this->tmpDir();
	}
	final public function clear_dir(){
		$this->clearTmp((60 * 60));
	}
	final private function Errors($request, $edit = false){
		try {
			Util::Requir(array('Val', 'Str'));
			$this->tmp = '../../static/system/.tmp/'.$request['tmp'].'/';
			$glob = glob($this->tmp . '*');
			if (!$edit) {
				$where = '';
			}else{
				$id = intval($request['id']);
				$where = "AND id <> '$id'";
			}

			$b = $request['nombre'];
			$p = $this->db->pSelect('nombre_producto', 'productos', "nombre_producto='$b' $where", 'LIMIT 1');
			if (is_array($p) && strtolower(Str::no_spaces($b)) == strtolower(Str::no_spaces($p[0][0]))) {
				throw new Exception('<b>Error:</b> Este producto ya existe.');
			}
			if (!Val::fullArray($request)) {
				throw new Exception('<b>Error:</b> Todos los campos deben estar llenos.');
			}
			if (!is_numeric($request['precio'])) {
				throw new Exception('<b>Error:</b> El precio debe ser numérico.');
			}
			if (strlen($request['desc']) > 100) {
				throw new Exception('<b>Error:</b> La descripción debe tener como máximo 100 carácteres.');
			}
			if (sizeof($glob) == 0 && !$edit) {
				throw new Exception('<b>Error:</b> Debe existir una imagen para este producto.');
			}
			return false;
		} catch (Exception $e) {
			return array('success' => false, 'msg' => $e->getMessage());
		}
	}
	final public function create($request){
		$error = $this->Errors($request);
		if (!is_bool($error)) {
			return $error;
		}

		$this->db->pInsert(array(
			'nombre_producto' => $request['nombre'],
			'descripcion_producto' => $request['desc'],
			'precio_producto' => $request['precio'],
			'id_categoria' => $request['id_categoria'],
			'id_admin' => $_SESSION[SESSION_ID]
		), 'productos');

		$id = $this->db->lastInsertId();
		$this->MoveToDirProd($id);

		return array('success' => true, 'msg' => '<b>Realizado</b> Producto registrado de forma exitosa.');
	}
	final public function edit($request){
		Util::Requir('Fl');
		$error = $this->Errors($request, true);
		if (!is_bool($error)) {
			return $error;
		}
		$id = intval($request['id']);
		$this->db->pUpdate(array(
			'nombre_producto' => $request['nombre'],
			'descripcion_producto' => $request['desc'],
			'precio_producto' => $request['precio'],
			'id_categoria' => $request['id_categoria'],
			'id_admin' => $_SESSION[SESSION_ID]
		), 'productos', "id = '$id'");

		if (sizeof(Fl::fspath($this->tmp)) > 0) {
			$this->MoveToDirProd($id);
		}else{
			Fl::removeDir($this->tmp);
		}
		

		return array('success' => true, 'msg' => '<b>Realizado</b> Producto editado de forma exitosa.');
	}

	final public function get_prods($edit = false){
		if ($edit) {
			return $this->db->pSelect('*', 'productos', "id = '$this->getArg'", 'LIMIT 1');
		}
		return $this->db->pSelect('*', 'productos');
	}

	final public function get_img(){
		return Fl::fspath('../static/system/images/productos/'.$this->getArg.'/')[0];
	}
	final public function get_users(){
		return $this->select_array($this->db->pQuery("SELECT * FROM admin",true));
	}

	final public function __destruct(){
		parent::__destruct();
	}
}
