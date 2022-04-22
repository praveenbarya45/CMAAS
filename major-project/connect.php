<?php
session_start();
  if($_SESSION["id"]!=NULL)
{
    ?>
    
    <!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>CMAA System | IIIT Bhopal</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      
      <style>
          * {
  padding: 0;
  margin: 0;
  position: relative;
  box-sizing: border-box;
}

 
     * {
  padding: 0;
  margin:0;
  --circle-white: rgb(224, 211, 211);
  --dark-brown: #271300;
  --medium-brown: #6f4827;
  --light-brown: #9c6f44;
  --light-blue: #cfe2e3;
  --font-color: #DDD;
  --quick: 'Quicksand', sans-serif;
  --pop: 'Poppins', sans-serif;
}

h {
    font-family: var(--quick);
    font-size: 1em;
    font-weight: 600;
    color: var(--font-color);
    text-transform: uppercase;
    letter-spacing: 4px;
   }
h1 {
  color: var(--font-color);
  font-size: 1em;
  font-family: var(--pop);
}
p {
  font-size: 0.8em;
  color: var(--font-color);
  font-family: var(--pop);
  text-align: left;
}
.card {
  height: 300px;
  width: 500px;
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: center;
  border-radius: 15px;
  background-image: linear-gradient( 135deg, #4bc714 30%, #f2f2f2 180%);
}
.product {
  display: flex;
  justify-content: center;
  text-align: center;
  flex-direction: column;
  height: 100%;
  width: 40%;
  border-right: 1px solid var(--font-color);
}
.info {
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
  padding: 25px;
  width: 60%;
  height: 90%;
}
.cup {
    margin: 25%;
    height: 70px;
    width: 90px;
    border: 2px solid var(--circle-white);
    -webkit-border-radius: 10px;
-webkit-border-bottom-right-radius: 500px;
-webkit-border-bottom-left-radius: 500px;
-moz-border-radius: 10px;
-moz-border-radius-bottomright: 500px;
-moz-border-radius-bottomleft: 500px;
border-radius: 10px;
border-bottom-right-radius: 500px;
border-bottom-left-radius: 500px;
background: linear-gradient(to bottom, var(--light-blue) , var(--light-brown), var(--medium-brown), var(--dark-brown));
     transition: all .4s ease;
   }
   .cup:hover {
    animation: posYChange 2s linear infinite;
   }
   @keyframes posYChange {
       0% {
           transform: none;
       }
       50% {
           transform: translateY(10%);
       }
   }
   .cup::after {
    content: "";
    display: block;
    margin-left: 85px;
    margin-top: 8px;
    height: 35px;
    width: 40px;
    border-top-left-radius: 110px;
    border-top-right-radius: 110px;
    border: 2px solid var(--circle-white);
    transform: rotate(90deg);
    border-bottom: 0;
   }
.price-box {
     width: 90px;
     height: 40px;
     text-align: center;
     border: 2px solid var(--circle-white);
     background: var(--circle-white);
     color: crimson;
     transition: all .4s ease;
     font-family: var(--pop);
     font-size: 0.9em;
     font-weight: 600; 
   }
   .price-box:hover {
     background: var(--circle-white);
     color: crimson;
   }
.price-container {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  height: 40px;
}
.price-list {
  display: flex;
}
.quantity {
  display: flex;
  flex-direction: column;
  background: var(--circle-white);
  color: crimson;
  height: 30px;
  width: 30px;
  padding: 7px;
  font-size: 1em;
  font-weight: bold;
  text-transform: capitalize;
  font: var(--pop);
}
#quant {
  font-weight: 600;
}
.less, .more {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  height: 40px;
  width: 30px;
  background: var(--circle-white);
  color: crimson;
  font-size: 1em;
  cursor: pointer;
}
.less i , .more i {
  padding: 5px;
  font-size: 1.2em;
  color: crimson;
} </style>
</head>
<!-- body -->
<?php
if(isset($_POST['send']))
{
    
     $to = 'praveenahirwar51@gmail.com'; 
 $to1 = $_POST['farmer_email'];
 $to2= $_POST['org_email'];
 
$from = 'praveenahirwar51@gmail.com'; 
$fromName = 'CMASS IIIT Bhopal'; 
 
$subject = "Request For Crop Deal"; 
 
$htmlContent = ' 
    <html> 
    <head> 
        <title>Crop Request Summary</title> 
    </head> 
    <body> 
   <center> <h2>Request Summary</h2></center>
     <h3>Farmer Deatils!</h3> 
        <table cellspacing="0" style="border: 2px dashed lightblue; width: 100%;"> 
          <tr> 
                <th>First Name:</th><td>'.$_POST['farmer_name'].'</td> 
            </tr> 
            <tr> 
                <th>Last Name:</th><td>'.$_POST['farmer_lname'].'</td> 
            </tr> 
             <tr> 
                <th>Mobile</th><td> '.$_POST['farmer_mobile'].'</td> 
            </tr> 
             <tr> 
                <th>Email:</th><td>'.$_POST['farmer_email'].'</td> 
            </tr> 
             <tr> 
                <th>Address</th><td> '.$_POST['farmer_address'].'</td> 
            </tr> 
             <tr> 
                <th>City:</th><td>'.$_POST['farmer_city'].'</td> 
            </tr> 
             <tr> 
                <th>District</th><td> '.$_POST['dist_name'].'</td> 
            </tr> 
            <tr> 
                <th>Aadhar</th><td> '.$_POST['farmer_aadhar'].'</td> 
            </tr> <tr> 
                <th>Pan Card</th><td> '.$_POST['farmer_pancard'].'</td> 
            </tr> 
            <tr> 
                <th>Nominee</th><td> '.$_POST['farmer_nominee'].'</td> 
            </tr> <tr> 
                <th>Nominee Relationship</th><td> '.$_POST['nominee_relationship'].'</td> 
            </tr>
            </tr> <tr> 
                <th>Payment Method</th><td> '.$_POST['payment_method'].'</td> 
            </tr>
            
        </table> 
        <h3>Crop Details!</h3> 
        <table cellspacing="0" style="border: 2px dashed lightblue; width: 100%;"> 
            <tr> 
                <th>Crop Name:</th><td>'.$_POST['crop_name'].'</td> 
            </tr> 
             <tr> 
                <th>Crop Amount</th><td>₹ '.$_POST['crop_amount'].'</td> 
            </tr> 
             <tr> 
                <th>Crop Area:</th><td>'.$_POST['crop_area'].' Qt</td> 
            </tr> 
             
        </table> 
         <h3>Organisation Deatils!</h3> 
        <table cellspacing="0" style="border: 2px dashed lightblue; width: 100%;"> 
          <tr> 
                <th>Name:</th><td>'.$_POST['org_name'].'</td> 
            </tr> 
             <tr> 
                <th>Mobile</th><td> '.$_POST['org_mobile'].'</td> 
            </tr> 
             <tr> 
                <th>Email:</th><td>'.$_POST['org_email'].'</td> 
            </tr> 
             <tr> 
                <th>Address</th><td> '.$_POST['org_address'].'</td> 
            </tr> 
             <tr> 
                <th>City:</th><td>'.$_POST['org_city'].'</td> 
            </tr> 
             <tr> 
                <th>District</th><td> '.$_POST['dist_name'].'</td> 
            </tr> 
            
        </table> 
       <center> <h5> Thank You </h5> </center>
       <center> <p> For More Information Please Visit <a href="https://myproject45.000webhostapp.com/major-project/">https://myproject45.000webhostapp.com/major-project/</a> </p> </center>
       
    </body> 
    </html>'; 
 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
$headers .= 'Cc: praveenahirwar51@gmail.com' . "\r\n"; 
$headers .= 'Bcc: praveenahirwar51@gmail.com' . "\r\n"; 
 
 
include "include/db.php";


$sql="INSERT INTO orders (crop_id,farmer_id,org_id,crop_amount,total_amount) VALUES ('".$_POST['crop_id']."','".$_POST['farmer_id']."','".$_POST['org_id']."','".$_POST['crop_area']."','".$_POST['crop_amount']."')";

if($result = $con->query($sql)&&mail($to, $subject, $htmlContent, $headers)&&mail($to1, $subject, $htmlContent, $headers)&&mail($to2, $subject, $htmlContent, $headers))
{ 
   	$message="<div style='float:center;width:500px' class='alert alert-success'>
   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Success!</strong> Request Sent Succesfully.
  </div>";
}else{ 
   	$message="<div style='float:center;width:500px' class='alert alert-danger'>
   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Success!</strong> Failed.
  </div>";
}
 }
  
  ?>
<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
 <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div style="width:100%" class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="images/logo.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                         <nav  class="navbar navbar-dark navbar-expand-sm float-right">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar-list-4">
   
<?php
  if($_SESSION["id"]!=NULL)
{
    ?>
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="https://myproject45.000webhostapp.com/major-project/images/user.png" width="40" height="40" class="rounded-circle">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="https://myproject45.000webhostapp.com/major-project/Dashboard1/index.php">Dashboard</a>
          <a class="dropdown-item" href="logout.php">Log Out</a>
        </div>
      </li>   
    </ul>
   <?php
}
else
{
?>

       <li><a style="color:#fff;background:#4bc714;boder-radius:1px solid #fff" href="login.php" class="btn"><i class="fa fa-sign-in" aria-hidden="true"></i>
&nbsp;Login</a></li>
<?php
}
?>

  </div>
</nav>
                        <div class="location_icon_bottum_tt">
                            <ul>
                                
                                 
                                 <li hidden ><a style="color:#fff"  href="signup.php" class="btn btn-primary"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Sign Up</a></li>
                                 
                            </ul>
                        </div>
                        
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-14 location_icon_bottum">
                       <div class="row">
                            <div class="col-md-14 ">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li class="active"> <a href="index.php">Home</a> </li>
                                                <li> <a href="#about">About</a> </li>
                                                <li><a href="products.php">Products</a></li>
                                                <li><a href="#testimonial">Testimonial</a></li>
                                                <li><a href="#contact">Contact Us</a></li>
                                                
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <form class="search">
                                    <input class="form-control" type="text" placeholder="Search">
                                    <button><img src="images/search_icon.png"></button>
                                </form>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
   

              <br><br><br>
                <div style="float;center;" class="row">
                    <div style="float;center" class="col-md-12">
                       <center> <div style="float;center" class="title">
                            <h2> <strong class="black"> Summary</strong></h2>
                        </div>
                        </center>
                     <center><div class="message"><?php if($message!="") { echo $message; } ?></div></center>
 </div>
                </div>
              
              <?php 
              include "include/db.php";
               $qry1 = mysqli_query($con,"SELECT * FROM farmers WHERE id='".$_SESSION['id']."'");

if($data1 = mysqli_fetch_assoc($qry1))
{
     $fid=$data1['id'];
    $fname=$data1['farmer_name'];
     $lname=$data1['farmer_lname'];
     $fmobile=$data1['farmer_mobile'];
     $faadhar=$data1['farmer_aadhar'];
     $fpan=$data1['farmer_pancard'];
      $fnom=$data1['farmer_nominee'];
     $fnomr=$data1['nominee_relationship'];
     $femail=$data1['farmer_email'];
      $fadd=$data1['farmer_address'];
       $fcity=$data1['farmer_city'];
       $facc=$data1['farmer_account'];
       $fpmt=$data1['farmer_payment_mode'];
    
    
    
    
}
              $qry = mysqli_query($con,"SELECT * FROM requirements JOIN crops ON crops.id=requirements.crop_id JOIN organisations ON organisations.id=requirements.org_id JOIN districts ON districts.id=organisations.dist_id");

if($data = mysqli_fetch_assoc($qry))
{
    
 
?>
<form action="connect.php" method="POST">
<center><div style="width:60%;height:500px" class="card col-md-12">
  <div class="product">
    <h2 style="color:#fff"><?php echo $data['crop_name']; ?> </h2>
    <div ><img style="padding:15px;border-radius:25px" src="https://myproject45.000webhostapp.com/major-project/images/<?php echo $data['img']; ?>">
  </div>
  <h3 style="color:#fff">₹&emsp; <?php echo $data['crop_amount']; ?></h3>
  Qty: &emsp;<?php echo $data['crop_area']; ?> Qt
  </div> 
  <div class="info">
      <h>Organisation Details</h>
        <div ><img style="padding:15px;border-radius:25px" src="https://myproject45.000webhostapp.com/major-project/images/<?php echo $data['org_image']; ?>">
  </div>
   <h2 style="color:#fff"><?php echo $data['org_name']; ?></h2>
   <h4 style="color:#fff"><i class="fa fa-phone"></i>&nbsp;<?php echo $data['org_mobile']; ?></h4>
   <h4 style="color:#fff"><i class="fa fa-envelope"></i>&nbsp;<?php echo $data['org_email']; ?></h4>
   <h4 style="color:#fff"><i class="fa fa-address-card"></i>&nbsp;<?php echo $data['org_address']; ?> , <?php echo $data['org_city']; ?> , <?php echo $data['dist_name']; ?></h4>
   
   
   <h style="font-size:14px">Crop Description<br> <textarea name="crop_descp" disabled style="color:#fff;border:1px solid #ff;border-radius:10px;background:transparent">
       <?php echo $data['description']; ?>
</textarea></h>

<input hidden type="text" name="crop_name" value="<?php echo $data['crop_name']; ?>">
<input hidden type="text" name="crop_amount" value="<?php echo $data['crop_amount']; ?>">
<input hidden type="text" name="crop_area" value="<?php echo $data['crop_area']; ?>">
<input hidden type="text" name="crop_id" value="<?php echo $data['crop_id']; ?>">

<input hidden type="text" name="org_id" value="<?php echo $data['org_id']; ?>">

<input hidden type="text" name="org_name" value="<?php echo $data['org_name']; ?>">
<input hidden type="text" name="org_mobile" value="<?php echo $data['org_mobile']; ?>">
<input hidden type="text" name="org_email" value="<?php echo $data['org_email']; ?>">
<input hidden type="text" name="org_address" value="<?php echo $data['org_address']; ?>">
<input hidden type="text" name="org_city" value="<?php echo $data['org_city']; ?>">
<input hidden type="text" name="dist_name" value="<?php echo $data['dist_name']; ?>">
<input hidden type="text" name="farmer_id" value="<?php echo $fid; ?>">

<input hidden type="text" name="farmer_name" value="<?php echo $fname; ?>">
<input hidden type="text" name="farmer_lname" value="<?php echo $lname; ?>">
<input hidden type="text" name="farmer_account" value="<?php echo $facc; ?>">
<input hidden  type="text" name="farmer_mobile" value="<?php echo $fmobile; ?>">
<input hidden type="text" name="farmer_aadhar" value="<?php echo $faadhar; ?>">
<input hidden type="text" name="farmer_pancard" value="<?php echo $fpan; ?>">
<input hidden type="text" name="farmer_nominee" value="<?php echo $fnom; ?>">
<input hidden type="text" name="nominee_relationship" value="<?php echo $fnomr; ?>">
<input hidden type="text" name="farmer_email" value="<?php echo $femail; ?>">
<input hidden type="text" name="farmer_address" value="<?php echo $fadd; ?>">
<input hidden type="text" name="farmer_city" value="<?php echo $fcity; ?>">
<input hidden type="text" name="payment_method" value="<?php echo $fpmt; ?>">






    <div class="price-container">
      <div class="price-list">
      
      
       </div>
  </div>
  <input type="submit" name="send" style="padding:5px;color:#fff;background:#4bc714;boder-radius:1px solid #fff;margin-top:20px" class="btn" value="Send Request">
  
</div> </center>
</form>
  <?php
}
?>
 
    </div>
  
    <!-- end product -->
    <!-- clients -->
    
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                 <!-- The slideshow -->
               
    </div>
  
     <!--  footer -->
     <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->
</body>

</html>
<?php 
}else
{
 header("Location:farmer_login1.php");   
}

?>