<?php
include('connect.php');

	$name=$_POST['name'];
	$address=$_POST['address'];
    $amount=$_POST['amount'];
	$goods=$_POST['goods'];
	
    

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
	$address = mysqli_real_escape_string($db_con, $_POST["address"]);
    $amount = mysqli_real_escape_string($db_con, $_POST["amount"]);
    $goods = mysqli_real_escape_string($db_con, $_POST["goods"]);
    
    $sqlInsert = "INSERT INTO customers(name , address , amount , goods ) VALUES ('$name','$address','$amount','$goods')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Customers Added Successfully!";
        header("Location:viewcustomers.php");
    }else{
        die("Something went wrong");
    }
}


    


?>