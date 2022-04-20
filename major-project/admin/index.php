<?php
  //check whether submit button is pressed or not
session_start();
include "../include/db.php";

$message="";
if(count($_POST)>0) {
    session_start();
    include "../include/db.php";
 $dist=$_POST["district"];
 $user=$_POST["username"];
 $pass=md5($_POST["password"]);
 $result = mysqli_query($con,"SELECT * FROM incharges WHERE dist_id='" .$dist. "' and incharge_email='" .$user. "' and incharge_password = '".$pass."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['incharge_name'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:../Dashboard/admin_dash.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CMAS Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../Dashboard/vendors/feather/feather.css">
  <link rel="stylesheet" href="../Dashboard/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../Dashboard/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../Dashboard/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../Dashboard/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../Dashboard/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../Dashboard/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../Dashboard/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-4 px-4 px-sm-5" style="background: #1a64db; border-radius:4px">
              <div class="brand-logo" >
                <center><img src="../images/logo.png" alt="logo" style="width:50%;"></center>
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">LogIn to continue</h6>
              <form class="pt-3" action="index.php" method="POST">
                <div class="form-group">
                    <select style="color:#fff;" class="form-control form-control-lg" required="required" name="district" id="district">
                        <option style="color:#000;" class="form-control form-control-lg" value="">Choose Location:</option>     
                        <?php
                          include '../db.php';
                          $sql="select dist_name,id from districts";
                          $r= mysqli_query($con, $sql);
                          while($data=mysqli_fetch_array($r)){
                              ?>
                        <option style="color:#000;" class="form-control form-control-lg" value="<?php echo $data['id']; ?>"><?php echo $data['dist_name']; ?></option>
                          <?php
                          }
                          ?>
                    </select>
                </div>
                <div class="form-group">
                  <input type="text" name="username" style="color:#fff;" required="required" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password"  name="password" required="required" style="color:#fff;" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3" >
                <center> <button type="submit" name="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" style="background: #07cc00; border:none;">SIGN IN</button></center> 
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../Dashboard/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../Dashboard/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../Dashboard/js/off-canvas.js"></script>
  <script src="../Dashboard/js/hoverable-collapse.js"></script>
  <script src="../Dashboard/js/template.js"></script>
  <script src="../Dashboard/js/settings.js"></script>
  <script src="../Dashboard/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
