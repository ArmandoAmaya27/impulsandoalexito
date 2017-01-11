<?php  
final class Subscribe extends Models {
	final public function __construct(){
		parent::__construct();
	}

	final private function Errors($request){
		try {
			Util::Requir('Val');

			if (Val::isEmpty($request['email_sub'])) {
				throw new Exception('<b>Error: </b>No puedes enviar el campo vacío.');
			}

			if (!Val::Email($request['email_sub'])) {
				throw new Exception('<b>Error: </b>El email debe tener un formato válido.');
			}

			$e = $this->db->pSelect('*', 'suscriptores', "email='".$request['email_sub']."'", 'LIMIT 1');
			if (false != $e) {
				throw new Exception('<b>Error: </b>Este correo ya está suscrito.');
			}
			

			return false;
		} catch (Exception $e) {
			return array('success' => false, 'msg' => $e->getMessage());
		}
	}

	final public function subscrip($request){
		$error = $this->Errors($request);
		if (!is_bool($error)) {
			return $error; 
		}
		
		$this->db->pInsert([
			'email' => $request['email_sub']
		], 'suscriptores');

		return array('success' => true, 'msg' => '<b>Hecho </b>te has suscrito de forma exitosa.');
	}


	final public function __destruct(){
		parent::__destruct();
	}

}


?>