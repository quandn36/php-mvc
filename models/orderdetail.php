<?php 
class orderdetail extends model
{
	var $table;
	
	function __construct() {
		parent::__construct();
		$this->table = 'order_details';
	}

	//ham lay ra ban ghi ket noi 2 table
	function getOtherAttribute($arr=[],$fieldkey) {

		if(!empty($arr)) {
			foreach ($arr as $key1 => $value1) {
				$table = $key1;
				$string = ',';
				for ($i = 0; $i<count($value1); $i++) {
					if($i == 0) {
						$string .= $table . '.' . $value1[$i] .',';
					} else {
						$string .= $table . '.' . $value1[$i] .',';
					}
				}
			}
			$string = rtrim($string,',');
			
			$table 	= trim($table);
			$fieldkey = trim($fieldkey);
			$sql = 'SELECT '.$this->table.'.*'.$string.' FROM `'.$this->table.'` join `'.$table.'` on `'.$this->table.'`.id=`'.$table.'`.'.$fieldkey;
			// dd($sql);
			return $this->setquery($sql)->loadrows();
		}
	}

}
