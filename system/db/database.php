<?php

class database
{
	var $sql,$pdo,$statement;

	function __construct() {
		try
		{
			$option = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
			$this->pdo = new PDO('mysql:host='.HOST.';port='.PORT.';dbname='.DBNAME,USERNAME,PASSWORD,$option);
			$this->pdo->query('set names utf8');

		}catch(PDOException $ex) {
			echo "Không thể kết nối được ___" . $ex->getMessage();	
		}
	}

	function setquery($sql) 
	{
		$this->sql = $sql;
		return $this;
	}

	function loadrow($param = []) 
	{
		try {
			$this->statement = $this->pdo->prepare($this->sql);
			$this->statement->execute($param);
			return $this->statement->fetch(PDO::FETCH_OBJ);
			
		} catch (PDOException $ex) {
			echo "Thực thi xảy ra lỗi ____" . $ex->getMessage();	
		}
	}

	function loadrows($params = []) 
	{
		try {
			$this->statement = $this->pdo->prepare($this->sql);
			$this->statement->execute($params);
			return $this->statement->fetchAll(PDO::FETCH_OBJ);
			
		} catch (PDOException $ex) {
			echo "Thực thi xảy ra lỗi ____" . $ex->getMessage();	
		}
	}

	function save($params = []) 
	{
		try {
			$this->statement = $this->pdo->prepare($this->sql);
			return $this->statement->execute($params);
			
		} catch (PDOException $ex) {
			echo "Thực thi xảy ra lỗi ___" . $ex->getMessage();	
		}
	}

	function disconnect () 
	{
		$this->pdo = null;
		$this->statement = null;
	}

}
