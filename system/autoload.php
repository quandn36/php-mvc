<?php

include 'system/config/config.php';
include 'system/libs/functions.php';

spl_autoload_register(function($classname){
	$pathsystem = 'system/db/' . $classname . '.php';
	if(file_exists($pathsystem)) {
		include ($pathsystem);
	}

	$pathlibs = 'system/libs/' . $classname . '.php';
	if(file_exists($pathlibs)) {
		include ($pathlibs);
	}

	$pathcontroller = 'controllers/' . $classname . '.php';
	if(file_exists($pathcontroller)) {
		include ($pathcontroller);
	}

	$pathmodels = 'models/' . $classname . '.php';
	if(file_exists($pathmodels)) {
		include ($pathmodels);
	}

});