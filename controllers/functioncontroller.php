<?php

class functioncontroller extends controller
{
	function index() {

		$page = [
			'title'	=>	'Danh sách chức năng',

		];

		$this->view('views/chucnang/danhsachchucnang',[
			'page'	=>	$page,
		]);
	}


	function create() 
	{
		$page = [
			'title'	=>	'Thêm mới chức năng',

		];

		$this->view('views/chucnang/themmoichucnang',[
			'page'	=>	$page,
		]);
	}	

	function store() 
	{
		//
	}

	function edit() 
	{
		//
	}

	function update() 
	{

		//

	}

	function delete() 
	{
		//
	}
	
}