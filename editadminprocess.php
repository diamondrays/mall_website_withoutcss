<?php
include('connect.php');

	$name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    




if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $email = mysqli_real_escape_string($db_con, $_POST["email"]);
    $address = mysqli_real_escape_string($db_con, $_POST["address"]);
    $id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE admin SET name = '$name', email = '$email', address = '$address' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "admin Record Updated Successfully!";
        header("Location:viewadmin.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>