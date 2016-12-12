<?php

	require('../ajax.php');
	$controlador = 'PostController';
	$metodo = isset($_GET['url']) ? filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL) : 'index';

	if (!file_exists('POST/'.$controlador.'.php')) {
		$controlador = 'FailController';
	}
	require('POST/'.$controlador.'.php');
	$con = new $controlador;

	call_user_func(array($con, $metodo));


?>