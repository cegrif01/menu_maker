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

    public function makeMenu(array $userInput)
    {
        try {

            $this->validator->validate($userInput);

            $exporters = ExporterFactory::createExporters($userInput);

            foreach($exporters as $exporter) {

                $exporter->export($userInput);

                if($exporter instanceof Emailable) {

                    $exporter->email($userInput);
                }
            }

        } catch(Exception $e) {

            echo $e->getMessage();
        }
    }
}
