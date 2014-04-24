<?php

require('Validator.php');
require('Exporters/ExporterFactory.php');

class MenuMaker
{
	public function makeMenu(Validator $validator, array $data)
	{
		try {

			$validator->validate($data);

			$exporters = ExporterFactory::createExporters($data);

			foreach($exporters as $exporter) {

				$exporter->export($data);
			}

		} catch(Exception $e) {

			echo $e->getMessage();

		}
	}
}
