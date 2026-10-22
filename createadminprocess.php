<?php
include('connect.php');

	$name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
	
    

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $email = mysqli_real_escape_string($db_con, $_POST["email"]);
    $address = mysqli_real_escape_string($db_con, $_POST["address"]);
    
    $sqlInsert = "INSERT INTO admin(name , email , address ) VALUES ('$name','$email','$address')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Admin Added Successfully!";
        header("Location:viewadmin.php");
    }else{
        die("Something went wrong");
    }
}


    


?>