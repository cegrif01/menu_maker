<?php

require_once('app/Contracts/Exportable.php');

class CsvExporter implements Exportable
{
    public function export(array $input)
    {
        $config = require('config.php');

        //will download csv file to the location specified by the string
        $fp = fopen($config['csv_file'], 'w');

        array_unshift($input['menu'], array_keys($input['menu'][0]));

        foreach($input['menu'] as $menu_item) {

            fputcsv($fp, $menu_item);
        }

        fclose($fp);
    }
}
