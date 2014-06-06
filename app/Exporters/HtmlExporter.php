<?php

require_once('app/Contracts/Exportable.php');
require_once('app/Contracts/Emailable.php');

class HtmlExporter implements Exportable, Emailable
{
    public function __construct()
    {
        $this->config = require('config.php');
    }

    public function export(array $input)
    {
        $file = $this->config['html_file'];
        file_put_contents($file, $this->getMessage($input));
    }

    public function email(array $input)
    {
        $email = $this->config['email'];
        $from = $to = $email;

        $headers  = "From: $from\r\n"; 
        $headers .= "Content-type: text/html\r\n";

        if(mail($to, $this->config['email_subject'], $this->getMessage($input), $headers)) {
            echo 'mail sent';
        }
    }

    protected function getMessage(array $input)
    {
        //begin of HTML message 
        $message = '<html><body>';
        $message .= '<h1>Your Custom Menu</h1><table><tr>';

        foreach($input['menu'] as $key => $menu_items) {

            $message .= '<tr>';
            if($key == 0) {
                
                foreach(array_keys($menu_items) as $item) {
                    $message .= "<th>$item</th>";
                }
            }

            $message .= '</tr></tr>';

            foreach(array_values($menu_items) as $item) {
                $message .= "<td>$item</td>";
            }
            
            $message .= '</table></body></html>';
        }
        return $message;
    }
}
