<?php

require('Validator.php');
require('CsvExporter.php');

class MenuMaker
{
	public function makeMenu()
	{
		try {

			$validator = new Validator;
			$validator->validate();

			$csvExporter = new CsvExporter;
			$csvExporter->export();
					
		} catch(Exception $e) {

			echo $e->getMessage();

		}

	}
}
