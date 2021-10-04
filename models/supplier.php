<?php 
class supplier extends model
{
	var $table;

	function __construct() {
		parent::__construct();
		$this->table = 'suppliers';
	}

	function getncc()
	{
		return $this->setquery('SELECT * FROM '.$this->table .' WHERE trangthai!=0')->loadrows();
	}

}
