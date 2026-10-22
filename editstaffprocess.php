<?php
include('connect.php');

	$name=$_POST['name'];
    $qlf=$_POST['qlf'];
    $address=$_POST['address'];
	$email=$_POST['email'];
   




if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $qlf = mysqli_real_escape_string($db_con, $_POST["qlf"]);
    $address = mysqli_real_escape_string($db_con, $_POST["address"]);
    $email = mysqli_real_escape_string($db_con, $_POST["email"]);
	
    $id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE staff SET name = '$name', qlf = '$qlf', address = '$address', email = '$email' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "staff Record Updated Successfully!";
        header("Location:viewstaff.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>