<?php

require_once('Exportable.php');

class HtmlExporter implements Exportable
{
	public function export()
	{
		echo "HtmlExporter";
	}
}