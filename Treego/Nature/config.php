<?php
 
// $domain_name=" ";
$host = "localhost";
 /* Host name */
$user = "root";
 /* User */
$password = "";
 /* Password */
$dbname = "trees_db";
 /* Database name */
if(!isset($conn))
{ $conn = mysqli_connect($host, $user, $password, $dbname);
  
}
// Check connection
if (!$conn)
{
   die("Connection failed: " . mysqli_connect_error());

   
}

 


?>


