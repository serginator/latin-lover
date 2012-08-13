<?php

	// autoload de los vendors
	require (DIR . '/vendor/autoload.php');



	// FALTA AFINAR ESTAS FUNCIONES

	/*
	 * Funciones para no tener que andar metiendo var_dump y die
	 * @param mixed $d
	 * @param string $label
	 
	function w($d, $label = '')
	{
        $trace = debug_backtrace();
        echo "<pre>";
        echo "w() en: ".$trace[1]['file'].":".$trace[1]['line'];
        if ($label != '') {
            echo "<br/><br/><strong>{$label} ...</strong>";
        }
        var_dump($d);
        echo "</pre>";
	}*/

	/*
	 * Metdo que hace un var_dump y un die
	 * @param mixed $d
	 * @param string $label
	 
	function wd($d, $label = '')
	{
        w($d, $label);
        die;
	}*/
