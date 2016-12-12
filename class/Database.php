<?php  
// ----------------------------------
final class Database extends PDO{

	// ----------------------------------

	private static $instancia;

	// ----------------------------------
	/**
	 * Establece la instancia de conexion, si esta ya existe no la clona
	 * 
	 * @param $db - Base de datos a conectar
	 * @param $driver - Driver de conexión
	 * @param $new - Booleado indica nueva instancia
	 * 
	 * @return Instancia de conexión
	 */
	final public static function Connect($db = DBNAME,$driver = DBDRIVER, $new = false){

		if (!self::$instancia instanceof self || (is_bool($new) && $new)) {
			$instancia = new self();
		}
		return $instancia;
	}

	// ----------------------------------
	/**
	 * Constructor posee parametros para conexion a la db
	 * 
	 * 
	 *  @return void;
	 */
	final public function __construct($db = DBNAME, $driver = DBDRIVER){
		try {
			switch ($driver) {
				case 'oracle':
					parent::__construct('oci:dbname=(DESCRIPTION =
							(ADDRESS_LIST =
								(ADDRESS = (PROTOCOL = '.DBPROT.')(HOST = '.$driver.')(PORT = '.DBPORT.'))
								)
								(CONNECT_DATA =
									(SERVICE_NAME = '.$db.')
								)
							);charset=utf8', DBUSER, DBPASS,array(
							PDO::ATTR_EMULATE_PREPARES => false,
							PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
							PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));
				break;
				case 'sqlite':
					parent::__construct('sqlite:'.$db);
				break;
				case 'odbc':
					parent::__construct('odbc:'.$db);
				break;
				case 'firebird':
					parent::__construct('firebird:dbname='.DBHOST.':'.$db, DBUSER,DBPASS,array(
						PDO::ATTR_EMULATE_PREPARES => false,
						PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
					));
				break;
				case 'cubrid':
					parent::__construct('cubrid:host='.DBHOST.';port='.DBPORT.';dbname='.$db, DBUSER,DBPASS,array(
					PDO::ATTR_EMULATE_PREPARES => false,
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
					));
				break;
				case 'pgsql':
					parent::__construct('pgsql:host='.DBHOST.';dbname='.$db .'charset=utf8', DBUSER, DBPASS, array(

					PDO::ATTR_EMULATE_PREPARES => false,
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
					));
				break;
				case 'mysql':
					parent::__construct('mysql:host='.DBHOST.';dbname='.$db, DBUSER, DBPASS,array(
					PDO::ATTR_EMULATE_PREPARES => false,
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
					));
					break;
				default:
					die('Driver de de conexion desconocido.');
				break;
			}
		} catch (PDOException $e) {
			die('Error de conexión: '.$e->getMessage());
		}finally{
			unset($driver, $db);
		}
		
	}

	// ----------------------------------
	/**
	 * Devuelve el numero de filas de una consulta
	 * 
	 * @param PDOStatement $row - Consulta a evaluar
	 * 
	 * @param el numero de filas afectadas por la consulta
	 */
	final public function rows($query) {
    	return $query->rowCount();
  	}

	// ----------------------------------

	/**
	 * Crea una consulta preparada y la ejecuta
	 * 
	 * @param string $query - Consulta a la base de datos
	 * @param bool $exc - Elige si ejecutar la consulta
	 * 
	 * @return Objeto PDOStatement con la consulta
	 */

	final public function pQuery($query, $exc = false){
		try {
			$q = parent::prepare($query);
			if (is_array($exc)) {
				$q->execute($exc);
			}else if(is_bool($exc) && true == $exc){
				$q->execute();
			}
			return $q;
		} catch (Exception $e) {
			die('Error: '.$e->getMessage());
		}
	}

	// ----------------------------------

	/**
	 * Realiza un select a la base de datos
	 * 
	 * @param string $camp - Campos a traer de la db
	 * @param string $table - Tabla de la base de datos
	 * @param string $where - condición de la consulta
	 * @param stirng $limit - Limite de registros a traer
	 * 
	 * @param una matriz con los registros de la db, false en caso de no traer ninguno
	 */

	final public function pSelect($camp, $table, $where = '1=1', $limit = ''){
		$query = $this->pQuery("SELECT $camp FROM $table WHERE $where $limit", true);
		$res = $query->fetchAll();
		$query->closeCursor();

		if (sizeof($res) > 0) {
			return $res;
		}

		return false;
	}

	// ----------------------------------
	
	/**
	 * Borra registros de la base de datos
	 * 
	 * @param string $tabla - Tabla en la que se desea borrar
	 * @param string $where - Condición de la consulta
	 * @param string $limit - Limita los registros en la consulta
	 * 
	 * @param un objeto PDOStatement
	 */
	
	final public function pDelete($tabla, $where, $limit = 'LIMIT 1'){
		return $this->pQuery("DELETE FROM $tabla WHERE $where $limit",true);
	}

	// ----------------------------------
	/**
	 * Realiza una insersion de datos en una tabla mediante un arreglo asociativo [campo => valor]
	 * 
	 * @param array $datos - Datos a insertar en un arreglo asosiativo
	 * @param string $tabla - Tabla en la que se insertará los datos
	 * 
	 * @return un objeto PDOStatement
	 */
	final public function pInsert($datos, $tabla){
		if (!is_array($datos)) {
			trigger_error('El "arreglo" insertado es inválido', E_USER_ERROR);
		}
		$insert = "INSERT INTO $tabla(";
		$values = "VALUES (";
		$marc = array();

		foreach ($datos as $k => $v) {
			$insert .= $k . ',';
			$values .= ':m_'.$k . ',';
			$marc[':m_'.$k] = $v;
		}
		$insert[strlen($insert) - 1] = ')';
		$values[strlen($values) - 1] = ')';

		return $this->pQuery($insert . ' ' . $values, $marc); 
	}

	// ----------------------------------
	/**
	 * Actualiza registros en una tabla
	 * 
	 * @param array $datos - Datos que se quieren modificar como arreglo asociativo [campo => valor]
	 * @param string $table - Tabla en la que se quiere modificar
	 * @param string $where - Condición de la consulta
	 * @param string $limit - Limita los registros
	 * 
	 * @return Un objeto PDOStatement
	 */
	final public function pUpdate($datos, $table, $where, $limit = 'LIMIT 1'){
		if (!is_array($datos)) {
			trigger_error('El "arreglo" insertado es inválido', E_USER_ERROR);
		}
		$upd = "UPDATE $table SET ";
		$d = array();
		foreach ($datos as $c => $v) {
			$upd .= $c . ' = :m_' . $c . ',';
			$d[':m_'.$c] = $v;
		}
		$upd[strlen($upd) - 1] = ' ';
		$upd .= "WHERE $where $limit";
		return $this->pQuery($upd, $d);
	}

	// ----------------------------------
	/**
	 * Hace una consulta Join de tablas relacionadas
	 * 
	 * @param array $campos - Campos que se desean traer
	 * @param string $tabla1 - Tabla segundaria (clave foranea)
	 * @param string $tabl2 - Tabla primaria
	 * @param string $condicion - Condicion a cumplir
	 * 
	 * @return Una matriz con los datos de las dos tablas unidas
	 */

	final public function pJoin($campos, $tabla1, $tabla2, $condicion){
		$q = $this->pQuery("SELECT $campos FROM $tabla1 INNER JOIN $tabla2 ON $condicion",true);
		$res = $q->fetchAll();
		$q->closeCursor();

		return sizeof($res) > 0 ? $res : false;
	}
	
}



?>