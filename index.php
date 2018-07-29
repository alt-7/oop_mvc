<?php 



require 'application/core/Router.php';

use application\core\Router;

spl_autoload_register(function($class) {
	$path = str_replace('\\', '/', $class.'.php');
	if(file_exists($path)) {
		require $path;
	}
});

$route = new Router();
$route->run();