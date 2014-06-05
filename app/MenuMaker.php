<?php

require('Validator.php');
require('Exporters/ExporterFactory.php');
require_once('Contracts/Emailable.php');

class MenuMaker
{
    public function makeMenu()
    {
        try {

            $validator = new Validator;
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

?>