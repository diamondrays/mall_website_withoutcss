<?php
include('connect.php');

	$name=$_POST['name'];
	$qlf=$_POST['qlf'];
    $email=$_POST['email'];
	$address=$_POST['address'];
	
    

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
	$qlf = mysqli_real_escape_string($db_con, $_POST["qlf"]);
    $email = mysqli_real_escape_string($db_con, $_POST["email"]);
    $address = mysqli_real_escape_string($db_con, $_POST["address"]);
    
    $sqlInsert = "INSERT INTO staff(name , qlf , email , address ) VALUES ('$name','$qlf','$email','$address')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Staff Added Successfully!";
        header("Location:viewstaff.php");
    }else{
        die("Something went wrong");
    }
}


    


?>