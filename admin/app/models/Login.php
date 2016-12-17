<?php 
final class Login extends Models{
	private $users;
	private $u;
	final public function __construct(){
		parent::__construct();
	}

	final private function Errors($request){
		try {
			Util::Requir('Str');
			$this->u = $request['user'];
			$this->users = $this->db->pSelect('id,nombre,apellido,password,correo_electronico','admin', "usuario = '$this->u' OR correo_electronico = '$this->u'", 'LIMIT 1');
			if (false == $this->users || Str::ccrypt($this->u, $this->users[0][3])) {
				throw new Exception('<b>Error:</b> Credenciales incorrectas.');
			}
			return false;
		} catch (Exception $e) {
			return array('success' => false, 'msg' => $e->getMessage());
		}
	}

	final public function signin($request){
		$error = $this->Errors($request);
		if (!is_bool($error)) {
			return $error;
		}
		$this->create_session(array(
			SESSION_ID => $this->users[0][0],
			'user' => $this->u,
			'name' => $this->users[0][1],
			'ape' => $this->users[0][2],
			'email' => $this->users[0][4]
		));

		return array('success' => true, 'msg' => '<b>Realizado</b> te estamos redireccionando...');
	}

	
	final public function __destruct(){
		parent::__destruct();
	}

}
 ?>
