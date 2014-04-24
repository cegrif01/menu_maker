<?php

require_once('Exportable.php');
require_once('app/Emailable.php');

class HtmlExporter implements Exportable, Emailable
{
	public function export()
	{
		echo "HtmlExporter";
	}

    public function email(array $data, array $info)
    {

        if(mail($info['to'], $info['from'], $data['message'], $data['headers'])) {

            return true;
        }

        return false;

    }
}