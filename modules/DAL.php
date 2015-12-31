<?php 
 
class DALQueryResult {
     
  private $_results = array();
 
  public function __construct(){}
 
  public function __set($var,$val){
    $this->_results[$var] = $val;
  }
 
  public function __get($var){  
    if (isset($this->_results[$var])){
      return $this->_results[$var];
    }
    else{
      return null;
    }
  }
}
 
class DAL {
 
  public function __construct(){}
  
  public function checkPersonExists($id) {
    $sql = "SELECT * FROM directory where user_id = '$id'";
    $result = $this->query($sql);
    if (mysql_num_rows($result) > 0)
      return true;
    else
      return false;
  }

  public function getPersonMachines($name){
    $sql = "SELECT machine.mach_id as mach_id, manufacturer.mfr as mfr, machine.model as model, machine.serial_num as serial, machine.warr_status as warr_status, machine.purchaser as purchaser
            FROM machine 
            INNER JOIN manufacturer ON manufacturer.mfr_id=machine.mfr_id
            INNER JOIN directory ON directory.user_id=machine.user_id";
    return $this->query($sql);
  }

  public function getPersonInfo($name){
    if ($name = 'all') {
      $sql = "SELECT * FROM directory";
    } else {
      $sql = "SELECT * FROM directory WHERE user_id = '$name'";
    }
    return $this->query($sql);
  }

  public function getPersonCheckups($name){
    return false;
  }

  private function dbconnect() {
    $conn = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)
        or die ("<br/>Could not connect to MySQL server");
         
    mysql_select_db(DB_DB,$conn)
        or die ("<br/>Could not select the indicated database");
     
    return $conn;
  }
   
  private function query($sql){
 
    $this->dbconnect();
 
    $res = mysql_query($sql);
 
    if ($res){
      if (strpos($sql,'SELECT') === false){
        return true;
      }
    }
    else{
      if (strpos($sql,'SELECT') === false){
        return false;
      }
      else{
        return null;
      }
    }
 
    $results = array();
 
    while ($row = mysql_fetch_array($res)){
 
      $result = new DALQueryResult();
 
      foreach ($row as $k=>$v){
        $result->$k = $v;
      }
 
      $results[] = $result;
    }
    return $results;        
  }  
}
 
?>