<?php

class Validator
{
	public function validate(array $data)
	{
		foreach($data['menu'] as $value) {
	
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