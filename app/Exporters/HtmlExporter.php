<?php

require_once('Exportable.php');

class HtmlExporter implements Exportable
{
	public function export()
	{
		echo "HtmlExporter";
	}

    public function email($data, $info)
    {

        if(mail($info['to'], $info['from'], $data['message'], $data['headers'])) {

            return true;
        }

        return false;

    }
}