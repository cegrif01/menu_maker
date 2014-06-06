<?php

require('CsvExporter.php');
require('HtmlExporter.php');

class ExporterFactory
{
	public static function createExporters(array $input)
	{
		//by default a CsvExporter will be created
		if(empty($input['export_option'])) {

			return array(new CsvExporter);
		}

		if(in_array('csv', $input['export_option'])) {

			$exporters[] = new CsvExporter;
		}

		if(in_array('html', $input['export_option'])) {

			$exporters[] = new HtmlExporter;
		}

		return $exporters;
	}
}
