<?php

// include vào file autoload
include "system/autoload.php";

// xu ly nhung gi duoc
$action 		= $_GET['action']??'index';
$controllername = $_GET['controller']??'hethong';
$controllerpath = $controllername.'controller';
$path 			= "controllers/$controllerpath.php";

// dd($controllerpath);
if(file_exists($path)) 
{
	$controller = new $controllerpath();
	if(method_exists($controller, $action)) {
		
		if(islogin()) {
			if($controller->role->checkrole($controllername,$action,$_SESSION['login_id'])) {	
            	$controller->$action();
            } else {
            	$controller->_403();
            }
		}else {
			$controller = new admincontroller();
			$controller->login();
		}
	}else {
		$controller->_404();
	}
}else {
	$controller = new controller();
	$controller->_404();
}

ob_end_flush();