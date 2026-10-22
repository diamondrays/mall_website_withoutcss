<?php
include('connect.php');

	$name=$_POST['name'];
    $addressl=$_POST['address'];
    $amount=$_POST['amount'];
	$goods=$_POST['goods'];
   




if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $address = mysqli_real_escape_string($db_con, $_POST["address"]);
    $amount = mysqli_real_escape_string($db_con, $_POST["amount"]);
    $goods = mysqli_real_escape_string($db_con, $_POST["goods"]);
	
    $id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE customers SET name = '$name', address = '$address', amount = '$amount', goods = '$goods' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "customers Record Updated Successfully!";
        header("Location:viewcustomers.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>