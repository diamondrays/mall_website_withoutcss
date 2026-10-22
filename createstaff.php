<!DOCTYPE html>
<html>
<head>
<title>Staff Data</title>
 <link rel="icon" href="pick.jpg" type="image/icon type">
</head>
<style>
body {background-color: powderblue;}
</style>
<body>
<center>
<a href="createvendors.php">Createvendors Data </a></li>
 <a href="createadmin.php">Createadmin Data</a></li>
 <a href="createcustomers.php">creatcustomers Data </a></li>
<h1 style="color:blue;">STAFF DATA</h1>
<p style="color:red;">PLESE INPUT YOUR DETAILS BELOW THANKS FOR THE COOPERATION</p>

 <form action="createstaffprocess.php" method="post">
  <label for="name">Name:</label><br>
   <input type="text" id="name" name="name"><br>
   <label for="qlf">qlf:</label><br>
   <input type="text" id="qlf" name="qlf" ><br>
   <label for="address">Address:</label><br>
   <input type="text" id="address" name="address" ><br>
   <label for="email">Email:</label><br>
   <input type="text" id="email" name="email" ><br>
    
  <input type="submit" name="create" value="add" class="btn btn-primary">
  
</form> 

<P> </P>
</center>

</body>
</html>
