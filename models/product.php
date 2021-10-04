<?php 
class product extends model
{	
	var $table;
	
	function __construct() {
		parent::__construct();
		$this->table = 'products';
	}


}
