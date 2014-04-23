<?php

class CsvExporter
{
	public function export()
	{
		
		$fp = fopen('/home/charles/Downloads/file.csv', 'w');
		
		array_unshift($_POST['menu'], array_keys($_POST['menu'][0]));
		foreach($_POST['menu'] as $menu_item) {

			fputcsv($fp, $menu_item);
			
		}

		fclose($fp);
	}
}