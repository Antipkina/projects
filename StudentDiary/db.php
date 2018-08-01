<?php

class db{
	protected static $_instance;
	
	public static function getInstance() {
			if(self :: $_instance == null) {
				self :: $_instance = new self;
			}
			return self :: $_instance;
	}
	
	private function __construct() {
		$this -> connect = mysql_connect('localhost' , 'root' , '');
		if(!$this -> connect) {
			die ('Ошибка соединения : ' . mysql_error());
		}
		if(!mysql_select_db('diary' , $this ->connect)) {
			die ('Не удалось выбрать базу : ' . mysql_error());
		}
	}
	
	private function __clone() { //
	}
	
	private function __wakeup() {
	}
	
	public static function query($sql){
		$obj = self :: $_instance;
		
		if(isset($obj ->connect)){
			$result = mysql_query($sql);
			
			if(!$result){
				echo "Ошибка DB , запрос не удался \n";
				echo 'MySQL Error : ' . mysql_error;
				exit;
			}
			return $result;
		}
		return false;
	}
}
?>