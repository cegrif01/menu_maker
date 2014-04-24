<?php

require_once('Exportable.php');

class CsvExporter implements Exportable
{
	public function export(array $data)
	{
		//will download csv file to the location specified by the string
		$fp = fopen('/home/charles/Downloads/file.csv', 'w');
		
		array_unshift($data['menu'], array_keys($data['menu'][0]));
		foreach($data['menu'] as $menu_item) {

			fputcsv($fp, $menu_item);
			
		}

		fclose($fp);
	}
}