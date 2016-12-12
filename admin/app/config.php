<?php  

# Constantes esensiales
define('URL', 'http://localhost/impulsandoalexito/admin/');
define('DIR', '/impulsandoalexito/admin/');
define('TITLE', 'ProgramingCD');
define('SESSION_ID', 'session_id');
define('PROTECTION', true);

#listado: http://php.net/manual/es/timezones.america.php
date_default_timezone_set('America/Caracas'); 

# Control de session
session_start();
/*session_start([
	'use_strict_mode' => true,
	'use_cookies' => true,
	'hash_function' => 5,
	'cookie_httponly' => true
]);
*/

# Constante de conexion a la db
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBDRIVER', 'mysql');
define('DBPASS', '');
define('DBNAME', 'bd_impulsando_al_exito');
define('DBPORT', '');
define('DBPROT', 'TPC');



?>