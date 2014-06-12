<?php

require_once('app/MenuMaker.php');
require_once('app/MenuValidator.php');

try {

	if(empty($_POST)) {

		throw new Exception('This page can only be reached from a POST request');
	}
	
	$menuMaker = new MenuMaker(new MenuValidator);
	$menuMaker->makeMenu($_POST);

} catch(Exception $e) {

	echo $e->getMessage();
}
