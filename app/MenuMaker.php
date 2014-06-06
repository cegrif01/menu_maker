<?php

require_once('Contracts/Validator.php');
require_once('Exporters/ExporterFactory.php');
require_once('Contracts/Emailable.php');

class MenuMaker
{
    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function makeMenu()
    {
        try {

            $this->validator->validate();

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
