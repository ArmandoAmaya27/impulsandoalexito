<?php  
final class Config extends Models{
	final public function __construct(){
		parent::__construct();
	}
	
	final public function get_config_princ(){
		return $this->db->pSelect('*', 'config_principal', "id='1'", 'LIMIT 1');
	}
	final public function get_config_tienda(){
		return $this->db->pSelect('*', 'config_tienda', "id='1'", 'LIMIT 1');
	}
	final public function get_config_vids(){
		return $this->db->pSelect('*', 'config_videos', "id='1'", 'LIMIT 1');
	}

	final public function __destruct(){
		parent::__destruct();
	}
}
?>