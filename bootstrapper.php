<?php

require_once('app/MenuMaker.php');
require_once('app/MenuValidator.php');

try {

	if(empty($_POST)) {

		throw new Exception('This page can only be reached from a POST request');
	}
	
	$menuMaker = new MenuMaker(new MenuValidator);
	$menuMaker->makeMenu();

} catch(Exception $e) {

	echo $e->getMessage();
}

function pp($x, $die=true)
{
    echo "<pre>".print_r($x, true)."</pre>";
    if ($die) die;
}