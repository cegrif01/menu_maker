<?php

class MenuMaker
{
	public function __construct(ExportableInterface $exporter, Validator $validator, Emailer $emailer)
	{
		$this->exporter = $exporter;
		$this->validator = $validator;
		$this->emailer = $emailer;
	}

	public function makeMenu(array $input)
	{
		try{

			$this->validator->validate($input);
			$data = $this->exporter->export($input);

		} catch(Exception $e) {

			echo $e->getMessage();

		}
		
	}
}