<?php 
final class Conferencistas extends Models{
	private $uploader;
	private $imgdir;
	final public function __construct(){
		parent::__construct();
		$this->uploader = new Uploader;
	}
	final private function moveToDirConfe($id){
		$this->uploader->moveToDir('../../../static/system/images/conferencistas/'.$id.'/', $this->imgdir);
	}
	final public function get_confers($edit = false){
		if ($edit) {
			return $this->db->pSelect('*', 'conferencistas', "id='$this->getArg'", 'LIMIT 1');
		}
		return $this->db->pSelect('*', 'conferencistas');
	}

	final private function Errors($request, $edit = false){

		try {
			Util::Requir(array('Val','Str', 'Fl'));
			$this->imgdir = '../../static/system/.tmp/'.$request['tmp'] . '/';
			$glob = glob($this->imgdir . '*');

			if (!$edit) {
				if (!Val::Email($request['email']) || !Val::Email($request['email2'])) {
					throw new Exception('<b>Error: </b>El email debe tener un formato válido.');
				}
				if ($request['email'] != $request['email2']) {
					throw new Exception('<b>Error: </b>Los correos no coinciden.');
				}
				$where = '';

			}else{
				if (!Val::Email($request['email'])) {
					throw new Exception('<b>Error: </b>El email debe tener un formato válido.');
				}

				$id = intval($request['id']);
				$where = "AND id <> '$id'";
			}

			
			$b = $request['nombre'];
			$c = $this->db->pSelect('nombre', 'conferencistas', "nombre='$b' $where", 'LIMIT 1');

			if ((strtolower(Str::no_spaces($request['nombre'])) === strtolower(Str::no_spaces($c[0][0]))) && false != $c) {
				throw new Exception('<b>Error: </b>Este usuario ya existe en la base de datos.');
			}
			if (!Val::fullArray($request)) {
				throw new Exception('<b>Error: </b>Todos los campos son necesarios.');
			}
			

			if (!Val::Url($request['facebook']) || !Val::Url($request['twitter']) || !Val::Url($request['insta'])) {
				throw new Exception('<b>Error: </b>Las redes sociales deben contener un formato de url (http://) válido.');
			}
			
			if (sizeof($glob) == 0 && !$edit) {
				throw new Exception('<b>Error: </b>Una imagen es requerida.');
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
			'nombre' => $request['nombre'],
			'correo' => $request['email'],
			'rol' => 'Conferencista',
			'facebook' => $request['facebook'],
			'twitter' => $request['twitter'],
			'instagram' => $request['insta'],
			'descripcion' => $request['desc']
		),'conferencistas');

		$id = $this->db->lastInsertId();
		$this->moveToDirConfe($id);

		return array('success' => true, 'msg' => '<b>Realizado</b> Conferencista guardado de forma exitosa.');
	}
	final public function edit($request){
		$error = $this->Errors($request,true);
		if (!is_bool($error)) {
			return $error;
		}
		$id = intval($request['id']);
		$this->db->pUpdate(array(
			'nombre' => $request['nombre'],
			'correo' => $request['email'],
			'rol' => 'Conferencista',
			'facebook' => $request['facebook'],
			'twitter' => $request['twitter'],
			'instagram' => $request['insta'],
			'descripcion' => $request['desc']
		),'conferencistas', "id='$id'");
		if (sizeof(Fl::fspath($this->imgdir)) > 0) {
			$this->moveToDirConfe($id);
		}else{
			Fl::removeDir($this->imgdir);
		}
		
		return array('success' => true, 'msg' => '<b>Realizado</b> Conferencista editado de forma exitosa.');
	}
	final public function tmp_dir(){
		return $this->tmpDir();
	}
	final public function clear_tmp(){
		$this->clearTmp((60 * 60));
	}

	final public function getImage(){
		Util::Requir('Fl');
		return Fl::fspath('../static/system/images/conferencistas/'.$this->getArg . '/')[0];
	}

	final public function delete($id){
		Util::Requir(array('Fl', 'Str'));
		$id = intval($id);
		Fl::removeDir('../static/system/images/conferencistas/'.$id.'/');
		$this->db->pDelete('conferencistas', "id='$id'");
		Str::redir('conferencistas');
	}

	final public function __destruct(){
		parent::__destruct();
	}
}