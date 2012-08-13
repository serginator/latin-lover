<?php

	define(ENTORNO, 'dev');
	define(DIR, __DIR__);
	

	if (ENTORNO == 'dev'){
		error_reporting(E_ALL);
        ini_set('display_errors','On');
        // xdebug
        // variables para hacer debug
        $_SESSION['debug']['start_time'] = microtime(true);
	} else {
		// reporting de errores
		// init monolog
	}


    require(DIR . '/app/bootstrap.php');


    // enrutado


    // esto es un wd

    w(file_get_contents(DIR . '/app/bootstrap.php'));
