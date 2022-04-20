<?
?>
<style>
.a3
	{
	color:#333;	
	}
	</style>


   <div class="table-responsive ps">
 <br>
<div style="overflow-x:auto;">
<table  id="table" style="overflow-x:auto;" class="table">
                        <thead>
                          <tr class="headings">
                           
                             
                               <th style="color:#666666" class="column-title"> ID </th>
                                  <th style="color:#666666" class="column-title">Name</th>
						
                         <th style="color:#666666" class="column-title"> Title </th>
                        
							                <th style="color:#666666" class="column-title">Feedback</th>
							                <th style="color:#666666" class="column-title">Phone</th>
							
							<th style="color:#666666" class="column-title">Email</th>
							
							
                          </tr>
                        </thead>
    
<?php
//fetch.php
$connect = mysqli_connect("localhost","u376419006_motherlogistic","Mother@1234","u376419006_motherlogistic");

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "SELECT * FROM feedback WHERE feedback.name LIKE '%".$search."%'  ";
}
else
{
 $query = "SELECT * FROM feedback ORDER by id ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $cnt=1;
 while($row = mysqli_fetch_array($result))
 {
	 
	 ?>
   <tr class="a3"  style="color:#333">
    <td><p style="color:#666666"><?php echo $cnt;?> </p></td>
     <td><p style="color:#666666"><?php echo $row["name"];?> </p></td>
    <td><p style="color:#666666"><?php echo $row["title"];?> </p></td>
    <td><p style="color:#666666"><?php echo $row["feedback"];?> </p></td>
   
      <td><p style="color:#666666"><?php echo $row["phone"];?> </p></td>
   
	 <td><p style="color:#666666"><?php echo $row["email"];?> </p></td>
   
  
  
      </tr>
 <?
 $cnt++;
 }
	
}
else
{
 echo 'Data Not Found';
}

?>

