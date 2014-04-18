<?php

require_once('MenuMaker.php');

try {

	if(empty($_POST)) {

		throw new Exception('This page can only be reached from a POST request');
	}
		
	$menuMaker = (new MenuMaker())->makeMenu($_POST);

} catch(Exception $e) {

	echo $e->getMessage();
}
