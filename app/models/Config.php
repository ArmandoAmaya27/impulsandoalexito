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
	final public function getConfers($ver = false){ 
		if ($ver) {
			return $this->db->pSelect('*', 'conferencistas', "id='$this->getArg'", 'LIMIT 1');
		}
		return $this->select_array($this->db->pQuery("SELECT * FROM conferencistas", true));
	}
	final public function getVideos($ver = false, $limit = '', $camp = 'id'){
		if ($ver) {
			return $this->db->pSelect('*', 'videos', "$camp='$this->getArg'"); 
		}
		return $this->db->pSelect('*', 'videos', "1=1", $limit);
	}

	final public function get_cats(){
		return $this->select_array($this->db->pQuery('SELECT * FROM categorias', true));
	}
	final public function get_prods(){
		return $this->db->pSelect('*', 'productos');
	}
	
	final public function get_user(){
		return $this->select_array($this->db->pQuery('SELECT * FROM admin', true));
	}

	final public function __destruct(){
		parent::__destruct();
	}
}
?>