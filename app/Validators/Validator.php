<?php

class Validator
{

	public function validate(array $input)
	{
		foreach($input as $field => $value) {

			if(empty($value)) {

				throw new Exception("$field was empty");
			}
		}
	}
}