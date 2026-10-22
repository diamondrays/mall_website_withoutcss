<!DOCTYPE html>
<html>
<head>
<title>Admin Data</title>
 <link rel="icon" href="pick.jpg" type="image/icon type">
</head>
<style>
body {background-color: powderblue;}
</style>
<body>
<center>
<a href="createstaff.php">Createstaff Data </a></li>
 <a href="createcustomers.php">Createcustomers Data</a></li>
 <a href="createvendors.php">creatvendors Data </a></li>
<h1 style="color:blue;">ADMIN DATA</h1>
<p style="color:red;">PLESE INPUT YOUR DETAILS BELOW THANKS FOR THE COOPERATION</p>

 <form action="createadminprocess.php" method="post">
  <label for="name">Name:</label><br>
   <input type="text" id="name" name="name"><br>
   <label for="email">Email:</label><br>
   <input type="text" id="email" name="email" ><br>
   <label for="address">Address:</label><br>
   <input type="text" id="address" name="address" ><br>
    
  <input type="submit" name="create" value="add" class="btn btn-primary">
  
</form> 

<P> </P>
</center>

</body>
</html>
