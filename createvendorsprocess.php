<?php
include('connect.php');

	$name=$_POST['name'];
	$address=$_POST['address'];
    $goods=$_POST['goods'];
	$price=$_POST['price'];
	
    

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
	$address = mysqli_real_escape_string($db_con, $_POST["address"]);
	$goods = mysqli_real_escape_string($db_con, $_POST["goods"]);
    $price = mysqli_real_escape_string($db_con, $_POST["price"]);
    
    
    $sqlInsert = "INSERT INTO vendors(name , address , goods , price ) VALUES ('$name','$address','$goods','$price')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Vendors Added Successfully!";
        header("Location:viewvendors.php");
    }else{
        die("Something went wrong");
    }
}


    


?>