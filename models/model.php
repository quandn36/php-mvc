<?php

class model extends database
{
	var $table;
	
	function __construct() {
		parent::__construct();
	}

	// lay het cac ban ghi 
	function get() {
		return $this->setquery('SELECT * FROM `'.$this->table.'` WHERE trangthai!=0')->loadrows();
	}

	// lay ra 1 ban ghi cua theo phan tu truyen vao
	function find($id) {
		return $this->setquery('SELECT * FROM `'.$this->table.'` WHERE trangthai!=0 and id=?')->loadrows([$id]);
	}

	function data_exists($data=[],$uid = '') {
		$field = '';
		// neu ton tai uid thi them and khi check data update
		$tring_uid = !empty($uid)?' AND `id`!=? ':'';
		// dd($tring_uid);
		foreach($data as $key => $value) {
			$field 	.= "`$key`";
			$param[] = $value;
		}
		if(!empty($uid)) {
			$param[] = $uid;
		}

		$sql = 'SELECT * FROM `'.$this->table.'` WHERE '.$field.'=?'. $tring_uid;
		return $this->setquery($sql)->loadrow($param);
	}

	function first($id) {
		$sql = 'SELECT * FROM `'.$this->table.'` WHERE trangthai!=0 and id=?';
		return $this->setquery($sql)->loadrow([$id]);
	}

	function trash() {
		$sql = 'SELECT * FROM `'.$this->table.'` WHERE trangthai=0';
		return $this->setquery($sql)->loadrows();
	}

	// tim kiem 1 ban ghi lay ra cot truyen vao tuong ung
	function finds($arr=[]) {
		$mang = [];
		$string = '';
		foreach($arr as $key => $value) {
			$string .= "`$key`";
			$mang[] = trim($value);
		}
		$sql = 'SELECT * FROM `'.$this->table.'` WHERE trangthai!=0 and '.$string.'=?';
		return $this->setquery($sql)->loadrows($mang);
	}

	// tim kiem 1 ban ghi lay ra cot truyen vao tuong ung
	function findOject($arr=[]) {
		$mang = [];
		$string = '';
		foreach($arr as $key => $value) {
			$string .= "`$key`";
			$mang[] = trim($value);
		}
		$sql = 'SELECT * FROM `'.$this->table.'` WHERE trangthai!=0 and '.$string.'=?';
		return $this->setquery($sql)->loadrows($mang);
	}

	// dem tong cac phan tu co trong bang
	function count() {
		$sql = 'select COUNT(*) as `total` from '.$this->table;
		return $this->setquery($sql)->loadrow();
	}

	// ham xu ly kiem tra dang nhap
	function login($us,$pass) {
		return $this->setquery('SELECT * FROM `'.$this->table.'` WHERE trangthai!=0 and tendangnhap=? and matkhau=?')
		->loadrow([$us,$pass]);
	}

	/*auth*/
	function Auth($username,$password) {
		$sql 	= 'SELECT * FROM `'.$this->table.'` WHERE trangthai!=0 and tendangnhap=?';
		$user 	= $this->setquery($sql)->loadrow([$username]);
		if(password_verify($password, $user->matkhau)) {
			return $user;
		}
		return false;

	}


	// ham them du lieu
	function insert($fields) {   
		$column = $question ='';
		$params = [];
		foreach ($fields as $key => $value) {
			$column .= "`$key`,";
			$question .= "?,";
			$params[] = trim($value);
		}
		$column = rtrim($column,',');
		$question = rtrim($question,',');
		$sql = 'INSERT INTO `'.$this->table.'` ('.$column.') VALUES('.$question.')';

		return $this->setquery($sql)->save($params);
	}

	// ham sua du lieu
	function update($fields=[],$id) {
		$setString = '';
		$params = [];

		foreach ($fields as $key => $value) {
			$setString .= "$key=?,";
			$params[] = trim($value);
		}
		$setString 	= rtrim($setString,",");
		$params[] 	= $id;

		$sql = 'UPDATE `'.$this->table.'` SET '.$setString.' WHERE id=?';
		return $this->setquery($sql)->save($params);
	}

	// ham xoa du lieu
	function delete($id) {
		return $this->setquery('UPDATE `'.$this->table.'` SET trangthai=0 WHERE id=?')->save([$id]);
	}

	function restore($id) {
		$sql = 'UPDATE `'.$this->table.'` SET trangthai=1 WHERE id=?';
		return $this->setquery($sql)->save([$id]);
	}

	// xoa vinh vien
	function delete_permanently($id) {
		$sql = 'DELETE FROM `'.$this->table.'` WHERE id=?';
		return $this->setquery($sql)->save([$id]);
	}

	// function getProductAndOrderdetailAttribute($arr=[],$fieldkey) {

	// 	if(!empty($arr)) {
	// 		foreach ($arr as $key1 => $value1) {
	// 			$table = $key1;
	// 			$string = ',';
	// 			for ($i = 0; $i<count($value1); $i++) {
	// 				if($i == 0) {
	// 					$string .= $table . '.' . $value1[$i] .',';
	// 				} else {
	// 					$string .= $table . '.' . $value1[$i] .',';
	// 				}
	// 			}
	// 		}
	// 		$string = rtrim($string,',');

	// 		$table 	= trim($table);
	// 		$fieldkey = trim($fieldkey);
	// 		$sql = 'SELECT '.$this->table.'.*'.$string.' FROM `'.$this->table.'` join `'.$table.'` on `'.$this->table.'`.id=`'.$table.'`.'.$fieldkey;
	// 		// dd($sql);
	// 		return $this->setquery($sql)->loadrows();
	// 	}
	// }
	// ham tiep theo
}
