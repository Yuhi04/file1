<?php
session_start();
include "database.php";
$fname=$_POST['nme'];
$lname=$_POST['name'];
$email=$_POST['email'];
$user=$_POST['uname'];
$pass=$_POST['password'];

$_SESSION['email']=$email;
    $_SESSION['code']=$code;
$code= mt_rand(100000, 999999);
$status="not verified";
$sql="INSERT INTO form (firstname, lastname, email, username, password, code, status) values(?,?,?,?,?,?,?)";
$st=mysqli_stmt_init($conn);
 $to=$email;
    $from="From: mutambagz1@gmail.com";
    $subject="Verification Code for the web";
    $message =$code;
 
    $mailing = mail($to,$subject,$message,$from);
if(mysqli_stmt_prepare($st,$sql)){
$salted="qsdfghjhgh".$pass;
$pass=hash('sha1', $salted);
header('location: code.php');
mysqli_stmt_bind_param($st,"sssssss",$fname,$lname,$email,$user,$pass,$code,$status);
    mysqli_stmt_execute($st);
}
else{

  //echo "error:".$sql."<br>".$conn->error;
  echo "error!";
}




?>