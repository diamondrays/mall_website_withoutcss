<!DOCTYPE html>
<html>
<head>
<title>Vendors Data</title>
 <link rel="icon" href="pick.jpg" type="image/icon type">
</head>
<style>
body {background-color: powderblue;}
</style>
<body>
<center>
<a href="createstaff.php">Createstaff Data </a></li>
 <a href="createadmin.php">Createadmin Data</a></li>
 <a href="createcustomers.php">creatcustomers Data </a></li>
<h1 style="color:blue;">VENDORS DATA</h1>
<p style="color:red;">PLESE INPUT YOUR DETAILS BELOW THANKS FOR THE COOPERATION</p>

 <form action="createvendorsprocess.php" method="post">
  <label for="name">Name:</label><br>
   <input type="text" id="name" name="name"><br>
   <label for="address">Address:</label><br>
   <input type="text" id="address" name="address" ><br>
   <label for="goods">Goods:</label><br>
   <input type="text" id="goods" name="goods" ><br>
   <label for="price">Price:</label><br>
   <input type="text" id="price" name="price" ><br>
    
  <input type="submit" name="create" value="add" class="btn btn-primary">
  
</form> 

<P> </P>
</center>

</body>
</html>
