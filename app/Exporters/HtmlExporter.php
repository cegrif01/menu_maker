<?php

require_once('Exportable.php');

class HtmlExporter implements Exportable
{
	public function export()
	{
		//require('html_menu.php');
	}

    public function email()
    {
        $to = "cegrif01@gmail.com"; 
        $from = "cegrif01@gmail.com"; 
        $subject = "Hello! This is HTML email"; 

        $headers  = "From: $from\r\n"; 
        $headers .= "Content-type: text/html\r\n";

        //begin of HTML message 
        $message = '<html><body>';

        $message .= '<h1>Your Custom Menu</h1><table>';

        $message .= '<tr>';

        foreach($_POST['menu'] as $key => $menu_items) {

            $message .= '<tr>';
            if($key == 0) {

                foreach(array_keys($menu_items) as $item) {
                    $message .= "<th>$item</th>";
                }
            }

            $message .= '</tr>';


            $message .= '<tr>';

            foreach(array_values($menu_items) as $item) {
                $message .= "<td>$item</td>";
            }
            
            $message .= '</table></body></html>';
        }

        if(mail('cegrif01@gmail.com', 'html email', $message, $headers)) {
            echo 'mail sent';
        }
    }

}
