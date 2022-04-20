<div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                       
                                        <th>#ID</th>
                                         <th>District Name</th>
                                        <th>Farmer Name</th>
                                        <th>Crop Name</th>
                                        <th>Alloted Crop</th>
                                        <th>Recieved Crop</th>
                                        <th>Total Amount</th>
                                        <th>Payment Mode</th>
                                        <th>Payment Status</th>
                                        <!--th>Action</th-->
                                      </tr>
                                    </thead>
                                    <tbody>
                                        
                                           <?php
//fetch.php
											include "db.php";
$connect = $con;
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "SELECT assignments.id,farmers.farmer_name,farmers.farmer_payment_mode,districts.dist_name,crops.crop_name,assignments.alloted_area,assignments.completed_area,assignments.total_amount,assignments.payment_status FROM assignments JOIN farmers ON farmers.id=assignments.farmer_id JOIN districts ON districts.id=assignments.dist_id JOIN crops ON crops.id=assignments.crop_id WHERE assignments.payment_status!='Completed' AND crops.crop_name LIKE '%".$search."%'  ";
}
else
{
 $query = "SELECT assignments.id,farmers.farmer_name,farmers.farmer_payment_mode,districts.dist_name,crops.crop_name,assignments.alloted_area,assignments.completed_area,assignments.total_amount,assignments.payment_status FROM assignments JOIN farmers ON farmers.id=assignments.farmer_id JOIN districts ON districts.id=assignments.dist_id JOIN crops ON crops.id=assignments.crop_id WHERE assignments.payment_status!='Completed' ORDER by assignments.id ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $cnt=1;
 while($row = mysqli_fetch_array($result))
 {
	 
	 ?>
	 
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                           <?php echo $cnt;?>.   </div>
                                        </td>
                                         <td>
                                            <h6><?php echo $row["dist_name"];?></h6>
                                             
                                        </td>
                                        <td>
                                            <h6><?php echo $row["farmer_name"];?></h6>
                                             
                                        </td>
                                        <td>
                                          <h6><?php echo $row["crop_name"];?></h6>
                                            </td>
                                        <td>
                                          <h6>&emsp;<?php echo $row["alloted_area"];?> &nbsp;ton</h6>
                                         
                                        </td>
                                        <td>
                                          <h6><?php echo $row["completed_area"];?> ton</h6>
                                            </td>
                                             <td>
                                          <h6><?php echo $row["total_amount"];?> </h6>
                                            </td>
                                             <td>
                                          <h6><?php echo $row["farmer_payment_mode"];?> </h6>
                                            </td>
                                             <td>
                                          <h6><?php echo $row["payment_status"];?> </h6>
                                            </td>
                                            
                                            <!--td><div class="badge badge-opacity-success">Update</div></td-->
                                      </tr>
                         <?php
                         }
}
                         ?>             
                                      
                                    </tbody>
                                  </table>
                                  </div>
                                </div>
                                 </div>
                                  </div>
                                   </div>