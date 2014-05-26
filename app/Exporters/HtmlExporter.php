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
        $message = <<<EOF
        <html> 
          <body bgcolor="#DCEEFC"> 
            <center> 
                <b>This is a test</b> <br> 
                <font color="red">Thanks Charles Griffin!</font> <br> 
                <a href="http://www.billionfactorial.com/">check out my blog</a> 
            </center> 
              <br><br>*** Now you Can send HTML Email <br> Regards<br>Charles Griffin
          </body> 
        </html> 
EOF;

        if(mail('cegrif01@gmail.com', 'html email', $message, $headers)) {
            pp('mail sent');
            return true;
        }
        pp('fail');
        return false;
    }

}
