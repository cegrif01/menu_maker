<?php

require_once('Contracts/Exportable.php');
require_once('Contracts/Emailable.php');

class HtmlExporter implements Exportable, Emailable
{
	public function export()
	{
        $file = '/home/charles/Downloads/test.html';
        file_put_contents($file, $this->getMessage());
	}

    public function email()
    {
        $to = "cegrif01@gmail.com"; 
        $from = "cegrif01@gmail.com";
        $subject = "Hello! This is HTML email"; 

        $headers  = "From: $from\r\n"; 
        $headers .= "Content-type: text/html\r\n";

        if(mail('cegrif01@gmail.com', 'html email', $this->getMessage(), $headers)) {
            echo 'mail sent';
        }
    }

    protected function getMessage()
    {
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

        return $message;
    }
}

?>