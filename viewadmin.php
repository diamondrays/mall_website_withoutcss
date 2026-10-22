<!DOCTYPE html>
<html>
<head>
<title>Admin Data </title>
 <link rel="icon" href="pic.jpg" type="image/icon type">
</head>
<style>
body {background-color: powderblue;}
</style>
<body>
<center>
<a href="createstaff.php">staff form </a></li>
<a href="createadmin.php">admin form </a></li>
<a href="viewstaff.php">Viewstaff Data </a></li>
 <a href="viewcustomers.php">Viewcustomers Data</a></li>
 <a href="viewvendors.php">Viewvendors Data </a></li>
<center><h1>ADMIN DATA</h1></center>
   <center/>
 <div class="panel-body">
 <div class="table-responsive table-bordered">
   <table class="table">
      <thead>
	  
     <tr>
 <th>#</th>
 <th>Name </th>
 <th>Email </th>
 <th>Address</th>
 <th>Action</th>
 </tr>
 </thead>
 
<tbody>

<?php
include 'connect.php';
$sql=mysqli_query($db_con,"select * from admin");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>


                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo htmlentities($row['name']);?></td>
                                            <td><?php echo htmlentities($row['email']);?></td>
                                            <td><?php echo htmlentities($row['address']);?></td>
											 <td>
                    
                    <a href="editadmin.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="deleteadmin.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
                                            <td>
                                            
                                        </tr>
<?php 
$cnt++;
} ?>

                                        
                                    </tbody>
                                </table>
								</center>
								
                            </div>
                        </div>
                    </div>
                     <!--  End  Bordered Table  -->
                </div>
            </div>





        </div>
    </div>
   
   
</body>
</html>

