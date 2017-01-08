<?php 
// ----------------------------------
abstract class Models{

	// ----------------------------------

	protected $db = null;
	protected $getArg;
	protected $userId;
	// ----------------------------------
	/**
	 * Constructor inicia la conexion a la base de datos
	 * 
	 * @param type $db - Base de datos a conectar 
	 * @param type $driver - Driver de conexion
	 * @param bool|bool $new - true si se necesita establecer una nueva conexión
	 * 
	 * @return void
	 */
	protected function __construct($db = DBNAME, $driver = DBDRIVER, $new = false){
		global $request;
		is_bool($new) ?: trigger_error($new . ' Debe ser un valor Booleano', E_USER_ERROR); 
		$this->db = Database::Connect($db,$driver,$new);

		$this->getArg = (null != $request->getArg()) ? $request->getArg() : null;

		$userId = isset($_SESSION[SESSION_ID]) ? $_SESSION[SESSION_ID] : 0;
	}

	// ----------------------------------

	/**
	 * Busca un registro por su Id
	 * 
	 * @param int $id - Id que se va a buscar
	 * @param string $table - Tabla en la que se buscará
	 * 
	 * @return un arreglo secuencial del registro
	 */

	protected function findById($id, $table){
		intval($id) ?: trigger_error($id . ' No es un número entero...', E_USER_ERROR);
		return $this->db->pSelect('*', $table, "id='$id'",'LIMIT 1')[0];
	}

	// ----------------------------------

	protected function create_session($session, $sess_id = ''){
		Util::Requir('Val');
		if (!Val::isEmpty($sess_id)) {
			$_SESSION[SESSION_ID] = $sess_id;
		}
		
		if (is_array($session) && sizeof($session) > 1) {
			foreach ($session as $k => $v) {
				$_SESSION[$k] = $v;
			}
			return;
		}

		$_SESSION['ses_'.$session] = $session;

	}

	// ----------------------------------

	protected function select_array($array, $camp = ''){
		Util::Requir('Val');
		$c = array();
		if (Val::isEmpty($camp)) {
			foreach ($array as $ar) {
				$c[$ar['id']] = $ar;
			}
		}else{
			foreach ($array as $ar) {
				$c[$ar['id']] = array_key_exists($camp, $ar) ? $ar[$camp] : null;
			}
		}
		return $c;
	}

	// ----------------------------------

	/**
	 * Destructor - Limpia la conexión a la base de datos
	 * 
	 * @return void;
	 */

	protected function __destruct(){
		$this->db = null;
	}


}



?>