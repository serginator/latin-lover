<?php

	// autoload de los vendors
	require (DIR . '/vendor/autoload.php');



	// FALTA AFINAR ESTAS FUNCIONES

	/*
	 * Funciones para no tener que andar metiendo var_dump y die
	 * @param mixed $d
	 * @param string $label
	 */	 
	function w($d)
	{
        $trace = debug_backtrace();
        echo "<pre>";
        echo "w() en: ".$trace[0]['file'].":".$trace[0]['line']."<br/>";
        var_dump($d);
        echo "</pre>";
	}


	/*
	 * Metdo que hace un var_dump y un die
	 * @param mixed $d
	 * @param string $label
	 */
	function wd($d)
	{
        w($d);
        die;
	}
