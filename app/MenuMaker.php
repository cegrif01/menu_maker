<?php

require('Validator.php');
require_once('Contracts/Emailable.php');
require('Exporters/ExporterFactory.php');

class MenuMaker
{
	public function makeMenu()
	{
		try {

			$validator = new Validator;
			$validator->validate();

			$exporters = ExporterFactory::createExporters();

			foreach($exporters as $exporter) {

				$exporter->export();
				
                if($exporter instanceof Emailable) {

                    $exporter->email();
                }
			}

		} catch(Exception $e) {

			echo $e->getMessage();
		}
	}
}

?>