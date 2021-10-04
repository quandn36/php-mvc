<?php 
class groupadmin extends model
{
	var $table;

	function __construct() {
		parent::__construct();
		$this->table = "groupadmins";
	}


}
