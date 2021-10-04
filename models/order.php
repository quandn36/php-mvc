<?php 
class order extends model
{
	var $table;
	
	function __construct() {
		parent::__construct();
		$this->table = 'orders';
	}

	function donhanghoanthanh() {
		$sql = 'SELECT * FROM orders WHERE trangthaidonhang=1';
		return $this->setquery($sql)->loadrows();
	}

	function donhangkhac() {
		$sql = 'SELECT * FROM orders WHERE trangthaidonhang!=1';
		return $this->setquery($sql)->loadrows();
	}

}
