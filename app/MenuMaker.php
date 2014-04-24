<?php

class MenuMaker
{
	public function makeMenu()
	{
		try {
            
			foreach($_POST['menu'] as $value) {
		
				foreach($value as $key => $field) {

					if(empty($field) || is_null($field)) {

						throw new Exception("$key was empty");
					}

					if($key == "price" && !is_numeric($field)) {
						
						throw new Exception("$field is not an number");
					}
				}
			}

		    //will download csv file to the location specified by the string
            $fp = fopen('/home/charles/Downloads/file.csv', 'w');
            
            array_unshift($_POST['menu'], array_keys($_POST['menu'][0]));
            foreach($_POST['menu'] as $menu_item) {

                fputcsv($fp, $menu_item);
                
            }

            fclose($fp);
					
		} catch(Exception $e) {

			echo $e->getMessage();

		}
		
	}// end of makeMenu
}
