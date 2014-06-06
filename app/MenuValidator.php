<?php

require_once('Contracts/Validator.php');

class MenuValidator extends Validator
{
	public function validate(array $input)
	{
		foreach($input['menu'] as $value) {

			foreach($value as $key => $field) {

				if(empty($field) || is_null($field)) {

					throw new Exception("$key was empty");
				}

				if($key == "price" && !is_numeric($field)) {
					
					throw new Exception("$field is not an number");
				}
			}
	
		}
	}
}
