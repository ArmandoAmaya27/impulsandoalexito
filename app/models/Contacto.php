<?php
final class Contacto extends Models{
	final public function __construct(){
		parent::__construct();
	}
	final private function Errors($request){
		try {
			Util::requir(['Val','Email']);
			if (!Val::fullArray($request)) {
				throw new Exception('<b>Error: </b>No puedes enviar campos vacíos.');
			}
			if (!Val::Letters($request['name'])) {
				throw new Exception('<b>Error: </b>El nombre solo debe contener letras.');
			}
			if (!Val::Email($request['email'])) {
				throw new Exception('<b>Error: </b>El email debe contener un formato válido.');
			}
			return false;
		} catch (Exception $e) {
			return array('success' => false, 'msg' => $e->getMessage());
		}
	}

	final public function send_email($request){
		$error = $this->Errors($request);
		if (!is_bool($error)) {
			return $error;
		}
		$email = Email::send(['armandoamaya@ocrend.com' => 'Armando'], Email::html(
				'<div>
				<span style="font-size:22px;color:#232323;">Nombre del usuario: '.$request['name'].' <small style="margin-left:10px;">Correo: '. $request['email'] .'</small></span>
				<hr>
				<p style="font-size:18px;">'.$request['message'].'</p>
				</div>'), 
		'Contacto', 'Mensaje de contacto');
		if (!is_bool($email)) {
			return array('success' => true, 'msg' => 'Error: '.$email);
		}
		return array('success' => true, 'msg' => '<b>Realizado</b> tu mensaje fue enviado de forma exitosa.');
	}

	final public function __destruct(){
		parent::__destruct();
	}
}

?>
