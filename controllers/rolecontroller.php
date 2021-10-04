<?php

class rolecontroller extends controller
{
	function __construct()
    {
        parent::__construct();
    }

	function index()
	{
		$page = [
			'title' => 'Phân quyền người dùng',
		];
		$list = $this->role->get_users();

		return $this->view('views/role/list',['page' => $page,'list' => $list]);
	}

	function createrole()
	{
		$page = [
			'title' => 'Cấp quyền User',
		];

		// show message when success
		$msg = '';

		// neu khong ton tai id user thi chuyen trang ve index
		if(!isset($_GET['id']) || !$_GET['id']) {

			chuyentrang(href('role','index'));
		}

		$id = $_GET['id'];
		// co thi lay ra user de thuc hien phan quyen
		$user = $this->role->get_user($id);

		// tim ma khong thay user thi ve trang chu
		if(!$user) {
			chuyentrang(href('role','index'));
		}

		$data = [
			'functions'	=>	$this->role->get_functions(),
			'user'		=>	$user,
			'msg'		=>	$msg,
			'page' 		=> 	$page,
		];

		$this->view('views/role/set-role',$data);
	}

	function setrole(){
		// dd($_REQUEST);
		
        // xu ly ghi quyen neu chinh sua
		if(isset($_POST['user']))
		{
            //ghi vao quyen dc su dung
			$this->role->deny($_POST['user']);

			if(isset($_POST['funcs']))
			{
				foreach($_POST['funcs'] as $func)
				{
					$this->role->grant($func,$_POST['user']);
				}
			}
			$thongbao = [
				'thongbao' => msg('Ghi quyền thành công'),
			];
			chuyentrang('index.php?controller=role&action=index',$thongbao);
		}
    }
}