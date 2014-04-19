<?php

interface ExportableInterface
{
	public function export(array $data, $exportTo = "");
	
}

class PdfExporter implements ExportableInterface
{
	
	public function export(array $data, $exportTo = "")
	{
		return "Pdf Exporter";
	}
}

class HtmlExporter implements ExportableInterface
{
	
	public function export(array $data, $exportTo = "")
	{
		return "Html Exporter";
	}
}

class CsvExporter implements ExportableInterface
{
	
	public function export(array $data, $exportTo = "")
	{

		$csv_file = 'file.csv';
		header( "Content-Type: text/csv;charset=utf-8" );
		header( "Content-Disposition: attachment;filename=\"$csv_file\"" );
		header("Pragma: no-cache");
		header("Expires: 0");

		$fp = fopen('php://output', 'w');

		array_unshift($data['menu'], array_keys($data['menu'][0]));
		foreach($data['menu'] as $menu_item) {

			fputcsv($fp, $menu_item);
		}

		fclose($fp);
		exit;
	}
}