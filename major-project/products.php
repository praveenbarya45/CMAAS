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

.listing-section, .cart-section {
  width: 100%;
  float: left;
  padding: 1%;
  border-bottom: 0.01em solid #dddbdb;
}

.product {
  float: left;
  width: 23%;
  border-radius: 2%;
  margin: 1%;
}

.product:hover {
  box-shadow: 1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);
  -webkit-box-shadow: 1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);  
  -moz-box-shadow:    1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);
}

.image-box {
  width: 100%;
  overflow: hidden;
  border-radius: 2% 2% 0 0;
}

.images {
  height: 15em;
  background-size: cover; 
  background-position: center center; 
  background-repeat: no-repeat;
  border-radius: 2% 2% 0 0;
  transition: all 1s ease;
  -moz-transition: all 1s ease;
  -ms-transition: all 1s ease;
  -webkit-transition: all 1s ease;
  -o-transition: all 1s ease;
}

.images:hover {
  transform: scale(1.2);
  overflow: hidden;
  border-radius: 2%;
}

/* IMAGES */
#image-1 {background-image: url("https://sc01.alicdn.com/kf/UT8.CaXX2NXXXagOFbXC/fresh-navel-oranges.jpg");}

#image-2 {background-image: url("https://newenglandapples.files.wordpress.com/2014/10/img_5595.jpg")}

#image-3 {background-image: url("https://sc01.alicdn.com/kf/UT8ovSIXQNaXXagOFbXt/Fresh-Passion-Fruit-with-Best-Price-and.jpg")}

#image-4 {background-image: url("http://www.foodmatters.com/media/images/articles/16-powerful-reasons-to-eat-pineapple.jpg")}

#image-5 {background-image: url("http://membrillo.com.au/wp-content/uploads/2016/11/bg-mango-01.jpg")}

#image-6 {background-image: url("http://ell.h-cdn.co/assets/16/27/980x490/landscape-1467750721-gettyimages-146896572.jpg")}

#image-7 {background-image: url("http://www.hesca.org/wp-content/uploads/2016/08/banana.jpg")}

#image-8 {background-image: url("http://www.baag.com.au/pictures/produce/plums2.jpg")}

#image-9 {background-image: url("https://ecowatchroar-img.rbl.ms/simage/https%3A%2F%2Fassets.rbl.ms%2F9458277%2F1200x600.jpg/2000%2C2000/J9vl96eLQCOEy3Xy/img.jpg")}

#image-10 {background-image: url("https://www.parhlo.com/wp-content/uploads/2016/04/Valencia_market_-_lemons-1940x1454.jpg")}

.text-box {
  width: 100%;
  float: left;
  border: 0.01em solid #dddbdb;
  border-radius: 0 0 2% 2%;
  padding: 1em;
}

h2, h3 {
  float: left;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 1em;
  text-transform: uppercase;
  margin: 0.2em auto;
}

.item, .price {
  clear: left;
  width: 100%;
  text-align: center;
}

.price {
  color: Grey;
}

.description, label, button, input {
  float: left;
  clear: left;
  width: 100%;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  font-size: 1em;
  text-align: center;
  margin: 0.2em auto;
}

input:focus {
  outline-color: #fdf;
}

label {
  width: 60%;
}

.text-box input {
  width: 15%;
  clear: none;
}

.text-box button {
  margin-top: 1em;
}

button {
  padding: 2%;
  background-color: #4bc714;
  border: none;
  border-radius: 2%;
  color:#fff;
}

button:hover {
  bottom: 0.1em;
}

button:focus {
  outline: 0;
}

button:active {
  bottom: 0;
  background-color: #4bc714;
}


}  
      </style>
</head>
<!-- body -->

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
          <img src="https://myproject45.000webhostapp.com/major-project/images/logo.png" width="40" height="40" class="rounded-circle">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="org_dash.php">Dashboard</a>
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
                    <div class="col-md-14 location_icon_bottum" style="width:100%">
                       <div class="row">
                            <div class="col-md-14 ">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li class="active"> <a href="index.php">Home</a> </li>
                                                <li> <a href="#about">About</a> </li>
                                                <li><a href="products.php">Products</a></li>
                                                <li><a href="#testimonial">Our Team</a></li>
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
                <div style="float;center;left:37%" class="row">
                    <div style="float;center" class="col-md-12">
                       <center> <div style="float;center" class="title">
                            <h2>Organisation <strong class="black"> Requirements</strong></h2>
                        </div></center>
                    </div>
                </div>
          <div class="listing-section">
              
              <?php 
              include "include/db.php";
              
              $qry = mysqli_query($con,"SELECT * FROM requirements JOIN crops ON crops.id=requirements.crop_id JOIN organisations ON organisations.id=requirements.org_id");

while($data = mysqli_fetch_assoc($qry))
{
    
 
?>
  <div class="product">
      
       <h2 class="item"><?php echo $data['org_name']; ?></h2>
    
    <div class="image-box">
      <div class="images" style=""><img src="https://myproject45.000webhostapp.com/major-project/images/<?php echo $data['img']; ?>"></div>
    </div>
    <div class="text-box">
      <h2 class="item"><?php echo $data['crop_name']; ?></h2>
      <h3 class="price">₹ <?php echo $data['crop_amount']; ?></h3>
      <p class="description"><?php echo $data['description']; ?></p>
      <label for="item-1-quantity">Crop Quantity:</label>
      <input style="width:100px" disabled  type="text" name="item-1-quantity" id="item-1-quantity" value="<?php echo $data['crop_area']; ?> Qt"> 
      <button type="submit" onclick="location.href='connect.php?id=<?php echo $data['id']; ?>'">Contact</button>
    </div>
  </div>
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