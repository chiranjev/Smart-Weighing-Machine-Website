<?php

   require_once('db.php');

   if (isset($_POST['RegisterFarmer']))
   {
      $ffname = $_POST['ffname'];
      $flname = $_POST['flname'];
      $faadhaar = $_POST['faadhaar'];
      $fpassword = $_POST['fpassword'];
      $fconfirmpassword = $_POST['fconfirmpassword'];
      $fmno = $_POST['fmno'];
      $faddr = $_POST['faddr'];
      if($fpassword!=$fconfirmpassword)
      {
         echo '<script>window.open("index.php?registerresult=Registration unsuccessful...Try Again","_self")</script>';
      }
      if(!empty($ffname)&&!empty($flname)&&!empty($faadhaar)&&!empty($fpassword)&&!empty($fmno)&&!empty($faddr))
      {
         $Query="INSERT INTO farmer(firstname,lastname,aadhaar,password,mobilenumber,address)
         VALUES('$ffname','$flname','$faadhaar','".md5($fpassword)."','$fmno','$faddr')";
         // $Query="SELECT * FROM emp_record";
         $Execute=$mysqli->query($Query);
         if($Execute)
         {
    	      echo '<div id="center"><span class="success">Thanks for registering with us...You may log in now.</span> </div>';
         }
         else
         {
            echo "Registration Failed....You may be already registered with us";
         }
      }
      else
      {
         echo '<span class="FieldInfoHeading">Registration unsuccessful...Try again</span>';
      }

   }

 ?>
