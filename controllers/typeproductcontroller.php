<?php

class typeproductcontroller extends controller
{
	function index() {

		$page = [
			'title'	=>	'Danh sách loại sản phẩm',

		];

		$typeproduct 		= (new typeproduct())->get();
		$type_product_trash = (new typeproduct())->trash();

		$this->view('views/loaisanpham/danhsachloaisanpham',[
			'page'					=>	$page,
			'typeproduct' 			=> $typeproduct,
			'type_product_trash'	=> $type_product_trash
		]);
	}


	function create() 
	{
		$page = [
			'title'	=>	'Thêm mới loại sản phẩm',
			'subtitle'	=>	'',
		];

		$list_type_product = (new typeproduct())->get();

		$this->view('views/loaisanpham/themmoiloaisanpham',[
			'page'				=>	$page,
			'list_type_product'	=>	$list_type_product
		]);
	}	

	function store() 
	{
		if(isset($_GET['controller']) == 'typeproduct' && isset($_GET['action']) == 'store') {
			if(isset($_POST['ten'],$_POST['mota']) && $_POST['ten'] && $_POST['mota']) {

				$new_type_product = [
					'ten'			=>	trim($_POST['ten']),
					'mota'			=>	trim($_POST['mota']),
					'macha'			=>	trim($_POST['manhom']),
					'tieude'		=>	trim($_POST['tieude']),
					'tukhoa'		=>	trim($_POST['tukhoa']),
					'motatimkiem'	=>	trim($_POST['motatimkiem']),
					'tenrutgon'		=>	trim($_POST['tenrutgon']),
					'trangthai'		=>	trim($_POST['trangthai']),
					'icon'			=>	!empty($_POST['url_icon'])?ltrim($_POST['url_icon'],'public/'):'',
					'hinhchiase'	=>	!empty($_POST['url_hinhchiase'])?ltrim($_POST['url_hinhchiase'],'public/'):'',
					'created_at'	=>	date("Y-m-d h:i:s"),
				];
				// dd($new_type_product);

				$new_type_product = (new typeproduct())->insert($new_type_product);

				if($new_type_product) {
					$thongbao = [
						'thongbao' => msg('Thêm loại sản phẩm thành công'),
					];
					chuyentrang('index.php?controller=typeproduct&action=index',$thongbao);
				} else {
					$thongbao = [
						'thatbai' => 'Thêm loại sản phẩm thất bại','danger',
					];
					chuyentrang('index.php?controller=typeproduct&action=index',$thongbao);
				}
			}
		}
	}

	function edit() 
	{
		$page = [
			'title'		=>	'Chỉnh sửa loại sản phẩm',
			'subtitle'	=>	'',
		];

		if(isset($_GET['controller']) == 'typeproduct' && isset($_GET['action']) == 'edit' && isset($_GET['id'])){

			$id = $_GET['id'];

			$type_product_edit 		= (new typeproduct())->find($id);
			$list_of_type_product 	= (new typeproduct())->get();

			// dd($type_product_edit);

			$this->view('views/loaisanpham/chinhsualoaisanpham',[
				'page'					=>	$page,
				'type_product_edit' 	=> 	$type_product_edit,
				'list_of_type_product'	=>	$list_of_type_product,
			]);
		}
	}

	function update() 
	{
		if(isset($_GET['controller']) == 'typeproduct' && isset($_GET['action']) == 'update' && isset($_GET['id'])) {
			$id = $_GET['id'];
			$data_update_type_product = [
				'ten' 			=> 	trim($_POST['ten']),
				'mota' 			=> 	trim($_POST['mota']),
				'macha' 		=> 	trim($_POST['manhom'])??'',
				'tieude' 		=> 	trim($_POST['tieude']),
				'tukhoa' 		=> 	trim($_POST['tukhoa']),
				'motatimkiem' 	=> 	trim($_POST['motatimkiem']),
				'tenrutgon' 	=> 	trim($_POST['tenrutgon']),
				'trangthai' 	=> 	trim($_POST['trangthai']),
				'icon' 			=> 	!empty($_POST['url_icon'])?ltrim($_POST['url_icon'],'public/'):'',
				'hinhchiase' 	=> 	!empty($_POST['url_hinhchiase'])?ltrim($_POST['url_hinhchiase'],'public/'):'',
				'updated_at' 	=> 	date("Y-m-d h:i:s")
			];

			$data_update_type_product = (new typeproduct())->update($data_update_type_product,$id);
			// dd($data_update_type_product);

			if($data_update_type_product) {
				$thongbao = [
					'thongbao' => msg('Cập nhật loại sản phẩm thành công'),
				];
				chuyentrang('index.php?controller=typeproduct&action=index',$thongbao);
			} else {
				$thongbao = [
					'thatbai' => msg('Cập nhật loại sản phẩm thất bại','danger'),
				];
				chuyentrang('index.php?controller=typeproduct&action=index',$thongbao);
			}

		}
	}

	function delete() 
	{
		if(isset($_GET['controller']) == 'typeproduct' && isset($_GET['action']) == 'update' && isset($_GET['id'])) {

			$id = $_GET['id'];

			$delete_type_product = (new typeproduct())->delete($id);

			if( $delete_type_product ) {
				$thongbao = [
					'thongbao' => msg('Xoá loại sản phẩm thành công'),
				];
				chuyentrang('index.php?controller=typeproduct&action=index',$thongbao);
			} else {
				$thongbao = [
					'thatbai' => msg('Xoá loại sản phẩm thất bại','danger'),
				];
				chuyentrang('index.php?controller=typeproduct&action=index',$thongbao);
			}

		}
	}

	function restore() {
		if(isset($_GET['controller']) == 'typeproduct' && isset($_GET['action']) == 'restore' && isset($_GET['id']))
		{
			$delete = (new typeproduct())->restore($_GET['id']);

			if(!$delete) {
				$thongbao = msg('server error','danger');
				chuyentrang('index.php?controller=typeproduct&action=index',['thongbao'=>$thongbao]);
			}
			$thongbao = msg('Khôi phục thành công');
			chuyentrang('index.php?controller=typeproduct&action=index',['thongbao'=>$thongbao]);
		}
		
	}

	function permanently() {
		if(isset($_GET['controller']) == 'typeproduct' && isset($_GET['action']) == 'permanently' && isset($_GET['id']))
		{
			$delete = (new typeproduct())->delete_permanently($_GET['id']);

			if(!$delete) {
				$thongbao = msg('server error','danger');
				chuyentrang('index.php?controller=typeproduct&action=index',['thongbao'=>$thongbao]);
			}
			$thongbao = msg('Xoá thành công');
			chuyentrang('index.php?controller=typeproduct&action=index',['thongbao'=>$thongbao]);
		}
	}
	
}