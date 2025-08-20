<?php
error_reporting(0);
$name=$_POST['name'];
$password=$_POST['pword'];
echo "<h1>".$name.$password."</h1>";
if($name=="admin" && $password=="election")
header('Location:http://localhost/voting/adminpage.php');
else {
  header('Location:http://localhost/voting/index.php?error=1');
}
?>
