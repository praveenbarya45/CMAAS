<?php


if(!isset($_POST['service1']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$visitor_email = 'praveenahirwar51@gmail.com';
$message1 = $_POST['description'];
$sub='Mother Logistic';
$con=mysqli_connect("localhost","u376419006_motherlogistic","Mother@1234","u376419006_motherlogistic") or die(mysqli_error());
  //check whether submit button is pressed or not

$sql="INSERT INTO orders (name,service,phone,email,description) VALUES ('".$name."','".$service."','".$phone."','".$email."','".$message1."')";


 //Execute the query and returning a message
if(!$result = $con->query($sql)){

  
die('Error occured [' . $con->error . ']');
}

     
  	
  	else{
  	      	
$body = '--------------------------------------------';

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from =$_POST['email'];//<== update the email address
$email_subject = "Mother Logistic Request Sent";
$email_body = "\n----*  Request Details  *----\n \n".
"Name :  $name.\n".
     "Phone : $phone.\n".
     " Service : $service.\n".
      " Description : $message1.\n".
        "\n----*  Thank You  *---- \n".
$to ='motherlogistics87@gmail.com' ;//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email_from \r\n";

$to1 =$_POST['email'] ;
//Send the email!
mail($to,$email_subject,$email_body,$headers);
mail($to1,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
// Function to validate against any email injection attempts

  	 $message="<div style='float:right;width:500px' class='alert alert-success'>
   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Success!</strong> Request Sent Succesfully.
  </div><br><br>";
  
  header('Location: services.php');


  	}
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 
