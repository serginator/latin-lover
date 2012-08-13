<?php

	// autoload de los vendors
	require (ROOT . '/vendor/autoload.php');

    /******************************************/
    /************** CONFIG SLIM ***************/
    /******************************************/
	$config_dev = array(
		'debug' => true,
		'mode'  => 'development',
	);

	$config_prod = array(
		'debug' => false,
		'mode'  => 'production',
	);

    $app = new Slim(${'config_' . ENTORNO});
    /******************************************/
    /************ FIN CONFIG SLIM *************/
    /******************************************/





    /******************************************/
    /*********** RUTAS DE LA APP **************/
    /******************************************/
    $app->get('/', function () use (&$controllerName, &$actionName){
    	// home
    	echo 'aqui deberiamos referenciar el controller de la home';
    });


    $app->get('/about', function () use (&$controllerName, &$actionName){
    	$controllerName = 'static';
    });
    /******************************************/
    /*********** FIN DE LAS RUTAS *************/
    /******************************************/




	/******************************************/
    /*********** FUNCIONES UTILES *************/
    /******************************************/
	function w($d)
	{
        $trace = debug_backtrace();
        echo "<pre>";
        echo "w() en: ".$trace[0]['file'].":".$trace[0]['line']."<br/>";
        print_r($d);
        echo "</pre>";
	}

	function wd($d)
	{
        w($d);
        die;
	}
