<?php

class Validator
{

	public function validate(array $input)
	{
		
		foreach($input['menu'] as $value) {
			
			foreach($value as $key => $field) {

				if(empty($field) || is_null($field)) {

					throw new Exception("$key was empty");
				}
			}
			
		}
	}
}