<?php

namespace Bshelling\Bamboo\Config;



class Settings {

	public static function getTemplatePath(){

		$currentDir = getcwd();
		print_r(scandir($currentDir));

	}
}