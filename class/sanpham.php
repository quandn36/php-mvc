<?php 
class sanpham extends database
{

	function get() {
		return $this->setquery("select * from `sanpham` where trangthai!= 0")->loadrows();
	}

	function find($id) {
		return $this->setquery("select * from `sanpham` where ma=?")->loadrows([$id]);
	}

	function getncc()
	{
		return $this->setquery('SELECT * FROM `nhacungcap` WHERE trangthai!=0')->loadrows();
	}
	function getloai()
	{
		return $this->setquery('SELECT * FROM `loaisanpham` WHERE trangthai!=0')->loadrows();
	}


	function delete( $id ) {
		return $this->setquery("update `sanpham` set trangthai=0 where ma=$id")->save([$id]);
	}

	function insert( $fields )
	{
		$column = $question ='';
		$params = [];
		foreach ($fields as $key => $value) {
			$column .= "`$key`,";
			$question .= "?,";
			$params[] = trim($value);
		}
		$column = rtrim($column,',');
		$question = rtrim($question,',');
		$sql = 'INSERT INTO `sanpham` ('.$column.') VALUES('.$question.')';

		return $this->setquery($sql)->save($params);
	}
}
