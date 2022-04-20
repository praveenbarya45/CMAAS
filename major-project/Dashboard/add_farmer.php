<?php
  //check whether submit button is pressed or not

include "include/db.php";

if(isset($_POST['save']))
{


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$aadhar_card=$_POST['aadhar_card'];
$pan_card=$_POST['pan_card'];
$acc_no=$_POST['acc_no'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$area=$_POST['area'];
$nominee_name=$_POST['nominee_name'];
$nominee_relation=$_POST['nominee_relation'];
$pass=$_POST['password'];
$pass=md5($pass);
$image = $_FILES['image']['name'];
$add=$_POST['farmer_address'];
$city=$_POST['farmer_city'];
$dist=$_POST['dist_id'];
$pm=$_POST['payment_mode'];
$c=1;



  	// Get text

  	// image file directory
	
	$target = "../img/".basename($image);
move_uploaded_file($_FILES['image']['tmp_name'], $target);
  //query to insert the variable data into the database
$sql="INSERT INTO farmers (farmer_name,farmer_lname,farmer_area,farmer_account,farmer_mobile,password,farmer_image,farmer_aadhar,farmer_pancard,farmer_card,farmer_nominee,nominee_relationship,farmer_email,dist_id,farmer_payment_mode,farmer_address,farmer_city) VALUES ('".$fname."','".$lname."','".$area."','".$acc_no."','".$mobile."','".$pass."','".$image."','".$aadhar_card."','".$pan_card."','".$c."','".$nominee_name."','".$nominee_relation."','".$email."','".$dist."','".$pm."','".$add."','".$city."')";

 //Execute the query and returning a message
 
 if(!$result = $con->query($sql))
{
  die('Error occured [' . $con->error . ']');
}

else{
  		$message="<div style='float:right;width:500px' class='alert alert-success'>
   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Success!</strong> Sign Up Succesfully.
  </div>";
  	}
  }
  
?>