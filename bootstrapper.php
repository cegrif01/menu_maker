<?php

require_once('app/MenuMaker.php');

require_once('app/Exporters/Exporters.php');
require_once('app/Validators/Validator.php');
require_once('app/Emailer.php');

try {

	if(empty($_POST)) {

		throw new Exception('This page can only be reached from a POST request');
	}

	$menuMaker = (new MenuMaker(new CsvExporter, new Validator, new Emailer))->makeMenu($_POST);

} catch(Exception $e) {

	echo $e->getMessage();
}