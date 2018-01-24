<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$mysqli = mysqli_connect("localhost","root","","swma");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
