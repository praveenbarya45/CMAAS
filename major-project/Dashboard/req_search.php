<div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                       
                                        <th>#ID</th>
                                        <th>Crop Type</th>
                                        <th>Crop Name</th>
                                        <th>Crop Amount</th>
                                        <th>Crop Area</th>
                                        <th>Status</th>
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
 $query = "SELECT requirements.id,requirements.crop_amount as cropamount,requirements.crop_area as croparea,crops.crop_name as cropname,crop_types.type_name as croptype FROM requirements JOIN crops ON crops.id=requirements.crop_id JOIN crop_types ON crops.crop_type=crop_types.id WHERE crops.crop_name LIKE '%".$search."%'  ";
}
else
{
 $query = "SELECT requirements.id,requirements.crop_amount as cropamount,requirements.crop_area as croparea,crops.crop_name as cropname,crop_types.type_name as croptype FROM requirements JOIN crops ON crops.id=requirements.crop_id JOIN crop_types ON crops.crop_type=crop_types.id ORDER by requirements.id ";
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
                                            <h6><?php echo $row["croptype"];?></h6>
                                             
                                        </td>
                                        <td>
                                          <h6><?php echo $row["cropname"];?></h6>
                                            </td>
                                        <td>
                                          <h6><?php echo $row["cropamount"];?></h6>
                                         
                                        </td>
                                        <td>
                                          <h6><?php echo $row["croparea"];?> acre</h6>
                                            </td>
                                            
                                            <td><div class="badge badge-opacity-warning">In progress</div></td>
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