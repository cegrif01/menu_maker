<?php

require('Validator.php');
require('CsvExporter.php');
require('HtmlExporter.php');

class MenuMaker
{
	public function makeMenu()
	{
		try {

			$validator = new Validator;
			$validator->validate();

			// if the user doesn't specify an option, just
			// export a csv by default
			if(empty($_POST['export_option'])) {

				$csvExporter = new CsvExporter;
				$csvExporter->export();

			} else {

				if(in_array('html', $_POST['export_option'])) {

					$htmlExporter = new HtmlExporter;
					$htmlExporter->export();
				}

				if(in_array('csv', $_POST['export_option'])) {

					$csvExporter = new CsvExporter;
					$csvExporter->export();
				}

			}			
					
		} catch(Exception $e) {

			echo $e->getMessage();

		}
	}
}
