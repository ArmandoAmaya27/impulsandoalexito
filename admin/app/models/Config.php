<?php  
final class Config extends Models{
	final public function __construct(){
		parent::__construct();
	}
	final private function Errors($request){
		try {
			if (!Val::fullArray($request)) {
				throw new Exception('<b>Error: </b>No pueden haber campos vacíos.');
			}
			return false;
		} catch (Exception $e) {
			return array('success' => false, 'msg' => $e->getMessage());
		}
	}
	final public function config_princ($request){
		$error = $this->Errors($request);
		if (!is_bool($error)) {
			return $error;
		}
		$this->db->pUpdate(array(
			'tconf' => $request['tconf'],
			'txtconf' => $request['txtconf'],
			'tvids' => $request['tvids'],
			'txtvids' => $request['txtvids'],
			'tcont' => $request['tcont'],
			'txtcont' => $request['txtcont']
		), 'config_principal', "id='1'");
		return array('success' => true, 'msg' => '<b>Realizado </b>Guardando configuración...');
	}

	final public function config_tienda($request){
		$error = $this->Errors($request);
		if (!is_bool($error)) {
			return $error;
		}
		$this->db->pUpdate(array(
			'tpresen' => $request['tpresen'],
			'ppresen' => $request['ppresen'],
			'tprod' => $request['tproduc'],
			'pprod' => $request['pproduc']
		), 'config_tienda', "id='1'");
		return array('success' => true, 'msg' => '<b>Realizado </b>Guardando configuración...');
	}
	final public function config_videos($request){
		$error = $this->Errors($request);
		if (!is_bool($error)) {
			return $error;
		}
		$this->db->pUpdate(array(
			'tpresen' => $request['tpresen'],
			'ppresen' => $request['ppresen'],
			'tvids' => $request['tvids'],
			'pvids' => $request['pvids']
		), 'config_videos', "id='1'");
		return array('success' => true, 'msg' => '<b>Realizado </b>Guardando configuración...');
	}

	final public function get_config_tienda(){
		return $this->db->pSelect('*', 'config_tienda', "id='1'", 'LIMIT 1');
	}

	final public function get_config_princ(){
		return $this->db->pSelect('*', 'config_principal', "id='1'", 'LIMIT 1');
	}
	final public function get_config_vids(){
		return $this->db->pSelect('*', 'config_videos', "id='1'", 'LIMIT 1');
	}

	final public function __destruct(){
		parent::__destruct();
	}
}
?>