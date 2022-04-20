<?php


$con=mysqli_connect("localhost","u376419006_motherlogistic","Mother@1234","u376419006_motherlogistic") or die(mysqli_error());
  //check whether submit button is pressed or not

if(isset($_POST['quotes']))
{

$name=$_POST['name'];
$title=$_POST['title'];
$des=$_POST['description'];
$phone=$_POST['phone'];
$email=$_POST['email'];
 	//$image = $_FILES['image']['name'];
  	
  	// Get text

  	// image file directory
	
	//$target = "img/".basename($image);
//move_uploaded_file($_FILES['image']['tmp_name'], $target);
  //query to insert the variable data into the database
$sql="INSERT INTO quotes (name,title,phone,email,description) VALUES ('".$name."','".$title."','".$phone."','".$email."','".$des."')";


 //Execute the query and returning a message
if(!$result = $con->query($sql)){

  
die('Error occured [' . $con->error . ']');
}

     
  	
  	else{
  		$message="<div style='float:right;width:500px' class='alert alert-success'>
   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Success!</strong>Quotes Request Sent Succesfully.
  </div><br><br>";
  	}
  }
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mother Logistics</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3" role="banner">
 <div style="right:20%" class="message"><?php if($message!="") { echo $message; } ?></div>

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <img src="images/logo.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li class="">
                  <a href="services.php">Services</a>
                <!--  <ul class="dropdown">
                      
               <?php
          
$con=mysqli_connect("localhost","u376419006_motherlogistic","Mother@1234","u376419006_motherlogistic");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM service");

echo "";
while($row = mysqli_fetch_array($result))
{

?>

  <li><a  href='services.php?id=<? echo $row['id']; ?>'><? echo $row['service']; ?></a></li>
            
<?

}
echo "";
mysqli_close($con);
?>                   </ul>-->
                </li>
                  <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

  

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            

            <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">Worldwide Freight Services</h1>
            <p><a href="#" class="btn btn-primary py-3 px-5 text-white">Get Started!</a></p>

          </div>
        </div>
      </div>
    </div>  

    <div class="container">
      <div class="row align-items-center no-gutters align-items-stretch overlap-section">
        <div class="col-md-4">
          <div class="feature-1 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-dollar"></span>
            </div>
            <h2 class="my-4 heading">Best Prices</h2>
          <p>We provide all the services at the best prices with all facilities required.</p>
          </div>
        </div>
        <div class="col-md-4">
             
          <div class="free-quote bg-dark h-100">
            <h2 class="my-4 heading  text-center">Get Free Quote</h2>
            <form action="index.php" method="post">
              
              <div class="form-group">
                <label for="fq_name">Name</label>
                <input type="text" class="form-control btn-block" id="name" name="name" placeholder="Enter Name">
              </div>
               <div hidden class="form-group">
             
                 <label for="fq_name">Mobile Number</label>
                <input type="tel" class="form-control btn-block" id="fq_name" name="phone" placeholder="Enter Mobile Number">
              </div>
               <label for="fq_email">Email</label>
                <input type="text" class="form-control btn-block" id="email" name="email" placeholder="Enter Email">
              
                <label hidden for="fq_email">Title</label>
                <input hidden type="text" class="form-control btn-block" id="fq_email" name="title" placeholder="Enter Title">
                 <label for="fq_email">Description</label>
                <textarea type="text" class="form-control btn-block" id="fq_email" name="description" placeholder="Enter Description"></textarea>
               <div class="form-group"><br>
                <input type="submit" name="quotes" class="btn btn-primary text-white py-2 px-4 btn-block" value="Get Quote">  
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-3 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-phone"></span>
            </div>
            <h2 class="my-4 heading">24/7 Support</h2>
          <p>We are always there for your support !<br>motherlogistics87@gmail.com<br>+91 9900737072</p>
        </div>
        </div>
      </div>
    </div>

<div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="mb-0 text-primary">What We Offer</h2>
            <p class="color-black-opacity-5"> </p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-travel"></span></div>
              <div>
                <h3>Man Power Supply</h3>
                <p>Mother logistics will provide the excellent manpower solutions based on the requirement of clients to various locations. We hire the best employees and provide for your needs. </p>
                <p class="mb-0"><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-sea-ship-with-containers"></span></div>
              <div>
                <h3>Logistics Goods Supply</h3>
                <p>Our exclusive team of different transportation vehicles will transport the goods and materials to client locations safely. This transportation will happen throughout India.</p>
                <p class="mb-0"><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-frontal-truck"></span></div>
              <div>
                <h3>Prime Car Services</h3>
                <p>We offer the car rental services for the industries like IT, BT, BPO, KPO to transport the employees  at affordable prices with luxurious facilities to the respective locations.</p>
                <p class="mb-0"><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  

    <div class="site-section block-13">
      <!-- <div class="container"></div> -->


      <div class="owl-carousel nonloop-block-13">
        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Storage</h3>
              <p class="px-5"></p>
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Air Transports</h3>
              <p class="px-5"></p>
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Cargo Transports</h3>
              <p class="px-5"></p>
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_4.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Cargo Ship</h3>
              <p class="px-5"></p>
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_5.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Ware Housing</h3>
              <p class="px-5"></p>
            </div>
          </a>
        </div>


      </div>
    </div>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Why Us?</h2>
            <p class="color-black-opacity-5">When you are looking for car rental/logistics service, we will be the best option for providing the service. We will provide all the services user friendly and on time delivery. Also we will become the one stop solution for all your logistics needs.Also we are the perfect management partner for all our esteemed clients in logistics services.

</p>
	</div>
	</div>


    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">More Services</h2>
            <p class="color-black-opacity-5">We Offer The Following Services</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-travel"></span></div>
              <div>
                <h3>Industrial Oil & Lubricants</h3>
                <p>We at mother logistics supply the industrial oils like castrol, hp oil etc for the clients based on the estimations given by them. We will maintain the best quality in the supply of products.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-sea-ship-with-containers"></span></div>
              <div>
                <h3>Industrial Safety Products</h3>
                <p>Mother logistics is one of the best industrial product providers in Bengaluru in this era. We are rising product providers in bengaluru. We deal with industrial products like shoes, jackets, afrons,etc.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-frontal-truck"></span></div>
              <div>
                <h3>Cutting tools & Interior Works</h3>
                <p>Mother logistics is the one of the leading providers in the bengaluru for cutting tools. We provide all types of machine tools based on the needs. All the machine tools will be of the top companies.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-barn"></span></div>
              <div>
                <h3>Signage Boards</h3>
                <p>A sign board is a piece of which has been painted with pictures or words and which gives some information about a particular place, product, or event. It's very important that every office.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-platform"></span></div>
              <div>
                <h3>Building construction & management </h3>
                <p>Mother logistics provides the best solution and construction ideas for building apartments , houses and complexes. We will take care of end to end building solutions with best market quality.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          

        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(images/hero_bg_2.jpg); background-attachment: fixed;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
            <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-single-big mb-4 d-inline-block popup-vimeo"><span class="icon-play"></span></a>
            <h2 class="text-white font-weight-light mb-5 h1">View Our Services By Watching This Short Video</h2>
            
          </div>
        </div>
      </div>
    </div>  
    
    <div class="site-section border-bottom">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Testimonials</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-3">
                <p>John Smith</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-3">
                <p>Christine Aguilar</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid mb-3">
                <p>Robert Spears</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-3">
                <p>Bruce Rogers</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Our Blog</h2>
            <p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
          </div>
        </div>
        <div class="row mb-3 align-items-stretch">
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/blog_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">Warehousing Your Packages</a></h2>
              <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/blog_2.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">Warehousing Your Packages</a></h2>
              <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="site-section border-top">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-5 text-black">Try Our Services</h2>
            <p class="mb-0"><a href="booking.html" class="btn btn-primary py-3 px-5 text-white">Get Started</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <footer style="margin-bottom:-100px" class="site-footer">
      <div style="margin-bottom:-50px" class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6">
                <img src="images/logo.png" alt="Image" class="img-fluid">
                <p>#2nd floor,
Sai Balaji Enclave
80 feet double road
Opp 36b Last Bus Stop
Girinagar,
Bengaluru- 560085</p><br>
<h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a><br>

              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="index.html">Testimonials</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Services</h2>
                <ul class="list-unstyled">
                  <li><a href="services.html">Industrial Oil & Lubricants</a></li>
                  <li><a href="services.html">Industrial Safety Tools</a></li>
                  <li><a href="services.html">Interior Works</a></li>
                  <li><a href="services.html">Cutting Tools</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Get Directions</h2>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.480692017763!2d77.53785371482165!3d12.941063590875904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDU2JzI3LjgiTiA3N8KwMzInMjQuMiJF!5e0!3m2!1sen!2sin!4v1635444413647!5m2!1sen!2sin" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed By DTech Bangalore</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>