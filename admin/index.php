<?php  
# Nucleo principal
require('app/app.php');

# Variables de la URL
$controller = $request->getCon();
$method = $request->getMet();
$arg = $request->getArg();

# Comprobar existencia del controlador
if (!is_readable('app/controllers/'.$controller .'.php')) {
	$controller = 'ErrorController';
	$method = 'index';
}

# Instancia del controlador
require('app/controllers/'.$controller .'.php');
$con = new $controller;


# Llamado de las clases por la url
if (!$arg) {
	call_user_func(array($con, $method));
}else{
	call_user_func_array(array($con, $method), array($arg));
}

?>