<?php

require('CsvExporter.php');
require('HtmlExporter.php');

class ExporterFactory
{
	public static function createExporters()
	{
		//by default a CsvExporter will be created
		if(empty($_POST['export_option'])) {

			return array(new CsvExporter);
		}

		if(in_array('csv', $_POST['export_option'])) {

			$exporters[] = new CsvExporter;
		}

		if(in_array('html', $_POST['export_option'])) {

			$exporters[] = new HtmlExporter;
		}

		return $exporters;
	}
}
