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
                         <th style="color:#666666" class="column-title"> Service </th>
                        
                                  
                            <th style="color:#666666" class="column-title">Image</th>
							                 <th style="color:#666666" class="column-title"><span class="nobr">Action</span>
                            </th>
                            
                          </tr>
                        </thead>
    
<?php
//fetch.php
$connect = mysqli_connect("localhost","u376419006_motherlogistic","Mother@1234","u376419006_motherlogistic");

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "SELECT * FROM service WHERE service.service LIKE '%".$search."%'  ";
}
else
{
 $query = "SELECT * FROM service ORDER by id ";
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
     <td><p style="color:#666666"><?php echo $row["service"];?> </p></td>
   
      <td  style="width:300px;height:100px;"><img src="img/<?php echo $row["simage"];?> " style="width:150px;height:80px;"></td>
	
   <td>  
    <a href="edit_service.php?id=<?php echo $row["id"];?> "  style="height:30px;  font-size:12px" class="btn btn-success btn-sm edit btn-flat"><i class="fa fa-edit"></i> Edit</a>
 
   <a href="delete_service.php?id=<?php echo $row["id"];?> " style="height:30px;  font-size:12px" class="btn btn-danger btn-sm delete btn-flat"><i class="fa fa-trash"></i> Delete</a></td>
 
  
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

