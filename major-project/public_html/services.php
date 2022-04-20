

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mother Logistics &mdash; </title>
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

    <div style="right:20%" class="message"><?php if($message!="") { echo $message; } ?></div>


    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Our Services</h1>
            <p class="breadcrumb-custom"><a href="index.php">Home</a> <span class="mx-2">&gt;</span> <span>Services</span></p>
          </div>
        </div>
      </div>
    </div>  

    

    <div class="site-section bg-light">
      <div class="container">
         <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-travel"></span></div>
              <div>
                <h3><a href="vehicle.php?id=1">Man Power Supply</a></h3>
                <p>Mother logistics will provide the excellent manpower solutions based on the requirement of clients to various locations. We hire the best employees and provide for your needs. </p>
                <button style="border-radius:50px;font-size:14px;background: #f89d13!important;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Request</button>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
           <div class="col-md-12">
             
          <div class="free-quote bg-dark h-100">
            <h2 class="my-4 heading  text-center">Request For Service</h2>
            <form action="services1.php" method="post">
               <label  for="fq_email">Serivce</label>
                <input type="text" class="form-control btn-block" id="fq_email" name="service" value="Man Power Supply">
              
              <div class="form-group">
                <label for="fq_name">Name</label>
                <input type="text" class="form-control btn-block" id="name" name="name" placeholder="Enter Name">
              </div>
               <div class="form-group">
             
                 <label for="fq_name">Mobile Number</label>
                <input type="tel" class="form-control btn-block" id="fq_name" name="phone" placeholder="Enter Mobile Number">
              </div>
               <label for="fq_email">Email</label>
                <input type="text" class="form-control btn-block" id="email" name="email" placeholder="Enter Email">
              
                  <label for="fq_email">Description</label>
                <textarea type="text" class="form-control btn-block" id="fq_email" name="description" placeholder="Enter Description"></textarea>
               <div class="form-group"><br>
                <input type="submit" name="service1" class="btn btn-primary text-white py-2 px-4 btn-block" value="Submit Request">  
              </div>
            </form>
          </div>
        </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>  </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-sea-ship-with-containers"></span></div>
              <div>
                <h3><a href="vehicle.php?id=2">Logistics Goods Supply</a></h3>
                <p>Our exclusive team of different transportation vehicles will transport the goods and materials to client locations safely. This transportation will happen throughout India.</p>
                             <button style="border-radius:50px;font-size:14px;background: #f89d13!important;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Request</button>
 <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
           <div class="col-md-12">
             
          <div class="free-quote bg-dark h-100">
            <h2 class="my-4 heading  text-center">Request For Service</h2>
            <form action="services1.php" method="post">
               <label  for="fq_email">Serivce</label>
                <input type="text" class="form-control btn-block" id="fq_email" name="service" value="Logistics Goods Supply">
              
              <div class="form-group">
                <label for="fq_name">Name</label>
                <input type="text" class="form-control btn-block" id="name" name="name" placeholder="Enter Name">
              </div>
               <div class="form-group">
             
                 <label for="fq_name">Mobile Number</label>
                <input type="tel" class="form-control btn-block" id="fq_name" name="phone" placeholder="Enter Mobile Number">
              </div>
               <label for="fq_email">Email</label>
                <input type="text" class="form-control btn-block" id="email" name="email" placeholder="Enter Email">
              
                  <label for="fq_email">Description</label>
                <textarea type="text" class="form-control btn-block" id="fq_email" name="description" placeholder="Enter Description"></textarea>
               <div class="form-group"><br>
                <input type="submit" name="service1" class="btn btn-primary text-white py-2 px-4 btn-block" value="Submit Request">  
              </div>
            </form>
          </div>
        </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
       </div>
          </div>
       </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-frontal-truck"></span></div>
              <div>
                <h3><a href="vehicle.php?id=3">Prime Car Services</a></h3>
                <p>We offer the car rental services for the industries like IT, BT, BPO, KPO to transport the employees  at affordable prices with luxurious facilities to the respective locations.</p>
                    <button style="border-radius:50px;font-size:14px;background: #f89d13!important;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Request</button>
 <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
           <div class="col-md-12">
             
          <div class="free-quote bg-dark h-100">
            <h2 class="my-4 heading  text-center">Request For Service</h2>
            <form action="services1.php" method="post">
               <label  for="fq_email">Serivce</label>
                <input type="text" class="form-control btn-block" id="fq_email" name="service" value="Prime Car Services">
              
              <div class="form-group">
                <label for="fq_name">Name</label>
                <input type="text" class="form-control btn-block" id="name" name="name" placeholder="Enter Name">
              </div>
               <div class="form-group">
             
                 <label for="fq_name">Mobile Number</label>
                <input type="tel" class="form-control btn-block" id="fq_name" name="phone" placeholder="Enter Mobile Number">
              </div>
               <label for="fq_email">Email</label>
                <input type="text" class="form-control btn-block" id="email" name="email" placeholder="Enter Email">
              
                  <label for="fq_email">Description</label>
                <textarea type="text" class="form-control btn-block" id="fq_email" name="description" placeholder="Enter Description"></textarea>
               <div class="form-group"><br>
                <input type="submit" name="service1" class="btn btn-primary text-white py-2 px-4 btn-block" value="Submit Request">  
              </div>
            </form>
          </div>
        </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
       </div>
         
       </div>   </div>
            </div>
          </div>
<div><br></div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex"><br>
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-travel"></span></div>
              <div>
                <h3><br><a href="vehicle.php?id=4">Industrial Oil & Lubricants</a></h3>
                <p>We at mother logistics supply the industrial oils like castrol, hp oil etc for the clients based on the estimations given by them. We will maintain the best quality in the supply of products.</p>
               
                     <button style="border-radius:50px;font-size:14px;background: #f89d13!important;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Request</button>
 <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
           <div class="col-md-12">
             
          <div class="free-quote bg-dark h-100">
            <h2 class="my-4 heading  text-center">Request For Service</h2>
            <form action="services1.php" method="post">
               <label  for="fq_email">Serivce</label>
                <input type="text" class="form-control btn-block" id="fq_email" name="service" value="Industrial Oil & Lubricants">
              
              <div class="form-group">
                <label for="fq_name">Name</label>
                <input type="text" class="form-control btn-block" id="name" name="name" placeholder="Enter Name">
              </div>
               <div class="form-group">
             
                 <label for="fq_name">Mobile Number</label>
                <input type="tel" class="form-control btn-block" id="fq_name" name="phone" placeholder="Enter Mobile Number">
              </div>
               <label for="fq_email">Email</label>
                <input type="text" class="form-control btn-block" id="email" name="email" placeholder="Enter Email">
              
                  <label for="fq_email">Description</label>
                <textarea type="text" class="form-control btn-block" id="fq_email" name="description" placeholder="Enter Description"></textarea>
               <div class="form-group"><br>
                <input type="submit" name="service1" class="btn btn-primary text-white py-2 px-4 btn-block" value="Submit Request">  
              </div>
            </form>
          </div>
        </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
        </div>
      
       </div>
         
               
               
                  </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex"><br>
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-sea-ship-with-containers"></span></div>
              <div>
                <h3><br><a href="vehicle.php?id=5">Industrial Safety Products</a></h3>
                <p>Mother logistics is one of the best industrial product providers in Bengaluru in this era. We are rising product providers in bengaluru. We deal with industrial products like shoes, jackets, afrons,etc.</p>
                <button style="border-radius:50px;font-size:14px;background: #f89d13!important;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Request</button>
 <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
           <div class="col-md-12">
             
          <div class="free-quote bg-dark h-100">
            <h2 class="my-4 heading  text-center">Request For Service</h2>
            <form action="services1.php" method="post">
               <label  for="fq_email">Serivce</label>
                <input type="text" class="form-control btn-block" id="fq_email" name="service" value="Industrial Safety Products">
              
              <div class="form-group">
                <label for="fq_name">Name</label>
                <input type="text" class="form-control btn-block" id="name" name="name" placeholder="Enter Name">
              </div>
               <div class="form-group">
             
                 <label for="fq_name">Mobile Number</label>
                <input type="tel" class="form-control btn-block" id="fq_name" name="phone" placeholder="Enter Mobile Number">
              </div>
               <label for="fq_email">Email</label>
                <input type="text" class="form-control btn-block" id="email" name="email" placeholder="Enter Email">
              
                  <label for="fq_email">Description</label>
                <textarea type="text" class="form-control btn-block" id="fq_email" name="description" placeholder="Enter Description"></textarea>
               <div class="form-group"><br>
                <input type="submit" name="service1" class="btn btn-primary text-white py-2 px-4 btn-block" value="Submit Request">  
              </div>
            </form>
          </div>
        </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
        </div>
      
       </div>
           </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex"><br>
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-frontal-truck"></span></div>
              <div>
                <h3><br><a href="vehicle.php?id=6">Cutting tools & Interior Works</a></h3>
                <p>Mother logistics is the one of the leading providers in the bengaluru for cutting tools. We provide all types of machine tools based on the needs. All the machine tools will be of the top companies.</p>
                    <button style="border-radius:50px;font-size:14px;background: #f89d13!important;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5">Request</button>
 <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
           <div class="col-md-12">
             
          <div class="free-quote bg-dark h-100">
            <h2 class="my-4 heading  text-center">Request For Service</h2>
            <form action="services1.php" method="post">
               <label  for="fq_email">Serivce</label>
                <input type="text" class="form-control btn-block" id="fq_email" name="service" value="Cutting tools & Interior Works">
              
              <div class="form-group">
                <label for="fq_name">Name</label>
                <input type="text" class="form-control btn-block" id="name" name="name" placeholder="Enter Name">
              </div>
               <div class="form-group">
             
                 <label for="fq_name">Mobile Number</label>
                <input type="tel" class="form-control btn-block" id="fq_name" name="phone" placeholder="Enter Mobile Number">
              </div>
               <label for="fq_email">Email</label>
                <input type="text" class="form-control btn-block" id="email" name="email" placeholder="Enter Email">
              
                  <label for="fq_email">Description</label>
                <textarea type="text" class="form-control btn-block" id="fq_email" name="description" placeholder="Enter Description"></textarea>
               <div class="form-group"><br>
                <input type="submit" name="service1" class="btn btn-primary text-white py-2 px-4 btn-block" value="Submit Request">  
              </div>
            </form>
          </div>
        </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
        </div>
      
       </div>
         
         
           </div>
            </div>
          </div>
<div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex"><br>
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-barn"></span></div>
              <div>
                <h3><br><a href="vehicle.php?id=7">Signage Boards</a></h3>
                <p>A sign board is a piece of which has been painted with pictures or words and which gives some information about a particular place, product, or event. It's very important that every office.</p>
                <button style="border-radius:50px;font-size:14px;background: #f89d13!important;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal6">Request</button>
 <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
           <div class="col-md-12">
             
          <div class="free-quote bg-dark h-100">
            <h2 class="my-4 heading  text-center">Request For Service</h2>
            <form action="services1.php" method="post">
               <label  for="fq_email">Serivce</label>
                <input type="text" class="form-control btn-block" id="fq_email" name="service" value="Signage Boards">
              
              <div class="form-group">
                <label for="fq_name">Name</label>
                <input type="text" class="form-control btn-block" id="name" name="name" placeholder="Enter Name">
              </div>
               <div class="form-group">
             
                 <label for="fq_name">Mobile Number</label>
                <input type="tel" class="form-control btn-block" id="fq_name" name="phone" placeholder="Enter Mobile Number">
              </div>
               <label for="fq_email">Email</label>
                <input type="text" class="form-control btn-block" id="email" name="email" placeholder="Enter Email">
              
                  <label for="fq_email">Description</label>
                <textarea type="text" class="form-control btn-block" id="fq_email" name="description" placeholder="Enter Description"></textarea>
               <div class="form-group"><br>
                <input type="submit" name="service1" class="btn btn-primary text-white py-2 px-4 btn-block" value="Submit Request">  
              </div>
            </form>
          </div>
        </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
        </div>
      
       </div>
            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex"><br>
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-platform"></span></div>
              <div>
                <h3><br><a href="vehicle.php?id=8">Building construction & management </a></h3>
                <p>Mother logistics provides the best solution and construction ideas for building apartments , houses and complexes. We will take care of end to end building solutions with best market quality.</p>
                 <button style="border-radius:50px;font-size:14px;background: #f89d13!important;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal7">Request</button>
 <div class="modal fade" id="myModal7" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
           <div class="col-md-12">
             
          <div class="free-quote bg-dark h-100">
            <h2 class="my-4 heading  text-center">Request For Service</h2>
            <form action="services1.php" method="post">
               <label  for="fq_email">Serivce</label>
                <input type="text" class="form-control btn-block" id="fq_email" name="service" value="Building construction & management">
              
              <div class="form-group">
                <label for="fq_name">Name</label>
                <input type="text" class="form-control btn-block" id="name" name="name" placeholder="Enter Name">
              </div>
               <div class="form-group">
             
                 <label for="fq_name">Mobile Number</label>
                <input type="tel" class="form-control btn-block" id="fq_name" name="phone" placeholder="Enter Mobile Number">
              </div>
               <label for="fq_email">Email</label>
                <input type="text" class="form-control btn-block" id="email" name="email" placeholder="Enter Email">
              
                  <label for="fq_email">Description</label>
                <textarea type="text" class="form-control btn-block" id="fq_email" name="description" placeholder="Enter Description"></textarea>
               <div class="form-group"><br>
                <input type="submit" name="service1" class="btn btn-primary text-white py-2 px-4 btn-block" value="Submit Request">  
              </div>
            </form>
          </div>
        </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
        </div>
      
       </div>  </div>
            </div>
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
  
      
    <footer class="site-footer">
      <div class="container">
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