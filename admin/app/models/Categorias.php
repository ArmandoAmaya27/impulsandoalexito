<?php 
final class Categorias extends Models{
	
	final public function __construct(){
		parent::__construct();
	}
	final private function Errror($request, $edit = false){
		try {
			Util::Requir('Val');

			if (!$edit) {
				$where = '';
			}else{
				$id = intval($request['id']);
				$where = "AND id <> '$id'";
			}

			$b = $request['name'];
			$s = $this->db->pSelect('*', 'categorias', "name = '$b' $where", 'LIMIT 1');

			if (is_array($s)) {
				throw new Exception('<b>Error:</b> Esta categoría ya existe.');
			}
			if (Val::isEmpty($request['name'])) {
				throw new Exception('<b>Error:</b> El campo no puede estar vacío.');
			}
			if (strlen($request['name']) > 70) {
				throw new Exception('<b>Error:</b> La categoría debe tener como máximo 70 caráteres.');
			}
			return false;
		} catch (Exception $e) {
			return array('success' => false, 'msg' => $e->getMessage());
		}
	}
	final public function create($request){
		$error = $this->Errror($request);
		if (!is_bool($error)) {
			return $error;
		}
		$this->db->pInsert(array('name' => $request['name']), 'categorias');
		return array('success' => true, 'msg' => '<b>Realizado</b> Categoria creada de forma exitsa.');
	}
	final public function edit($request){

		$error = $this->Errror($request,true);
		if (!is_bool($error)) {
			return $error;
		}
		$id = intval($request['id']);
		$this->db->pUpdate(array('name' => $request['name']), 'categorias', "id='$id'");
		return array('success' => true, 'msg' => '<b>Realizado</b> Categoria editada de forma exitsa.');
	}

	final public function get_cats(){
		return $this->select_array($this->db->pQuery("SELECT * FROM categorias", true));
	}

	final public function delete($id){
		Util::Requir('Str');
		$id = intval($id);
		$this->db->pDelete('categorias', "id='$id'");
		Str::redir('productos/categorias');
	}

	final public function __destruct(){
		parent::__destruct();
	}
}