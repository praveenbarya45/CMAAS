<?php

session_start();
if(isset($_POST['login'])){
 if(empty($_POST['uname']) || empty($_POST['password'])){
 $error = "Username or Password is Invalid";
 }
 else
 {


$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('localhost','u376419006_motherlogistic','Mother@1234','u376419006_motherlogistic') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM admin_login WHERE username='" . $_POST["uname"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["uname"] = $row['username'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:dashboard.php");
}
}

 
 mysqli_close($con); // Closing connection
 }

?>
