<?php 
final class Usuarios extends Models{
	private $uploader;
	private $tmp;
	final public function __construct(){
		parent::__construct();
		$this->uploader = new Uploader;
	}

	final private function MoveToDirUsers($id, $default = false){
		if ($default) {
			$this->uploader->moveToDir('../../../static/system/images/usuarios/'.$id.'/', '../../static/images/avatar5.png', true);
		}else{
			$this->uploader->moveToDir('../../../static/system/images/usuarios/'.$id.'/', $this->tmp);
		}
		
	}

	final public function tmp_dir(){
		return $this->tmpDir();
	}
	final public function clear_tmp(){
		$this->clearTmp((60*60));
	}

	final private function Errors($request, $edit = false){
		try {
			$this->tmp = '../../static/system/.tmp/'.$request['tmp'] . '/';
			Util::Requir('Val');
			if (!$edit) {
				if ($request['email'] != $request['email2']) {
				throw new Exception('<b>Error: </b>Los correos no coinciden.');
				}
				if ($request['pass'] != $request['pass2']) {
					throw new Exception('<b>Error: </b>Las contraseñas no coinciden.');
				}
				if (Val::oneEmpty($request['usuario'], $request['pass'],$request['pass2'],$request['email'], $request['email2'], $request['desc']) || !Val::fullArray($request['social'])) {
					throw new Exception('<b>Error: </b>Los campos con * son requeridos.');
				}
				if (!Val::Email($request['email']) || !Val::Email($request['email2'])) {
					throw new Exception('<b>Error: </b>El email debe contener un formato válido.');
				}
				$where = '';
			}else{
				if (Val::oneEmpty($request['usuario'], $request['email'], $request['desc']) || !Val::fullArray($request['social'])) {
					throw new Exception('<b>Error: </b>Los campos con * son requeridos.');
				}

				if (!Val::Email($request['email'])) {
					throw new Exception('<b>Error: </b>El email debe contener un formato válido.');
				}

				$id = intval($request['id']);
				$where = "AND id <> '$id'";
			}
			$a = $request['usuario'];
			$b = $request['email'];
			$c = $this->db->pSelect('*', 'admin', "(usuario = '$a' OR correo_electronico = '$b') $where", 'LIMIT 1');
			if (is_array($c)) {
				throw new Exception('<b>Error: </b>Este usuario ya está registrado.');
			}
			
			if ((!Val::Letters($request['nombre']) && !Val::isEmpty($request['nombre'])) || (!Val::Letters($request['apellido']) && !Val::isEmpty($request['apellido']))) {
				throw new Exception('<b>Error: </b>El nombre y apellido solo debe contener letras.');
			}
			if (!Val::isEmpty($request['tel']) && !is_numeric($request['tel'])) {
				throw new Exception('<b>Error: </b>El número de teléfono solo debe contener números.');
			}
			
			
			if (!Val::Url($request['social'][0]) || !Val::Url($request['social'][1]) || !Val::Url($request['social'][2])) {
				throw new Exception('<b>Error: </b>Las redes sociales deben tener un formato de url válido (http:// o https://).');
			}
			if (strlen($request['tel']) < 10 || strlen($request['tel']) > 11) {
				throw new Exception('<b>Error: </b>El número de teléfono no debe contener menos de 10 ni más de 11 digitos.');
			}
			/*if (!Val::oneEmpty($request['year'], $request['month'], $request['day']) && ($request['year'] != 0 || $request['month'] != 0 || $request['day'] != 0)) {
				throw new Exception('<b>Error: </b>Debes completar todos los campos de la fecha de nacimiento.');
			}*/

			

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
		Util::Requir('Str');
		$birthdate = $request['year'] . '-' . $request['month'] . '-' . $request['day'];
		$this->db->pInsert(array(
			'nombre' => $request['nombre'],
			'apellido' => $request['apellido'],
			'cargo' => $request['cargo'],
			'fecha_nacimiento' => $birthdate,
			'usuario' => $request['usuario'],
			'password' => Str::bcrypt($request['pass']),
			'telefono' => $request['tel'],
			'correo_electronico' => $request['email'],
			'direccion' => $request['dir'],
			'descripcion' => $request['desc'],
			'redes_sociales' => json_encode($request['social'])
		), 'admin');


		$id = $this->db->lastInsertId();
		$this->MoveToDirUsers($id, true);

		return array('success' => true, 'msg' => '<b>Realizado </b>Usuario creado de forma exitosa.');
	}
	final public function edit($request){
		Util::Requir('Fl');
		$error = $this->Errors($request,true);
		if (!is_bool($error)) {
			return $error;
		}
		$id = intval($request['id']);
		$birthdate = $request['year'] . '-' . $request['month'] . '-' . $request['day'];
		$datos = array(
			'nombre' => $request['nombre'],
			'apellido' => $request['apellido'],
			'cargo' => $request['cargo'],
			'fecha_nacimiento' => $birthdate,
			'usuario' => $request['usuario'],
			'telefono' => $request['tel'],
			'correo_electronico' => $request['email'],
			'direccion' => $request['dir'],
			'descripcion' => $request['desc'],
			'redes_sociales' => json_encode($request['social'])
		);
		if (!Val::isEmpty($request['pass'])) {
			$datos['password'] = Str::bcrypt($request['pass']);
		}

		$this->db->pUpdate($datos, 'admin', "id='$id'");

		if (sizeof(Fl::fspath($this->tmp)) > 0) {
			$this->MoveToDirUsers($id);
		}else{
			Fl::removeDir($this->tmp);
		}
		

		return array('success' => true, 'msg' => '<b>Realizado </b>Usuario editado de forma exitosa.');
	}

	final public function get_users($edit = false){
		if ($edit) {
			return $this->db->pSelect('*', 'admin', "id='$this->getArg'", 'LIMIT 1');
		}
		return $this->db->pSelect('*', 'admin');
	}
	final public function getImage(){
		Util::Requir('Fl');
		return Fl::fspath('../static/system/images/usuarios/'.$this->getArg . '/')[0];
	}

	final public function __destruct(){
		parent::__destruct();
	}

}
 ?>
