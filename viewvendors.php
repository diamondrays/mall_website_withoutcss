<!DOCTYPE html>
<html>
<head>
<title>Vendors Data </title>
 <link rel="icon" href="pic.jpg" type="image/icon type">
</head>
<style>
body {background-color: powderblue;}
</style>
<body>
<center>
<a href="viewadmin.php">Viewadmin Data </a></li>
 <a href="viewstaff.php">Viewstaff Data</a></li>
 <a href="viewcustomers.php">Viewcustomers Data </a></li>
<center><h1>VENDORS DATA</h1></center>
   <center/>
 <div class="panel-body">
 <div class="table-responsive table-bordered">
   <table class="table">
      <thead>
	  
     <tr>
 <th>#</th>
 <th>Name </th>
 <th>Address</th>
 <th>Goods </th>
 <th>Price </th>
 <th>Action</th>
 </tr>
 </thead>
 
<tbody>

<?php
include 'connect.php';
$sql=mysqli_query($db_con,"select * from vendors");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>


                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo htmlentities($row['name']);?></td>
                                            <td><?php echo htmlentities($row['address']);?></td>
                                            <td><?php echo htmlentities($row['goods']);?></td>
											<td><?php echo htmlentities($row['price']);?></td>
											 <td>
                    
                    <a href="editvendors.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="deletevendors.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
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

