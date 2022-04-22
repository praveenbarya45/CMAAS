<?php

session_start();

 include 'db.php';

 $ab = $_SESSION['dist_id'];
  
if(isset($_POST["send"]))
{
 $crop= $_POST["crop"];
 $amt= $_POST["amount"];
 $price= $_POST["price"];
 $id= $_GET['id'];
    
   $sql=" INSERT INTO assignments (farmer_id, dist_id, crop_id, alloted_area, total_amount) VALUES ('".$id."', '".$ab."', '".$crop."', '".$amt."', '".$price."') ";
   
   $query= mysqli_query($con, $sql);
   
}

   if($query){
  header("Location: farmers.php"); 
   }

?>