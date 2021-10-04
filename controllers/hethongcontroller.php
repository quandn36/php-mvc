<?php

class hethongController extends controller
{
	function index()
	{
		$page = [
			'title' => 'Dashboard',
		];

		$total_user 			= (new user())->count();
		$total_product 			= (new product())->count();
		$total_type_product 	= (new typeproduct())->count();
		$total_order 			= (new order())->count();


		// dd($totaluser);
		$this->view('views/trangchu',[
			'page' 					=> 	$page,
			'total_user'			=> 	$total_user,
			'total_product'			=>	$total_product,
			'total_type_product'	=>	$total_type_product,
			'total_order'			=>	$total_order,
		]);
	}

	function contact(){
		$page = [
			'title' => 'Liên hệ',
		];

		$this->view("views/lienhe",[
			'page' 	=> 	$page,
		]);
	}

	


}
