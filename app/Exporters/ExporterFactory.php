<?php

require('CsvExporter.php');
require('HtmlExporter.php');

class ExporterFactory
{
	public static function createExporters(array $data)
	{
		//by default a CsvExporter will be created
		if(empty($data['export_option'])) {

			return array(new CsvExporter);
		}

		if(in_array('csv', $data['export_option'])) {

			$exporters[] = new CsvExporter;
		}

		if(in_array('html', $data['export_option'])) {

			$exporters[] = new HtmlExporter;
		}

		return $exporters;
	}
}