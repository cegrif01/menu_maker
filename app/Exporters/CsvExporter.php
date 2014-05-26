<?php

require_once('Exportable.php');

class CsvExporter implements Exportable
{
	public function export()
	{
		//will download csv file to the location specified by the string
		$fp = fopen('/home/charles/Downloads/file.csv', 'w');
		
		array_unshift($_POST['menu'], array_keys($_POST['menu'][0]));

		foreach($_POST['menu'] as $menu_item) {

			fputcsv($fp, $menu_item);
		}

		fclose($fp);
	}

    public function email()
    {
        //just implemented to satisfy an interface
    }
}
