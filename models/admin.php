<?php 
class admin extends model
{
	var $table;

	function __construct() {
		parent::__construct();
		$this->table = 'admins';
	}

	/**
	 *  ham kiem tra thong tin dang nhap
	 *  dau vao la param tendangnhap va matkhau
	 *	đúng trả về true or false
	 */
	function login($user,$pass) {
		return $this->setquery("SELECT * FROM ".$this->table." WHERE tendangnhap=? AND matkhau=?")->loadrow([$user,$pass]);
	}

	/**
	 *	hàm lấy tất cả thông tin lay ra nhiều dòng
	 * 	không có đầu vào
	 * 	trả ra 1 mảng dữ liệu
	 */
	
	function get() {
		return $this->setquery("SELECT * FROM ".$this->table." WHERE trangthai!= 0")->loadrows();
	}


	function getUserStatus() {
		return $this->setquery("SELECT * FROM ".$this->table." WHERE trangthai==1")->loadrows();
	}
	/**
	 * hàm tìm kiếm
	 * đầu vào là 1 khoá tìm
	 * trả ra 1 mảng dữ liệu
	 */
	
	function find($id) {
		return $this->setquery("SELECT * FROM ".$this->table." WHERE id=?")->loadrows([$id]);
	}

	/**
	 * hàm xoá theo id
	 * đầu vào id
	 * đầu ra trả về true or false
	 * update trạng thái = 0
	 */ 
	
	function delete( $id ) {
		$sql = 'UPDATE '.$this->table .' SET trangthai=0 WHERE id=?';
		return $this->setquery($sql)->save([$id]);
	}

	/**
	 * hàm thêm dữ liệu
	 * đầu vò là 1 mảng param
	 *
	 */
	
	function create( $fields) {
		$column = $question ='';
		$params = [];
		foreach ($fields as $key => $value) {
			$column .= "`$key`,";
			$question .= "?,";
			$params[] = trim($value);
		}
		$column = rtrim($column,',');
		$question = rtrim($question,',');
		$sql = 'INSERT INTO '.$this->table .' ('.$column.') VALUES('.$question.')';

		return $this->setquery($sql)->save($params);
	}

	/**
	 * hàm cập nhật chỉnh sửa dữ liệu
	 * đầu vào là 1 mảng param
	 *
	 */
	function update($fields=[],$id) {
		$setString = '';
		$params = [];

		foreach ($fields as $key => $value) {
			$setString .= "`$key`=?,";
			$params[] = trim($value);
		}
		/**
		 *	bỏ đi dấu phảy cuối cùng
		 */
		
		$setString 	= rtrim($setString,",");
		$params[] 	= $id;

		$sql = 'UPDATE '.$this->table .' SET '.$setString.' WHERE id=?';
		
		return $this->setquery($sql)->save($params);
	}

	/*check quyen hien thi du lieu*/
	function check_quyen($controller,$action,$uid)
    {   

        if($this->setquery('SELECT id FROM functions WHERE lienket = ? and trangthai=1 and allow=1')->loadrow(["index.php?controller=$controller&action=$action"]))
            return true;
        return $sdfsdf = $this->setquery('SELECT * FROM `privileges` where machucnang = (SELECT id FROM functions WHERE lienket = ?) and maquantri = ?')->loadrow(["index.php?controller=$controller&action=$action",$uid]);
    }
}
