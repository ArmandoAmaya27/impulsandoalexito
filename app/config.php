<?php

# Constantes esensiales
define('URL', 'http://localhost/impulsandoalexito/');
define('DIR', '/impulsandoalexito/');
define('TITLE', 'Impulsando al Éxito');
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

# Constantes de conexion a la db
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBDRIVER', 'mysql');
define('DBPASS', '');
define('DBNAME', 'bd_impulsando_al_exito');
define('DBPORT', '');
define('DBPROT', 'TPC');

# Constantes de PHPMailer
define('PHPM_HOST', 'p3plcpnl0173.prod.phx3.secureserver.net');
define('PHPM_USER', 'dev@ocrend.com');
define('PHPM_PASS', 'Devocrend++');
define('PHPM_PORT', 465);


?>
