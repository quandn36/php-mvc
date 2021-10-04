<?php 
class user extends model
{
	var $table;

	function __construct() {
		parent::__construct();
		$this->table = 'users';
	}



}
