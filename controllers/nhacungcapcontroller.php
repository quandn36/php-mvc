<?php

class nhacungcapcontroller extends controller
{
	function index() {

		$page = [
			'title'	=>	'Danh sách nhà cung cấp',
		];

		$nhacungcap 		= 	(new supplier())->get();
		$supplier_trash 	= 	(new supplier())->trash();
		$this->view('views/nhacungcap/danhsachnhacungcap',[
			'page'				=>	$page,
			'nhacungcap'		=>	$nhacungcap,
			'supplier_trash'	=> $supplier_trash
		]);

	}

	//them moi ncc
	function create(){
		$page = [
			'title'	=>	'Thêm mới nhà cung cấp',

		];

		$this->view('views/nhacungcap/themmoinhacungcap',[
			'page' => $page
		]);
	}


	function store(){
		if(isset($_GET['controller']) == 'sanpham' && isset($_GET['action']) == 'store'){
			if(isset($_POST['ten'],$_POST['trangthai']) && $_POST['ten'] && $_POST['trangthai']) {


				$newNCC = [
					'ten' 			=> trim($_POST['ten']),
					'trangthai' 	=> trim($_POST['trangthai']),
					'hinhdaidien' 	=> !empty($_POST['url_hinhdaidien'])?ltrim($_POST['url_hinhdaidien'],'public/'):'',
					'created_at' 	=> date("Y-m-d h:i:s"),
				];

				// dd($newNCC);
				$newNCC = (new supplier())->insert($newNCC);
				if($newNCC) {
					$thongbao = [
						'thongbao' => msg('Thêm nhà cung cấp thành công'),
					];
					chuyentrang('index.php?controller=nhacungcap&action=index',$thongbao);
				} else {
					$thongbao = [
						'thongbao' => 'Thêm nhà cung cấp thất bại','danger',
					];
					chuyentrang('index.php?controller=nhacungcap&action=index',$thongbao);
				}
			}
		}
	}

	// chinh sua ncc
	function edit(){
		$page = [
			'title'	=>	'Chỉnh sửa nhà cung cấp',
		];
		if(isset($_GET['id'])) {

			$id = $_GET['id'];

			$itemNhacungcap = (new supplier())->find($id);

			$this->view('views/nhacungcap/chinhsuanhacungcap',[
				'page' 				=> 	$page,
				'itemNhacungcap' 	=> 	$itemNhacungcap,
			]);
		}
	}


	function update(){

		if(isset($_GET['controller']) == 'nhacungcap' && isset($_GET['action']) == 'update' && isset($_GET['id'])) {

			// dd($_REQUEST);exit();
			$id = $_GET['id'];

			$datancc = [
				'ten' 			=> 	trim($_POST['ten']),
				'trangthai' 	=> 	trim($_POST['trangthai']),
				'hinhdaidien' 	=> 	trim($_POST['url_hinhdaidien']),
				'hinhdaidien' 	=> 	!empty($_POST['url_hinhdaidien'])?ltrim($_POST['url_hinhdaidien'],'public/'):'',
				'updated_at' 	=> 	date("Y-m-d h:i:s"),
			];
			// dd($datasanpham);exit();
			$datancc = (new supplier())->update($datancc,$id);

			if( $datancc ) {
				$thongbao = [
					'thongbao' => msg('Cập nhật nhà cung cấp thành công'),
				];
				chuyentrang('index.php?controller=nhacungcap&action=index',$thongbao);
			} else {
				$thongbao = [
					'thongbao' => msg('Cập nhật nhà cung cấp thất bại','danger'),
				];
				chuyentrang('index.php?controller=nhacungcap&action=index',$thongbao);
			}

		}
	}


	function delete(){
		if(isset($_GET['controller']) == 'nhacungcap' && isset($_GET['action']) == 'delete' && isset($_GET['id'])) {

			$id = $_GET['id'];

			$deletencc = (new supplier())->delete($id);

			if( $deletencc ) {
				$thongbao = [
					'thongbao' => msg('Xoá sản phẩm thành công'),
				];
				chuyentrang('index.php?controller=nhacungcap&action=index',$thongbao);
			} else {
				$thongbao = [
					'thongbao' => msg('Xoá sản phẩm thất bại','danger'),
				];
				chuyentrang('index.php?controller=nhacungcap&action=index',$thongbao);
			}

		}
	}

	function restore() {
		if(isset($_GET['controller']) == 'nhacungcap' && isset($_GET['action']) == 'restore' && isset($_GET['id']))
		{
			$delete = (new supplier())->restore($_GET['id']);

			if(!$delete) {
				$thongbao = msg('server error','danger');
				chuyentrang('index.php?controller=nhacungcap&action=index',['thongbao'=>$thongbao]);
			}
			$thongbao = msg('Khôi phục thành công');
			chuyentrang('index.php?controller=nhacungcap&action=index',['thongbao'=>$thongbao]);
		}
		
	}

	function permanently() {
		if(isset($_GET['controller']) == 'nhacungcap' && isset($_GET['action']) == 'permanently' && isset($_GET['id']))
		{
			$delete = (new supplier())->delete_permanently($_GET['id']);

			if(!$delete) {
				$thongbao = msg('server error','danger');
				chuyentrang('index.php?controller=nhacungcap&action=index',['thongbao'=>$thongbao]);
			}
			$thongbao = msg('Xoá thành công');
			chuyentrang('index.php?controller=nhacungcap&action=index',['thongbao'=>$thongbao]);
		}
	}


}

