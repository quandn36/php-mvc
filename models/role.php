<?php 
class role extends model
{   
    var $table;
    
    function __construct() {
        parent::__construct();
        $this->table = 'privileges';
    }
    
    // start các hàm liên quan tới bảng admins
    function get_users()
    {
        $this->setquery('SELECT * from admins where trangthai=1');
        return $this->loadrows();
    }

    function get_user($id)
    {
        $this->setquery('SELECT * from admins where trangthai=1 and id=?');
        return $this->loadrow([$id]);
    }
    // end các hàm liên quan tới bảng admins


    // các bảng còn lại
    function deny($uid)
    {
        $this->setquery('DELETE from '.$this->table.' where maquantri=?');
        return $this->save([$uid]);
    }

    
    function get_functions($parent_id = 0)
    {
        $this->setquery('SELECT * from functions where trangthai=1 and macha=? and allow != 1');
        return $this->loadrows([$parent_id]);
    }
    function grant($fid,$uid)
    {
        $this->setquery('INSERT into '.$this->table.' values(?,?)');
        return $this->save([$fid,$uid]);
    }
    
    function checked($fid,$uid)
    {
        $this->setquery('SELECT * from '.$this->table.' where machucnang=? and maquantri=?');
        return $this->loadrows([$fid,$uid]);
    }

    function get_functionsforuser($parent_id = 0,$uid)
    {
        $this->setquery('SELECT c.* FROM '.$this->table.' p join functions c on p.machucnang = c.id
        where p.maquantri = ? and c.macha=? and hienthimenu=1');
        return $this->loadrows([$uid,$parent_id]);
    }
    function checkrole($controller,$action,$uid)
    {   
        if($this->setquery('SELECT id FROM functions WHERE lienket = ? and trangthai=1 and allow=1')->loadrow(["index.php?controller=$controller&action=$action"]))
            return true;
        return $this->setquery('SELECT * FROM '.$this->table.' where machucnang = (SELECT id FROM functions WHERE lienket = ?) 
        and maquantri = ?')->loadrow(["index.php?controller=$controller&action=$action",$uid]);
    }
}