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

				$csv_file = 'file.csv';
				header( "Content-Type: text/csv;charset=utf-8" );
				header( "Content-Disposition: attachment;filename=\"$csv_file\"" );
				header("Pragma: no-cache");
				header("Expires: 0");

				$fp = fopen('php://output', 'w');

				array_unshift($_POST['menu'], array_keys($_POST['menu'][0]));
				foreach($_POST['menu'] as $menu_item) {

					fputcsv($fp, $menu_item);
				}

				fclose($fp);
				die();
					
			} catch(Exception $e) {

				echo $e->getMessage();

			}
		
	}// end of makeMenu
}
