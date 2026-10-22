<!DOCTYPE html>
<html>
<head>
<title>View Staff Data </title>
 <link rel="icon" href="pic.jpg" type="image/icon type">
</head>
<style>
body {background-color: powderblue;}
</style>
<center>
<h1>UPDATE STAFF RECORD</h1>
<body>
    
        <form action="editstaffprocess.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM staff WHERE id=$id";
                $result = mysqli_query($db_con,$sql);
                $row = mysqli_fetch_array($result);
                ?>
				<P> </P>
				
                     <div class="form-elemnt my-4">
			<label for="name">First Name</label>
                <input type="text" class="form-control" name="name" placeholder="Book Title:" value="<?php echo $row["name"]; ?>">
            </div><br>
            <div class="form-elemnt my-4">
			<label for="qlf">Qlf</label>
                <input type="text" class="form-control" name="qlf" placeholder="Author Name:" value="<?php echo $row["qlf"]; ?>">
            </div><br>
			<div class="form-elemnt my-4">
			<label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Author Name:" value="<?php echo $row["email"]; ?>">
            </div><br>
			<div class="form-elemnt my-4">
			<label for="address">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Author Name:" value="<?php echo $row["address"]; ?>">
            </div><br>
			
             <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit Record" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>staff Record Does Not Exist</h3>";
            }
            ?>
           
        </form>
      </center>  
        
    </div>
</body>
</html>