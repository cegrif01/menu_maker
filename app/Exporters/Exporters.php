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
		pp($data);
	}
}