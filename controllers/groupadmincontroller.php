<?php

class groupadmincontroller extends controller
{
	function index() {

		$page = [
			'title'	=>	'Danh sách nhóm quản trị',
		];

		$groupadmin 		= 	(new groupadmin())->get();
		$groupadmin_trash	=	(new groupadmin())->trash();

		$this->view('views/nhomquantri/danhsachnhomquantri',[
			'page'		 		=>	$page,
			'groupadmin' 		=> $groupadmin,
			'groupadmin_trash'	=>	$groupadmin_trash
		]);
	}


	function create() 
	{
		$page = [
			'title'	=>	'Thêm mới nhóm quản trị',
			'subtitle'	=>	'',
		];

		$this->view('views/nhomquantri/themmoinhomquantri',[
			'page'	=>	$page,
		]);
	}	

	function store() 
	{
		if(isset($_GET['controller']) == 'groupadmin' && isset($_GET['action']) == 'store') {

			if(isset($_POST['ten'],$_POST['mota']) && $_POST['ten'] && $_POST['mota']) {

				$newgroupadmin = [
					'ten'			=>	trim($_POST['ten']),
					'mota'			=>	trim($_POST['mota']),
					'img'			=>	!empty($_POST['url_hinhdaidien'])?ltrim($_POST['url_hinhdaidien'],'public/'):'',
					'trangthai'		=>	1,
					'created_at'	=>	date("Y-m-d h:i:s"),
				];
				// dd($newuser);exit();

				$newgroupadmin = (new groupadmin())->insert($newgroupadmin);

				if($newgroupadmin) {
					$thongbao = [
						'thongbao' => msg('Thêm nhóm quản trị thành công'),
					];
					chuyentrang('index.php?controller=groupadmin&action=index',$thongbao);
				} else {
					$thongbao = [
						'thongbao' => 'Thêm nhóm quản trị thất bại','danger',
					];
					chuyentrang('index.php?controller=groupadmin&action=index',$thongbao);
				}

			}
		}
	}

	function edit() 
	{
		$page = [
			'title'	=>	'Chỉnh sửa nhóm quản trị',
			'subtitle'	=>	'',
		];

		if(isset($_GET['controller']) == 'groupadmin' && isset($_GET['action']) == 'edit' && isset($_GET['id'])) {
			$id = $_GET['id'];

			$groupupdate = (new groupadmin())->find($id);


			$this->view('views/nhomquantri/chinhsuanhomquantri',[
				'page'		 	=>	$page,
				'groupupdate'	=>	$groupupdate,

			]);
		}

	}

	function update() 
	{
		if(isset($_GET['controller']) == 'groupadmin' && isset($_GET['action']) == 'update' && isset($_GET['id'])) {
			if(isset($_POST['ten'],$_POST['mota']) && $_POST['ten'] && $_POST['mota']) {
				$id = $_GET['id'];

				$groupupdate = [
					'ten'			=>	trim($_POST['ten']),
					'mota'			=>	trim($_POST['mota']),
					'img'			=>	!empty($_POST['url_hinhdaidien'])?ltrim($_POST['url_hinhdaidien'],'public/'):'',
					'trangthai'		=>	1,
					'updated_at'	=>	date("Y-m-d h:i:s"),
				];

				// dd($groupupdate);exit();
				$groupupdate = (new groupadmin())->update($groupupdate,$id);

				if($groupupdate) {
					$thongbao = [
						'thongbao' => msg('Cập nhật nhóm quản trị thành công'),
					];
					chuyentrang('index.php?controller=groupadmin&action=index',$thongbao);
				} else {
					$thongbao = [
						'thatbai' => msg('Cập nhật nhóm quản trị thất bại','danger'),
					];
					chuyentrang('index.php?controller=groupadmin&action=index',$thongbao);
				}
			}
		}
		

	}

	function delete() 
	{
		if(isset($_GET['controller']) == 'groupadmin' && isset($_GET['action']) == 'delete' && isset($_GET['id'])) {

			$id = $_GET['id'];

			$delete_groupadmin = (new groupadmin())->delete($id);
			// dd($delete_groupadmin);exit();

			if( $delete_groupadmin ) {
				$thongbao = [
					'thongbao' => msg('Xoá nhóm quản trị thành công'),
				];
				chuyentrang('index.php?controller=groupadmin&action=index',$thongbao);
			} else {
				$thongbao = [
					'thongbao' => msg('Xoá nhóm quản trị thất bại','danger'),
				];
				chuyentrang('index.php?controller=groupadmin&action=index',$thongbao);
			}
		}

	}

	function restore() {
		if(isset($_GET['controller']) == 'groupadmin' && isset($_GET['action']) == 'restore' && isset($_GET['id']))
		{
			$delete = (new groupadmin())->restore($_GET['id']);

			if(!$delete) {
				$thongbao = msg('server error','danger');
				chuyentrang('index.php?controller=groupadmin&action=index',['thongbao'=>$thongbao]);
			}
			$thongbao = msg('Khôi phục thành công');
			chuyentrang('index.php?controller=groupadmin&action=index',['thongbao'=>$thongbao]);
		}
		
	}

	function permanently() {
		if(isset($_GET['controller']) == 'groupadmin' && isset($_GET['action']) == 'permanently' && isset($_GET['id']))
		{
			$delete = (new groupadmin())->delete_permanently($_GET['id']);

			if(!$delete) {
				$thongbao = msg('server error','danger');
				chuyentrang('index.php?controller=groupadmin&action=index',['thongbao'=>$thongbao]);
			}
			$thongbao = msg('Xoá thành công');
			chuyentrang('index.php?controller=groupadmin&action=index',['thongbao'=>$thongbao]);
		}
	}
	
}