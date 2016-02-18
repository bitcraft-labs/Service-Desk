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

  //---------QR Code Generation---------->
  public function myUrlEncode($string) {
      $entities = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
      $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
      return str_replace($entities, $replacements, urlencode($string));
  }

  public function getQRCode() {
    $link = $this->myUrlEncode("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
    return "<img src='https://chart.googleapis.com/chart?cht=qr&chl=$link&chs=150x150' width='120' alt='qr-mobile' />";
  }

  //---------- Customer Module ---------->
  public function checkPersonExists($id) {
    $sql = "SELECT * FROM users where id = '$id'";
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
            INNER JOIN users ON users.id=machine.user_id";
    return $this->query($sql);
  }

  public function getPersonInfo($name){
    if ($name == 'all') {
      $sql = "SELECT users.id as id, users.fname as fname, users.lname as lname,
          user_group.type as type, users.email as email, users.banner_id as banner_id
        FROM users
        INNER JOIN user_group ON users.type=user_group.id
        WHERE users.type = 3";
    } else {
      $sql = "SELECT * FROM users WHERE id = '$name'";
    }
    return $this->query($sql);
  }

  public function getPersonCheckups($name){
    return false;
  }
  // <-------- /Customer Module -----------

  //---------- Staff Module -------------->
  public function checkStaffMemberExists($name) {
    return false;
  }
  /*
  public function getStaffInfo($name){          //Function outlined
    if ($name = 'all'){
      $sql = "SELECT * FROM ";
    } else {
      $sql = "SELECT * FROM WHERE = '$name'";
    }
    }
  }*/

  public function getAccessTypes() {
    $sql = "SELECT * FROM user_group";
    return $this->query($sql);
  }

  /* End user function */
  public function getBuildingsRow($name) {
    if($name == 'all') {
      $sql = "SELECT * FROM 'building'";
    }
    return $this->query($sql);
    
  }

  public function getUserAccessLevel($user) {
    $sql = "SELECT users.type as type
      FROM users
      INNER JOIN user_group ON user_group.id=users.type
      WHERE users.id='$user'";
    return $this->query($sql);
  }

  public function getVerbatimUserAccessLevel() {
    $acc = $_SESSION['user_type'];
    $sql = "SELECT type
      FROM user_group
      WHERE id='$acc'";
    $this->dbconnect();
    $i = mysql_query($sql);
    while ($j = mysql_fetch_array($i)) {
      $res = $j['type'];
      break;
    }
    return $res;
  }

  public function getStaffUserInfo() {
    $sql = "SELECT users.id as id,
      user_group.type as type,
      users.fname as fname,
      users.lname as lname,
      users.email as email
      FROM users
      INNER JOIN user_group ON user_group.id=users.type
      WHERE users.type='1' OR users.type='2'";
    return $this->query($sql);
  }

  // <-------- /Staff Module --------------

  private function dbconnect() {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DB)
        or die ("<br/>Could not connect to MySQL server " . mysqli_error());
    // mysql_select_db(DB_DB,$conn)
    //     or die ("<br/>Could not select the indicated database");

    return $conn;
  }

  private function query($sql){
    $res = mysqli_query($this->dbconnect(), $sql);
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

    while ($row = mysqli_fetch_array($res)){

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
