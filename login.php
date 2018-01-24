<?php

   require_once('db.php');
   if(isset($_POST['signin']))
   {
      $username=$_POST['username'];
      $password=$_POST['password'];

      if(!empty($username)&&!empty($password))
      {
         $Query="INSERT INTO farmer(firstname,lastname,aadhaar,password,mobilenumber,address)
         VALUES('$ffname','$flname','$faadhaar','$fpassword','$fmno','$faddr')";
         // $Query="SELECT * FROM emp_record";
         $Execute=$mysqli->query($Query);
         if($Execute)
         {
    	      echo '<div id="center"><span class="success">You are logged in now...Welcome</span> </div>';
         }
         else
         {
            echo "Wrong username or password";
         }
      }
      else
      {
         echo '<span class="FieldInfoHeading">Login unsuccessful...Try again</span>';
      }
   }


 ?>
