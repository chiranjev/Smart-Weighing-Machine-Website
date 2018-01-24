<?php

   require_once('db.php');

   if (isset($_POST['RegisterBuyer']))
   {
      $bfname = $_POST['bfname'];
      $blname = $_POST['blname'];
      $baadhaar = $_POST['baadhaar'];
      $bpassword = $_POST['bpassword'];
      $bconfirmpassword = $_POST['bconfirmpassword'];
      $bmno = $_POST['bmno'];
      $baddr = $_POST['baddr'];
      if($bpassword!=$bconfirmpassword)
      {
         echo '<script>window.open("index.php?registerresult=Registration unsuccessful...Try Again","_self")</script>';
      }
      if(!empty($bfname)&&!empty($blname)&&!empty($baadhaar)&&!empty($bpassword)&&!empty($bmno)&&!empty($baddr))
      {
         $Query="INSERT INTO buyer(firstname,lastname,aadhaar,password,mobilenumber,address)
         VALUES('$bfname','$blname','$baadhaar','".md5($bpassword)."','$bmno','$baddr')";
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
