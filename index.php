<?php

	define(ENTORNO, 'dev'); // or prod
	define(ROOT, __DIR__);
	

	if (ENTORNO == 'dev'){
		error_reporting(E_ALL);
        ini_set('display_errors','On');
        // @TODO init xdebug
        // variables para hacer debug
        $_SESSION['debug']['start_time'] = microtime(true);
	} else {
		// reporting de errores
		ini_set('display_errors','Off');
		// @TODO init monolog
	}

	// bootstrapping
	require(ROOT . '/app/bootstrap.php');

	// init app
	$app->run();

	// front controller
	$query = $_SERVER['REQUEST_URI'];
	$request = explode($query, '/');

	// el controllerName y el actionName pueden
	// venir seteados de las rutas de la app
	if (!isset($controllerName)){
		$controllerName = (!empty($request[1])) ? $request[1] : 'home';
	}
	
	if (!isset($actionName)){
		$actionName     = (!empty($request[2])) ? $request[2] : 'index';	
	}
	
	// @TODO los parameters hay que afinarlos, ahora solo acepta 1 (creo)
    $parameterName  = (!empty($request[3])) ? $request[3] : null ;

    $controllerName .= 'Controller';
    $actionName 	.= 'Action';

    include ROOT . '/app/controller/'.$controllerName.'.php';

    $obj = new $controllerName();
    $obj->$actionName();
   	


   
    
    

