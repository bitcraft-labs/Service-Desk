<!--New Service record main template
TODO: Database integration to have dropdown menu to select user
-->
<?php
 $dal = new Dal();

 ?>
 <div class="col-md-12">
   <h1>New Service Record <br /><small>Request for Computer Repair (Hardware)</small></h1>
 </div>
 <form method="post">
     <div class="col-md-4">
         Name: <input type="text" name="name" value="<?php echo $name;?>"><br/>
         User Type:
         <input type="radio" name="User Type" <?php if (isset($user_type) && $user_type=="FS")
            echo "checked";?> value="FS"> Faculty/Staff
         <input type="radio" name="User Type" <?php if (isset($user_type) && $user_type=="Student")
            echo "checked";?> value="Student"> Student <br/></br/>
        <button type="submit" name="Submit" value="Submit">Submit</button>
    </div>
</form>
