<div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                       
                                        <th>#ID</th>
                                        <th>Farmer Name</th>
                                        <th>Crop Name</th>
                                        <th>Organisation Name</th>
                                        <th>Organisation Adress</th>
                                         <th>Total Crop Amount</th>
                                         <th>Total Amount</th>
                                        <th>Payment Mode</th>
                                        <th>Payment Status</th>
                                        <th>Action</th>
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
 $query = "SELECT orders.id,orders.crop_amount,organisations.org_name,farmers.farmer_name,orders.payment_mode,organisations.org_address,crops.crop_name,orders.total_amount,orders.payment_status FROM orders JOIN farmers ON farmers.id=orders.farmer_id JOIN organisations  ON organisations.id=orders.org_id JOIN crops ON crops.id=orders.crop_id WHERE crops.crop_name LIKE '%".$search."%'  ";
}
else
{
 $query = "SELECT orders.id,orders.crop_amount,organisations.org_name,farmers.farmer_name,orders.payment_mode,organisations.org_address,crops.crop_name,orders.total_amount,orders.payment_status FROM orders JOIN farmers ON farmers.id=orders.farmer_id JOIN organisations  ON organisations.id=orders.org_id JOIN crops ON crops.id=orders.crop_id ORDER by orders.id ";
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
                                          <div class="">
                                           <?php echo $cnt;?>.   </div>
                                        </td>
                                          <td>
                                            <h6><?php echo $row["farmer_name"];?></h6>
                                             
                                        </td>
                                        <td>
                                          <h6><?php echo $row["crop_name"];?></h6>
                                            </td>
                                             <td>
                                            <h6><?php echo $row["org_name"];?></h6>
                                             
                                        </td>
                                      
                                        <td>
                                          <h6>&emsp;<?php echo $row["org_address"];?></h6>
                                         
                                        </td>
                                        <td>
                                          <h6><?php echo $row["crop_amount"];?> ton</h6>
                                            </td>
                                             <td>
                                          <h6>₹ <?php echo $row["total_amount"];?> </h6>
                                            </td>
                                             <td>
                                          <h6><?php echo $row["payment_mode"];?> </h6>
                                            </td>
                                             <td>
                                          <h6><?php echo $row["payment_status"];?> </h6>
                                            </td>
                                            
                                            <td><div class="badge badge-opacity-success"><a href="view_order.php?id=<?php echo $row['id']; ?>"><i class="fa fa-eye"></i>View</a></div></td>
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