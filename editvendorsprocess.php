<?php
include('connect.php');

	$name=$_POST['name'];
    $addressl=$_POST['address'];
    $goods=$_POST['goods'];
	$price=$_POST['price'];
   




if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $address = mysqli_real_escape_string($db_con, $_POST["address"]);
    $goods = mysqli_real_escape_string($db_con, $_POST["goods"]);
    $price = mysqli_real_escape_string($db_con, $_POST["price"]);
	
    $id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE vendors SET name = '$name', address = '$address', goods = '$goods', price = '$price' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "vendors Record Updated Successfully!";
        header("Location:viewvendors.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>