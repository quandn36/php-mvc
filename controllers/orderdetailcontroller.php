<?php

class orderdetailcontroller extends controller
{
	function index() {

		if(isset($_POST['id'])) {

			$id = $_POST['id'];
			$orderlist = (new order)->get();
			$order_detail = (new orderdetail())->findOject(['madonhang'=>$id]);
			foreach ($order_detail as $value) {
				$ten_san_pham = (new product())->findOject(['id'=>$value->masanpham]);
				foreach ($ten_san_pham as $tenvalue) {
					if($value->masanpham ==  $value->masanpham) {
						$value->ten = $tenvalue->ten;
						$value->hinhdaidien = $tenvalue->hinhdaidien;
					}
				}
			}

			// tra ve chuoi json
			echo json_encode($order_detail,200);
		}
	}


	function create() 
	{
		//
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