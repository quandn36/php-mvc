<?php

class ordercontroller extends controller
{
	function index() {

		$page = [
			'title'	=>	'Danh sách đơn hàng',

		];

		$orderlist = (new order)->donhangkhac();
		$don_hang_da_hoan_thanh = (new order)->donhanghoanthanh();
		// dd($orderlist);

		$this->view('views/donhang/danhsachdonhang',[
			'page'	=>	$page,
			'orderlist' => $orderlist,
			'don_hang_da_hoan_thanh' => $don_hang_da_hoan_thanh
		]);
	}


	function create() 
	{
		$page = [
			'title'	=>	'Thêm mới đơn hàng',

		];

		$this->view('views/donhang/themmoidonhang',[
			'page'	=>	$page,
		]);
	}	

	function store() 
	{
		//
	}

	function edit() 
	{
		$page = [
			'title'	=>	'Chỉnh sửa đơn hàng',

		];

		if( isset($_GET['controller'])=='order' && isset($_GET['action'])=='edit' && isset($_GET['id']) && $_GET['id'] ){
			$id = $_GET['id'];

			$order_edit = (new order())->find($id);

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

			// dd($order_detail);
			$this->view('views/donhang/chinhsuadonhang',['page' => $page,'order_edit' => $order_edit,'order_detail'=>$order_detail]);

		}


	}

	function update() 
	{
		if(isset($_GET['controller'])=='order' && isset($_GET['action'])=='update') {
			if(isset($_POST['select_order_status']) && isset($_GET['order_id']) && $_GET['order_id']) {
				$id = $_GET['order_id'];

				$data = [
					'trangthaidonhang' => $_POST['select_order_status']
				];

				$order_update = (new order())->update($data,$id);

				if(!$order_update){
					$thongbao = [
						'thatbai' => msg('server error'),
					];
					chuyentrang('index.php?controller=order&action=index',$thongbao);
				}
				$thongbao = [
					'thongbao' => msg('Cập nhật trạng thái đơn hàng thành công'),
				];
				chuyentrang('index.php?controller=order&action=index',$thongbao);
			}
		}

		// if(isset($_POST['id'])){
		// 	// get id va trang thai can set
		// 	$id = $_POST['id'];
		// 	$order_status = $_POST['order_status'];

		// 	$order = (new order)->find($id);

		// 	if( !$order ) {
		// 		$arr = [
		// 			'status' 	=> 'error',
		// 			'message' 	=> 'sản phẩm không tồn tại!',
		// 		];	
		// 		echo json_encode($arr);
		// 	} else {
		// 		$data = [
		// 			'trangthaidonhang' => $order_status
		// 		];

		// 		$update_order = (new order)->update($data,$id);

		// 		if( !$update_order ) {
		// 			$arr = [
		// 				'status' 	=> 'error',
		// 				'message' 	=> 'cập nhật thất bại!',
		// 			];
		// 			echo json_encode($arr);
		// 		}

		// 		$arr = [
		// 			'status' 	=> 'success',
		// 			'message' 	=> 'Đã chuyển trạng thái thành công!',
		// 		];
		// 		echo json_encode($arr);
		// 	}
		// }
		

	}

	function delete() 
	{
		//
	}
	
}