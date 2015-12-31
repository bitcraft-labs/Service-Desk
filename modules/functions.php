<?php
class DAL {
	public function __construct() {}

    private function dbconect() {
    	$conn = mysql_connect($db_host,$db_username,$db_password)
    		or die ("<br />ERROR: Failed to connect to SQL server");

    	mysql_select_db($db_name,$conn)
    		or die ("<br />ERROR: Failed to select database");

    	return $conn;
    }
}

class ReportQuery() {
	private $_results = array();

	public function __construct()}{}

	public function __set($var,$val) {
		$this->_results[$var] = $val;
	}

	public function __get($var) {
		if (isset($this->_results[$var])) {
			return $this->_results[$var];
		} else {
			return null;
		}
	}

	private function query($sql) {
		$this->dbconnect();

		$res = mysql_query($sql);

		if ($res){
			if (strpos($sql,'SELECT') === false){
				return true;
			}
		} else {
			if (strpos($sql,'SELECT') === false){
				return false;
			} else{
				return null;
			}
		}

		$results = array();

		while ($row = mysql_fetch_array($res)) {
			$result = new ReportQuery();

			foreach ($row as $k=>$v) {
				$result->$k = $v;
			}

			$results[] = $result;
		}
		return $results;      
	}

	public function getRepairType($name){
		$sql = "SELECT * FROM category";
		return $this->query($sql);
	}
}
/*
	function GetProfileReport($cus_id) {
		
		if(!$this->DBLogin()) {
			$this->HandleError("Database login failed");
			return false;
		}
		
		$result = mysql_query("SELECT * FROM category");

		$num_rows = mysql_num_rows($result);

		if ($num_rows > 0) {
			$result = mysql_fetch_array($result);
			return $result;
		}
	}
}

$customerinfo = new CustomerInfo();
*/
?>