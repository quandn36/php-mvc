<?php

class admincontroller extends controller
{
	function index() 
	{

		$page = [
			'title' => 'Danh sách thành viên',
		];

		$list 				= (new admin)->get();
		$nhomQuanTri 		= (new groupadmin())->get();
		$userTrash 			= (new admin())->trash();

		$this->view('views/quantri/danhsachthanhvien',[
			'list'			=>	$list,
			'page'			=>	$page,
			'nhomQuanTri'	=>	$nhomQuanTri,
			'userTrash'		=>	$userTrash
		]);		

	}


	function login() 
	{

		$thongbao = '';
		# xu ly dang nhap
		if(isset($_COOKIE['src'],$_COOKIE['tendangnhap']) && $_COOKIE['src'] && $_COOKIE['tendangnhap']) {

			$_SESSION['status_login'] 	= 	true;
			$_SESSION['login_name'] 	= 	$_COOKIE['tendangnhap'];
			$_SESSION['login_id'] 		=  	$_COOKIE['id'];
		}

		if(islogin()) {

			chuyentrang('index.php');
		}

		if(isset($_POST['tendangnhap']) && trim($_POST['tendangnhap']) !== "" && isset($_POST['matkhau']) && trim($_POST['matkhau']) !== "") {

			// $user = (new admin())->login($_POST['tendangnhap'],password_verify($_POST['matkhau'], hash));
			$user = (new admin())->Auth($_POST['tendangnhap'],$_POST['matkhau']);
			if(!$user) {
				
				$thongbao = msg('Thông tin đăng nhập không chính xác','danger');
				chuyentrang('index.php',['thatbai' => $thongbao]);
				
			}


			if($user->trangthai == 1) {

    			//goi ss tao cờ trạng thái
				$_SESSION['status_login']   =   true;
				$_SESSION['login_name']     =   $user->tendangnhap;
				$_SESSION['login_avt']      =   $user->avt;
				$_SESSION['login_id'] 		= 	$user->id;

				// tao ra cookie hinh anh de load len tren header
				setcookie('avt',$user->avt,$time);

    			//check ong muon luu k
				if(isset($_POST['remember']) && $_POST['remember'] == 1) {

      				// luu cookie
					$time = time()+3600;
					setcookie('src',1,$time);
					setcookie('tendangnhap',$_SESSION['login_name'],$time);
					setcookie('avt',$_SESSION['login_avt'],$time);
					setcookie('id',$_SESSION['login_id'],$time);
					
				}

				$thongbao = msg('Đăng nhập thành công','success');
				chuyentrang('index.php',['thongbao' => $thongbao]);

			} else if($user->trangthai == 2){

				$thongbao = msg('Tài khoản của bạn đã bị khoá','danger');
				chuyentrang('index.php',['thatbai' => $thongbao]);

			} else if($user->trangthai == 0){

				$thongbao = msg('Tài khoản của bạn đã bị xoá do vi phạm quy tắc','danger');
				chuyentrang('index.php',['thatbai' => $thongbao]);
			}
		}
		
		$this->view(
			'views/quantri/login',
			['thongbao'=>$thongbao],
			'empty'
		);
	}


	function logout() 
	{
		session_destroy();
		setcookie('src',false,time()-1);
		setcookie('name',false,time()-1);
		setcookie('avt',false,time()-1);

		#sau khi huy het session + cookie thi chuyen trang ve trang login
		$thongbao = [
			'thongbao' => msg('Đăng xuất thành công','success'),
		];
		chuyentrang('index.php',$thongbao);
	} 

	function create() 
	{
		$page = [
			'title' => 'Thêm mới thành viên',
		];

		$nhomQuanTri 		= (new groupadmin())->get();

		// dd($page);exit;
		$this->view('views/quantri/themmoithanhvien',[
			'page'			=>	$page,
			'nhomQuanTri' 	=>	$nhomQuanTri,
		]);
	}	

	function store() 
	{
		if(isset($_GET['controller']) == 'admin' && isset($_GET['action']) == 'store'){
			$check_unique_username = (new admin())->data_exists(['tendangnhap'=>trim($_POST['tendangnhap'])]);
			if($check_unique_username) {
				$thongbao = msg('Tên tài khoản đã tồn tại','danger');
				chuyentrang('index.php?controller=admin&action=index',['thatbai'=>$thongbao]);
			}

			$newUser = [
				'ten'			=>	trim($_POST['ten']),
				'tendangnhap'	=>	trim($_POST['tendangnhap']),
				'so_dien_thoai' => 	trim($_POST['so_dien_thoai']),
				'dia_chi' 		=> 	trim($_POST['dia_chi']),
				'matkhau'		=>	password_hash($_POST['matkhau'], PASSWORD_DEFAULT),
				'manhom'		=>	trim($_POST['manhom']),
				'avt'			=>  !empty($_POST['url_hinhdaidien'])?ltrim($_POST['url_hinhdaidien'],'public/'):'',
				'trangthai'		=>	trim($_POST['trangthai']),
				'created_at' 	=> 	date("Y-m-d h:i:s"),

			];
			// dd($newUser);
			$User = (new admin())->insert($newUser);

			if($User) {
				$thongbao = msg('Thêm quản trị viên thành công');
				chuyentrang('index.php?controller=admin&action=index',['thongbao'=>$thongbao]);
			}else {
				$thongbao = msg('Thêm quản trị viên thất bại','danger');
				chuyentrang('index.php?controller=admin&action=index',['thatbai'=>$thongbao]);
			}
		}
	}

	function edit() 
	{
		$page = [
			'title' => 'Chỉnh sửa thành viên',
		];

		$id = $_GET['id'];

		$userUpdate 		= (new admin())->find($id);
		$nhomQuanTri 		= (new groupadmin())->get();
		// dd($userUpdate);
		$this->view('views/quantri/chinhsuathanhvien',[
			'userUpdate'	=>	$userUpdate,
			'nhomQuanTri'	=>	$nhomQuanTri,
			'page'    		=>	$page,
		]);
	}

	function update() 
	{
		if(isset($_GET['controller']) == 'admin' && isset($_GET['action']) == 'update' && isset($_GET['id_update']) && $_GET['id_update']) {

			$id = $_GET['id_update'];
			if(isset($_POST['trangthai'],$_POST['url_hinhdaidien'],$_POST['manhom']))
			{
				$dataUser = [
					'ten' 			=> 	trim($_POST['ten']),
					'so_dien_thoai' => 	trim($_POST['so_dien_thoai']),
					'dia_chi' 		=> 	trim($_POST['dia_chi']),
					'avt'			=>	ltrim($_POST['url_hinhdaidien'],'public/'),
					'manhom' 		=> 	trim($_POST['manhom']),
					'trangthai'		=> 	trim($_POST['trangthai']),
					'updated_at' 	=> 	date("Y-m-d h:i:s"),
				];

				$user = (new admin())->update($dataUser,$id);

				if($user){
					$thongbao = msg('Cập nhật thành viên thành công');
					chuyentrang('index.php?controller=admin&action=index',['thongbao'=>$thongbao]);
				}else {
					$thongbao = msg('Cập nhật thành viên thất bại','danger');
					chuyentrang('index.php?controller=admin&action=index',['thongbao'=>$thongbao]);
				}
			}
		}

	}

	function delete() 
	{
		if(isset($_GET['controller']) == 'admin' && isset($_GET['action']) == 'delete') {


			if(isset($_GET['id_delete']))
			{
				$id = $_GET['id_delete'];

				$user = (new admin())->delete($id);

				if($user){
					$thongbao = msg('Xoá thành công');
					chuyentrang('index.php?controller=admin&action=index',['thongbao'=>$thongbao]);
				}else {
					$thongbao = msg('Xoá không thành công','danger');
					chuyentrang('index.php?controller=admin&action=index',['thongbao'=>$thongbao]);
				}
			}
		}
	}

	function profile() {
		//
	}

	function restore() {
		if(isset($_GET['controller']) == 'admin' && isset($_GET['action']) == 'restore' && isset($_GET['id']))
		{
			$delete = (new admin())->restore($_GET['id']);

			if(!$delete) {
				$thongbao = msg('server error','danger');
				chuyentrang('index.php?controller=admin&action=index',['thongbao'=>$thongbao]);
			}
			$thongbao = msg('Khôi phục thành công');
			chuyentrang('index.php?controller=admin&action=index',['thongbao'=>$thongbao]);
		}

	}

	function permanently() {
		if(isset($_GET['controller']) == 'admin' && isset($_GET['action']) == 'permanently' && isset($_GET['id']))
		{
			$delete = (new admin())->delete_permanently($_GET['id']);

			if(!$delete) {
				$thongbao = msg('server error','danger');
				chuyentrang('index.php?controller=admin&action=index',['thongbao'=>$thongbao]);
			}
			$thongbao = msg('Xoá thành công');
			chuyentrang('index.php?controller=admin&action=index',['thongbao'=>$thongbao]);
		}
	}


	function reset_password() {
		$reset_password_id = $_POST['reset_password_id'];

		$find_id_reset_password = (new admin())->find($reset_password_id);
		if(!$find_id_reset_password){
			$data = [
				'status'	=>	'danger',
				'message'	=>	'Không tồn tại user',
			];
			echo json_encode($data);
		}else{
			$arr = [
				'matkhau' => password_hash(12345, PASSWORD_DEFAULT),
			];
			$user_reset_password = (new admin())->update($arr,$reset_password_id);

			if($user_reset_password){
				$data = [
					'status'	=>	'success',
					'message'	=>	'Đặt lại mật khẩu mặc định thành công',
				];
				echo json_encode($data,200);
			}else{
				$data = [
					'status'	=>	'danger',
					'message'	=>	'Đặt lại mật khẩu mặc định thất bại',
				];
				echo json_encode($data,200);
			}
		}
	}

	function change_password() {

		/*id khong dung thong bao loi*/
		if(!isset($_POST['id'])){
			$data = [
				'status'	=>	'danger',
				'message'	=>	'Có lỗi khi đổi mật khẩu',
			];
			echo json_encode($data,200);
			return false;
		}
		
		$id 					= trim($_POST['id']);
		$old_password 			= trim($_POST['old_password']);
		$new_password 			= trim($_POST['new_password']);
		$confirm_new_password 	= trim($_POST['confirm_new_password']);

		$check_user 			= (new admin())->first($id);
		$status_change_pass 	= password_verify($old_password, $check_user->matkhau);

		/*mat khau kiem tra khong dung*/
		if(!$status_change_pass){
			$data = [
				'status'	=>	'danger',
				'message'	=>	'Mật khẩu cũ không đúng',
			];
			echo json_encode($data,200);
			return false;
		}

		/*mat khau xac thuc khong trung khop*/
		if($new_password != $confirm_new_password) {
			$data = [
				'status'	=>	'danger',
				'message'	=>	'Mật khẩu xác thực không đúng không đúng',
			];
			echo json_encode($data,200);
			return false;
		}else{
			/*con lai la truong hop dung thuc hien doi mat khau*/
			$params = [
				'matkhau' => password_hash($new_password, PASSWORD_DEFAULT),
			];

			$confirm_change = (new admin())->update($params,$id);

			if(!$confirm_change) {
				$data = [
					'status'	=>	'danger',
					'message'	=>	'Có lỗi xảy ra khi đổi mật khẩu',
				];
				echo json_encode($data,200);
				return false;
			}else{
				$data = [
					'status'	=>	'success',
					'message'	=>	'Đổi mật khẩu thành công',
				];
				echo json_encode($data,200);
			}
		}
	}
}