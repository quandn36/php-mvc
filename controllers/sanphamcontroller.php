<?php

class sanphamcontroller extends controller
{
	function index() {
		$page = [
			'title'	=>	'Danh sách sản phẩm',

		];

		$list 			= (new product())->get();
		$producttrash 	= (new product())->trash();
		$total 			= (new product())->count();

		$this->view('views/sanpham/danhsachsanpham',[
			'list' 				=> 	$list,
			'page'				=>	$page,
			'producttrash'		=>	$producttrash,
		]);

	}

	//them moi san pham
	function create(){
		$page = [
			'title'	=>	'Thêm mới sản phẩm',

		];

		$ncc 	= (new supplier())->get();
		$maloai = (new typeproduct())->get();
		// dd($maloai);exit();

		$this->view('views/sanpham/themmoisanpham',[
			'page' 		=> 	$page,
			'ncc'		=>	$ncc,
			'maloai'	=> 	$maloai,
		]);
	}

	function store() {

		if(isset($_POST['ten']) && isset($_POST['gia']) && isset($_POST['maloai'])) {

			$newproduct = [
				'ten' 				=> trim($_POST['ten']),
				'gia' 				=> str_replace(',','',trim($_POST['gia'])),
				'gia_khuyen_mai' 	=> str_replace(',','',trim($_POST['gia_khuyen_mai'])),
				'soluong' 			=> trim($_POST['soluong']),
				'manhacungcap' 		=> trim($_POST['manhacungcap']),
				'maloai' 			=> trim($_POST['maloai']),
				'mota' 				=> trim($_POST['motangan']),
				'motachitiet' 		=> trim($_POST['motachitiet']),
				'tieude' 			=> trim($_POST['tieude']),
				'slug' 				=> trim($_POST['slug']),
				'trangthai' 		=> 1,
				'created_at' 		=> date("Y-m-d h:i:s"),
				'tukhoa' 			=> trim($_POST['tukhoa']),
				'motatimkiem' 		=> trim($_POST['motatimkiem']),
				'hinhdaidien' 		=> !empty($_POST['url_hinhdaidien'])?ltrim($_POST['url_hinhdaidien'],'public/'):'',
				'hinhchitiet' 		=> !empty($_POST['url_hinhchitiet'])?ltrim($_POST['url_hinhchitiet'],'public/'):'',
			];
			// dd($newproduct);
			$newproduct = (new product())->insert($newproduct);

			if($newproduct) {
				$thongbao = [
					'thongbao' => msg('Thêm sản phẩm thành công'),
				];
				chuyentrang('index.php?controller=sanpham&action=index',$thongbao);
			} else {
				$thongbao = [
					'thongbao' => 'Thêm sản phẩm thất bại','danger',
				];
				chuyentrang('index.php?controller=sanpham&action=index',$thongbao);
			}
		}
	}

	// chinh sua san pham
	function edit() {
		$page = [
			'title'	=>	'Chỉnh sửa sản phẩm',

		];

		if(isset($_GET['controller']) == 'sanpham' && isset($_GET['action']) == 'edit' && isset($_GET['id'])){

			$id = $_GET['id'];

			$listproduct 	= (new product())->find($id);
			$ncc 			= (new supplier())->get();
			$maloai 		= (new typeproduct())->get();

			// dd($listproduct);exit();
			$this->view('views/sanpham/chinhsuasanpham',[
				'page' 			=> 	$page,
				'listproduct'	=> 	$listproduct,
				'ncc'			=>	$ncc,
				'maloai'		=> 	$maloai
			]);
		}
	}

	// chinh sua san pham
	function update() 
	{
		if(isset($_GET['controller']) == 'sanpham' && isset($_GET['action']) == 'update' && isset($_GET['id'])) {
			$id = $_GET['id'];
			$datasanpham = [
				'ten' 			=> 	trim($_POST['ten']),
				'gia' 			=> str_replace(',','',trim($_POST['gia'])),
				'gia_khuyen_mai'=> str_replace(',','',trim($_POST['gia_khuyen_mai'])),
				'soluong' 		=> 	trim($_POST['soluong']),
				'manhacungcap' 	=> 	trim($_POST['manhacungcap']),
				'maloai' 		=> 	trim($_POST['maloai']),
				'mota' 			=> 	trim($_POST['motangan']),
				'motachitiet' 	=> 	trim($_POST['motachitiet']),
				'slug' 			=> 	trim($_POST['slug']),
				'updated_at' 	=> 	date("Y-m-d h:i:s"),
				'tieude' 		=> 	trim($_POST['tieude']),
				'tukhoa' 		=>	trim($_POST['tukhoa']),
				'motatimkiem'	=> 	trim($_POST['motatimkiem']),
				'hinhdaidien' 	=> 	!empty($_POST['url_hinhdaidien'])?ltrim($_POST['url_hinhdaidien'],'public/'):'',
				'hinhchitiet' 	=> 	!empty($_POST['url_hinhchitiet'])?ltrim($_POST['url_hinhchitiet'],'public/'):'',
			];
			// dd($datasanpham);
			$updatesanpham = (new product())->update($datasanpham,$id);

			if( $updatesanpham ) {
				$thongbao = [
					'thongbao' => msg('Cập nhật sản phẩm thành công'),
				];
				chuyentrang('index.php?controller=sanpham&action=index',$thongbao);
			} else {
				$thongbao = [
					'thongbao' => msg('Cập nhật sản phẩm thất bại','danger'),
				];
				chuyentrang('index.php?controller=sanpham&action=index',$thongbao);
			}
		}
	}

	// xoa san pham
	function delete(){
		if(isset($_GET['controller']) == 'sanpham' && isset($_GET['action']) == 'delete' && isset($_GET['id'])) {

			$id = $_GET['id'];

			$deleteproduct = (new product())->delete($id);

			if( $deleteproduct ) {
				$thongbao = [
					'thongbao' => msg('Xoá sản phẩm thành công'),
				];
				chuyentrang('index.php?controller=sanpham&action=index',$thongbao);
			} else {
				$thongbao = [
					'thongbao' => msg('Xoá sản phẩm thất bại','danger'),
				];
				chuyentrang('index.php?controller=sanpham&action=index',$thongbao);
			}

		}
	}

	function restore() {
		if(isset($_GET['controller']) == 'sanpham' && isset($_GET['action']) == 'restore' && isset($_GET['id']))
		{
			$delete = (new product())->restore($_GET['id']);

			if(!$delete) {
				$thongbao = msg('server error','danger');
				chuyentrang('index.php?controller=sanpham&action=index',['thongbao'=>$thongbao]);
			}
			$thongbao = msg('Khôi phục thành công');
			chuyentrang('index.php?controller=sanpham&action=index',['thongbao'=>$thongbao]);
		}
		
	}

	function permanently() {
		if(isset($_GET['controller']) == 'sanpham' && isset($_GET['action']) == 'permanently' && isset($_GET['id']))
		{
			$delete = (new product())->delete_permanently($_GET['id']);

			if(!$delete) {
				$thongbao = msg('server error','danger');
				chuyentrang('index.php?controller=sanpham&action=index',['thongbao'=>$thongbao]);
			}
			$thongbao = msg('Xoá thành công');
			chuyentrang('index.php?controller=sanpham&action=index',['thongbao'=>$thongbao]);
		}
	}
}

