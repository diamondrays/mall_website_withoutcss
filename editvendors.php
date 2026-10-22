<!DOCTYPE html>
<html>
<head>
<title>View Vendors Data </title>
 <link rel="icon" href="pic.jpg" type="image/icon type">
</head>
<style>
body {background-color: powderblue;}
</style>
<center>
<h1>UPDATE VENDORS RECORD</h1>
<body>
    
        <form action="editvendorsprocess.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM vendors WHERE id=$id";
                $result = mysqli_query($db_con,$sql);
                $row = mysqli_fetch_array($result);
                ?>
				<P> </P>
				
                     <div class="form-elemnt my-4">
			<label for="name">First Name</label>
                <input type="text" class="form-control" name="name" placeholder="Book Title:" value="<?php echo $row["name"]; ?>">
            </div><br>
            <div class="form-elemnt my-4">
			<label for="address">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Author Name:" value="<?php echo $row["address"]; ?>">
            </div><br>
			<div class="form-elemnt my-4">
			<label for="goods">goods</label>
                <input type="text" class="form-control" name="goods" placeholder="Author Name:" value="<?php echo $row["goods"]; ?>">
            </div><br>
			<div class="form-elemnt my-4">
			<label for="price">price</label>
                <input type="text" class="form-control" name="price" placeholder="Author Name:" value="<?php echo $row["price"]; ?>">
            </div><br>
			
             <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit Record" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>vendors Record Does Not Exist</h3>";
            }
            ?>
           
        </form>
      </center>  
        
    </div>
</body>
</html>