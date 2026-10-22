<?php 

include 'connect.php';

if(isset($_POST['SAVE'])){
    $fname=$_POST['fname'];
    $addr=$_POST['addr'];
    $age=$_POST['age'];
	$dob=$_POST['dob'];
    $cls=$_POST['cls'];
    

     
     
        $insertQuery="INSERT INTO children(fname,addr,age,dob,cls)
                       VALUES ('$firstName','$addr','$age','$dob','$cls')";
            if($conn->query($insertQuery)==TRUE){
                header("location: view.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   



if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: homepage.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
?>