<?php

require_once('MenuMaker.php');

(new Bootstrapper)->boot();

class Bootstrapper
{

	public function boot()
	{
		$menuMaker = (new MenuMaker())->makeMenu($_POST);


	}
}