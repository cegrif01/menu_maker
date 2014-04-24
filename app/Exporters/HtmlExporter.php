<?php

require_once('Exportable.php');

class HtmlExporter implements Exportable
{
	public function export(array $data)
	{
        require('html_menu.php');
	}

}