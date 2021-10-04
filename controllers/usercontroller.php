<?php

class usercontroller extends controller
{
	function index() {

		$page = [
			'title'	=>	'Danh sách khách hàng',
		];

		$nguoidung = (new user())->get();
		$usertrash = (new user())->trash();

		$this->view('views/nguoidung/danhsachnguoidung',[
			'page'		=>	$page,
			'nguoidung'	=>	$nguoidung,
			'usertrash'	=> 	$usertrash
		]);

	}


	function create() 
	{
		$page = [
			'title'	=>	'Thêm mới khách hàng',
			'subtitle'	=>	'',
		];

		$this->view('views/nguoidung/themmoinguoidung',[
			'page'	=>	$page,
		]);
	}	

	function store() 
	{	
		if(isset($_GET['controller']) == 'user' && isset($_GET['action']) == 'store') {
			if(isset($_POST['tendangnhap'],$_POST['email'],$_POST['password']) && $_POST['tendangnhap'] && $_POST['email'] && $_POST['password']) {

				$newuser = [
					'fullname'		=>	trim($_POST['ten']),
					'username'		=>	trim($_POST['tendangnhap']),
					'email'			=>	trim($_POST['email']),
					'password'		=>	password_hash($_POST['password'], PASSWORD_DEFAULT),
					'address'		=>	$_POST['diachi'],
					'hinhdaidien'	=>	!empty($_POST['url_hinhdaidien'])?ltrim($_POST['url_hinhdaidien'],'public/'):'',
					'tel'			=>	trim($_POST['tel']),
					'trangthai'		=>	1,
					'created_at'	=>	date("Y-m-d h:i:s"),
				];
				// dd($newuser);

				$newuser = (new user())->insert($newuser);

				if($newuser) {
					$thongbao = [
						'thongbao' => msg('Thêm user thành công'),
					];
					chuyentrang('index.php?controller=user&action=index',$thongbao);
				} else {
					$thongbao = [
						'thongbao' => 'Thêm user thất bại','danger',
					];
					chuyentrang('index.php?controller=user&action=index',$thongbao);
				}
			}
		}
	}

	function edit() 
	{
		$page = [
			'title'	=>	'Chỉnh sửa khách hàng',
			'subtitle'	=>	'',
		];

		if(isset($_GET['controller']) == 'user' && isset($_GET['action']) == 'edit' && isset($_GET['id'])) {

			$id = $_GET['id'];

			$userupdate = (new user())->find($id);

			$this->view('views/nguoidung/chinhsuanguoidung',[
				'page'			=>	$page,
				'userupdate'	=> $userupdate,
			]);
		}
	}

	function update() 
	{

		if(isset($_GET['controller']) == 'user' && isset($_GET['action']) == 'update' && isset($_GET['id'])) {
			if(isset($_POST['ten'],$_POST['tendangnhap'],$_POST['email'],$_POST['tel'],$_POST['email']) && $_POST['tendangnhap'] && $_POST['email'] && $_POST['ten']) {
				$id = $_GET['id'];
				
				$updateuser = [
					'fullname'		=>	trim($_POST['ten']),
					'username'		=>	trim($_POST['tendangnhap']),
					'email'			=>	trim($_POST['email']),
					'address'		=>	trim($_POST['diachi']),
					'hinhdaidien'	=>	!empty($_POST['url_hinhdaidien'])?ltrim($_POST['url_hinhdaidien'],'public/'):'',
					'tel'			=>	trim($_POST['tel']),
					'trangthai'		=>	trim($_POST['trangthai']),
					'updated_at'	=>	date("Y-m-d h:i:s"),
				];
				// dd($updateuser);exit();

				$newuser = (new user())->update($updateuser,$id);

				if($newuser) {
					$thongbao = [
						'thongbao' => msg('Cập nhật khách hàng thành công'),
					];
					chuyentrang('index.php?controller=user&action=index',$thongbao);
				} else {
					$thongbao = [
						'thatbai' => msg('Cập nhật khách hàng thất bại','danger'),
					];
					chuyentrang('index.php?controller=user&action=index',$thongbao);
				}
			}
		}

	}

	function delete() 
	{
		if(isset($_GET['controller']) == 'user' && isset($_GET['action']) == 'delete' && isset($_GET['id'])) {

			$id = $_GET['id'];

			$delete_user = (new user())->delete($id);
			// dd($delete_groupadmin);exit();
			
			if( $delete_user ) {
				$thongbao = [
					'thongbao' => msg('Xoá khách hàng thành công'),
				];
				chuyentrang('index.php?controller=user&action=index',$thongbao);
			} else {
				$thongbao = [
					'thongbao' => msg('Xoá nhóm khách hàng thất bại','danger'),
				];
				chuyentrang('index.php?controller=user&action=index',$thongbao);
			}
		}
	}
	
	function restore() {
		if(isset($_GET['controller']) == 'user' && isset($_GET['action']) == 'restore' && isset($_GET['id']))
		{
			$delete = (new user())->restore($_GET['id']);
			
			if(!$delete) {
				$thongbao = msg('server error','danger');
				chuyentrang('index.php?controller=user&action=index',['thongbao'=>$thongbao]);
			}
			$thongbao = msg('Khôi phục thành công');
			chuyentrang('index.php?controller=user&action=index',['thongbao'=>$thongbao]);
		}
		
	}

	function permanently() {
		if(isset($_GET['controller']) == 'user' && isset($_GET['action']) == 'permanently' && isset($_GET['id']))
		{
			$delete = (new user())->delete_permanently($_GET['id']);

			if(!$delete) {
				$thongbao = msg('server error','danger');
				chuyentrang('index.php?controller=user&action=index',['thongbao'=>$thongbao]);
			}
			$thongbao = msg('Xoá thành công');
			chuyentrang('index.php?controller=user&action=index',['thongbao'=>$thongbao]);
		}
	}
}