<?php

namespace Bshelling\Bamboo\Stem;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

use Bshelling\Bamboo\Config\Settings;

class View {


	public static function render($template = 'index.twig' , $data = []){
	
		$templateDir = dirname(__DIR__,4).'/templates';
		$loader = new FilesystemLoader($templateDir);
		$twigEnv = new Environment($loader);
		echo $twigEnv->render($template,$data);
	}
}