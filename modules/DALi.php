<?php
if ( !class_exists( 'DALi' ) ) {
  class DALi {
    protected function dbconnect() {
      return new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DB);
    }

    public function query($query) {
      $db = $this->dbconnect();
      $result = $db->query($query);

      while ($row = $result->fetch_array() ) {
        $results[] = $row;
      }

      return $results;
    }

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

    //--------End-User Functions----------->
    public function getBuildingsRow($request) {
   	  if($request == 'all') {
	      $sql = "SELECT * FROM building";
	      return $this->query($sql);
  	  }
    }

    public function getCategories() {
      $sql = "SELECT * FROM category ORDER BY `cat` ASC";
      return $this->query($sql);
    }

    public function buildCategorySections() {
      $cats = $this->getCategories();
      $num = 1;

      foreach ($cats as $category) {
        if ($num == 1) {
          $build = "<li class='active'><a href='#$num' data-toggle='tab'>$num. $category[1]</a></li>\r\n";
        } else {
          $build .= "<li><a href='#$num' data-toggle='tab'>$num. $category[1]</a></li>\r\n";
        }
        $num++;
      }

      return $build;
    }

    public function buildSubCategorySections() {
      $sql = "SELECT category.cat, sub_category.sub_cat, sub_category.description, sub_category.fa_icon, cat_color.color FROM sub_category INNER JOIN category ON category.id = sub_category.cat INNER JOIN cat_color ON sub_category.color = cat_color.id ORDER BY cat ASC, sub_cat ASC";
      $subcats = $this->query($sql);
      $cats = array();
      $subsec = " ";
      $count = 1;
      foreach ($subcats as $row) {
          if (!in_array($row['cat'], $cats)) {
            $cat      = $row['cat'];
            array_push($cats, $cat);
            if ($count == 1) {
              $subsec .= "<!-- $cat -->\r\n<div class='tab-pane active' id='$count'>\r\n";
              $count += 1;
            } else {
              $subsec .= "<!-- $cat -->\r\n<div class='tab-pane' id='$count'>\r\n";
              $count += 1;
            }
            foreach ($subcats as $sub) {
              if ($cat == $sub['cat']) {
                $sub_cat  = $sub[1];
                $desc     = $sub[2];
                $fonticon = $sub[3];
                $color    = $sub[4];
                $subsec .= "<h4><i class='fa fa-$fonticon fa-2x pull-left align m-$color'></i> <a data-toggle='modal' data-target='#incidentModal' data-title='$sub_cat' name='submit-value' href='#'>$sub_cat</a><br />".
                  "<small>$desc</small></h4>\r\n";
              }
            }
            $subsec .= "</div>\r\n\r\n";
          }
      }

      return $subsec;
    }

    //-------Help Desk Staff Functions ---->
    public function getPersonInfo($name){
      if ($name == 'all') {
          $sql = "SELECT * FROM users";
      } else {
        $sql = "SELECT * FROM users WHERE id = '$name'";
      }
      return $this->query($sql);
    }

    //-------Admin Functions--------------->
    public function getHDUsers() {
      $sql = "SELECT id, fname, lname, email
              FROM users
              JOIN user_roles
              WHERE users.id = user_roles.userID AND user_roles.roleID <> '2'
              GROUP BY id";
      return $this->query($sql);
    }

    public function addUser() {
      $sql = "INSERT INTO users (fname, lname, email, username, banner_id, phone, creation_date, confirmcode)
              VALUES('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['username']."','".$_POST['banner_id']."','".$_POST['phone']."','".date()."','y')";
      return $this->query($sql);
    }

    public function getUserID($who) {
      $sql = "SELECT id FROM users WHERE username='$who' LIMIT 1";
      $result = $this->query($sql);
      foreach ($result as $res) {
        $id = $res[0];
      }
      return $id;
    }
    /*
    function sendPassCreateEmail() {
        $this->SendResetPasswordLink()
        return true;
    }

    function GetResetPasswordCode($email) {
       return substr(md5($email.$this->sitename.$this->rand_key),0,10);
    }

    function GetAbsoluteURLFolder() {
        $scriptFolder = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://';
        $urldir ='';
        $pos = strrpos($_SERVER['REQUEST_URI'],'/');
        if(false !==$pos)
        {
            $urldir = substr($_SERVER['REQUEST_URI'],0,$pos);
        }
        $scriptFolder .= $_SERVER['HTTP_HOST'].$urldir;
        return $scriptFolder;
    }

    function SendResetPasswordLink($user_rec)
    {
        $email = $_POST['email'];
        $mailer = new PHPMailer();
        $mailer->CharSet = 'utf-8';
        $mailer->AddAddress($email,$_POST['fname']);
        $mailer->Subject = "Your reset password request at ".$this->sitename;
        $mailer->From = "support@bitcraftlabs.net";
        $mailer->FromName = "Bitcraft Labs";
        $link = $this->GetAbsoluteURLFolder().
                '/resetpwd.php?email='.
                urlencode($email).'&code='.
                urlencode($this->GetResetPasswordCode($email));
        $mailer->Body ="Hello ".$user_rec['fname']." ".$user_rec['lname'].",\r\n\r\n".
        "There was a request to reset your password at Bitcraft Labs.\r\n".
        "Please click the link below to complete the request: \r\n".$link."\r\n".
        "Regards,\r\n".
        "Support\r\n";
        if(!$mailer->Send())
        {
            return false;
        }
        return true;
    }*/

  }
}

//Need this to init class ----> $dali = new DALi();

/* Sample Future-Proof Protected Functions

    public function insert($table, $data, $format) {
      // Check for $table or $data not set
      if ( empty( $table ) || empty( $data ) ) {
        return false;
      }

      // Connect to the database
      $db = $this->connect();

      // Cast $data and $format to arrays
      $data = (array) $data;
      $format = (array) $format;

      // Build format string
      $format = implode('', $format);
      $format = str_replace('%', '', $format);

      list( $fields, $placeholders, $values ) = $this->prep_query($data);

      // Prepend $format onto $values
      array_unshift($values, $format);
      // Prepary our query for binding
      $stmt = $db->prepare("INSERT INTO {$table} ({$fields}) VALUES ({$placeholders})");
      // Dynamically bind values
      call_user_func_array( array( $stmt, 'bind_param'), $this->ref_values($values));

      // Execute the query
      $stmt->execute();

      // Check for successful insertion
      if ( $stmt->affected_rows ) {
        return true;
      }

      return false;
    }
    public function update($table, $data, $format, $where, $where_format) {
      // Check for $table or $data not set
      if ( empty( $table ) || empty( $data ) ) {
        return false;
      }

      // Connect to the database
      $db = $this->connect();

      // Cast $data and $format to arrays
      $data = (array) $data;
      $format = (array) $format;

      // Build format array
      $format = implode('', $format);
      $format = str_replace('%', '', $format);
      $where_format = implode('', $where_format);
      $where_format = str_replace('%', '', $where_format);
      $format .= $where_format;

      list( $fields, $placeholders, $values ) = $this->prep_query($data, 'update');

      //Format where clause
      $where_clause = '';
      $where_values = '';
      $count = 0;

      foreach ( $where as $field => $value ) {
        if ( $count > 0 ) {
          $where_clause .= ' AND ';
        }

        $where_clause .= $field . '=?';
        $where_values[] = $value;

        $count++;
      }
      // Prepend $format onto $values
      array_unshift($values, $format);
      $values = array_merge($values, $where_values);
      // Prepary our query for binding
      $stmt = $db->prepare("UPDATE {$table} SET {$placeholders} WHERE {$where_clause}");

      // Dynamically bind values
      call_user_func_array( array( $stmt, 'bind_param'), $this->ref_values($values));

      // Execute the query
      $stmt->execute();

      // Check for successful insertion
      if ( $stmt->affected_rows ) {
        return true;
      }

      return false;
    }
    public function select($query, $data, $format) {
      // Connect to the database
      $db = $this->connect();

      //Prepare our query for binding
      $stmt = $db->prepare($query);

      //Normalize format
      $format = implode('', $format);
      $format = str_replace('%', '', $format);

      // Prepend $format onto $values
      array_unshift($data, $format);

      //Dynamically bind values
      call_user_func_array( array( $stmt, 'bind_param'), $this->ref_values($data));

      //Execute the query
      $stmt->execute();

      //Fetch results
      $result = $stmt->get_result();

      //Create results object
      while ($row = $result->fetch_object()) {
        $results[] = $row;
      }
      return $results;
    }
    public function delete($table, $id) {
      // Connect to the database
      $db = $this->connect();

      // Prepary our query for binding
      $stmt = $db->prepare("DELETE FROM {$table} WHERE ID = ?");

      // Dynamically bind values
      $stmt->bind_param('d', $id);

      // Execute the query
      $stmt->execute();

      // Check for successful insertion
      if ( $stmt->affected_rows ) {
        return true;
      }
    }
    private function prep_query($data, $type='insert') {
      // Instantiate $fields and $placeholders for looping
      $fields = '';
      $placeholders = '';
      $values = array();

      // Loop through $data and build $fields, $placeholders, and $values
      foreach ( $data as $field => $value ) {
        $fields .= "{$field},";
        $values[] = $value;

        if ( $type == 'update') {
          $placeholders .= $field . '=?,';
        } else {
          $placeholders .= '?,';
        }

      }

      // Normalize $fields and $placeholders for inserting
      $fields = substr($fields, 0, -1);
      $placeholders = substr($placeholders, 0, -1);

      return array( $fields, $placeholders, $values );
    }
    private function ref_values($array) {
      $refs = array();
      foreach ($array as $key => $value) {
        $refs[$key] = &$array[$key];
      }
      return $refs;
    }
  }
}
*/

?>
