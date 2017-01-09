<?php  
final class Comentario extends Models {
	final public function __construct(){
		parent::__construct();
	}

	final private function Error($request){
		try{

			Util::requir('Val');

			if (!Val::fullArray($request)) {
				throw new Exception('<b>Error:</b> debe llenar todos los campos');
			}

			if (!Val::Letters($request['nombre'])) {
				throw new Exception('<b>Error:</b> debe ingresar un nombre válido');
			}

			
			if (!Val::Email($request['correo'])) {
				throw new Exception('<b>Error:</b> el correo deber tener un formato válido');
				
			}
             
			return false; 


		} catch(Exception $e){
			return array('success' => false, 'msg' => $e->getMessage());
		}

	}

	final public function add($request){
		$error = $this->Error($request);
		if (!is_bool($error)) {
			return $error;
		}
		$id= intval($request['id_video']);
		$f= date('Y-m-d', time()); 
		$this->db->pInsert(array(
			'nombre'=> $request['nombre'],
			'correo'=> $request['correo'],
			'comentario' => $request['mensaje'],
			'fecha' => $f,
			'id_video' => $id
			), 'comentarios');
		return array('success' => true, 'msg' => '<b>El  comentario ha sido publicado con exito!</b>');
	}

	final public function coments($id){
		$id=intval($id); 
		return $this->db->pSelect('*', 'comentarios', "id_video = '$id' "); 
	}


	final public function __destruct(){
		parent::__destruct();
	}

}


?>