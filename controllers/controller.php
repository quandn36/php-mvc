<?php

class controller
{
	var $role;
    var $parent_menu;
    function __construct()
    {
        if(islogin())
        {
            $this->role = new role();
            $this->parent_menu = $this->role->get_functionsforuser(0,$_SESSION['login_id']);
        }
    }

	// dat a truyen vao phai la mang co key
	function view( $views,$data=[],$layout = 'layout')
	{
		if(is_array($data)) {
			extract($data);
		}
		include "views/$layout.php";
	}

	function _404() {
		$this->view('views/404','','empty');
	}
	
	function _403()
    {
        $this->view('views/403',[]);
    }
}