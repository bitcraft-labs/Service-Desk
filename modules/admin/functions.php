<?php

class ADMIN {

	 public function updateAccess($user,$access) {
		  $query = "UPDATE users SET type='$access' WHERE id=$user";
		  return $this->query($query);
	 }
	 	
	 public function getStaffList() {
		  $query = "SELECT users.id as id,
                  user_group.type as type,
                  users.fname as fname,
                  users.lname as lname,
                  users.email as email
                  FROM users
                  INNER JOIN user_group ON user_group.id=users.type
                  WHERE users.type='1' OR users.type='2'";
		  return $this->query($query);
	 }

	 private function connect() {
		  $conn = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD)
				or die ("<br />Could not establish connection to MySQL server");
		  mysql_select_db(DB_DB,$conn)
				or die ("<br />Could not select the indicated database");
		  return $conn;
	 }

	 private function query($sql) {
		  $this->connect();
		  $res = mysql_query($sql);
		  return $res;
	 }
}
