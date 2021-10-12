<?php
session_start();

 include "database.php";
$uname=$_POST['name'];
$password=$_POST['pwd'];
  $savedpassword=$password;
echo "<br>";
$password=sha1($password);
$sql= "SELECT * FROM form WHERE username = '$uname' AND password = '$password' ";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
echo 'success';
header("location:wlcm.php");
$_SESSION['name']=$uname;
$_SESSION['pass']=$password;
if(!empty($_POST['remember'])) {
            setcookie ("name",$uname,time()+ 3600);
            setcookie ("pass",$savedpassword,time()+ 3600);
            setcookie("check",$check,time()+ 3600);
        }}
else
{
echo 'Incorrect username or password';
}
?>