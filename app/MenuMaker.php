<?php

require_once('Contracts/Validator.php');
require_once('Exporters/ExporterFactory.php');
require_once('Contracts/Emailable.php');

class MenuMaker
{
    public function makeMenu(Validator $validator)
    {
        try {

            $validator->validate();

            $exporters = ExporterFactory::createExporters();

            foreach($exporters as $exporter) {

                $exporter->export();

                if($exporter instanceof Emailable) {

                    $exporter->email();
                }
            }

        } catch(Exception $e) {

            echo $e->getMessage();
        }
    }
}
