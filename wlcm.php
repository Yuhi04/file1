<?php  
session_start();

if(isset($_POST) & !empty($_POST)){
  if(isset($_POST['csrf_token'])){
    if($_POST['csrf_token'] == $_SESSION['csrf_token']){
      //echo "CSRF Validation Success";
    }
  }
}
$token = md5(uniqid(rand(), true));
$_SESSION['csrf_token'] = $token;
$_SESSION['csrf_token_time'] = time();
if (!isset($_SESSION['pass'],$_SESSION['name']))
{
	header("location:log.php");
}
$uname=$_SESSION['name'];
$password=$_SESSION['pass'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
body {
  background-image: url('lama.jpg');
   background-repeat: no-repeat;
         background-attachment: fixed;  
         background-size: cover;
}
</style>
</head>
<body>
<h1>WELCOME AT OUR SERVICE!!!!!!!!!!</h1>
<button><a href="logout.php">LOGOUT</a></button>
<div>
	<img src="hotel.jpg" height="200" width="400">
	<img src="bag.jpg" height="200" width="400">
	<img src="gut.jpg" height="200" width="400">
	<img src="chips.jpg" height="200" width="400">
	<img src="drin.jpg" height="200" width="400">
	<img src="eat.jpg" height="200" width="400">
	<img src="foc.jpg" height="200" width="400">
	<img src="kam.jpg" height="200" width="400">
	<img src="bog.jpg" height="200" width="400">
	<img src="mas.jpg" height="200" width="400">
	<img src="nunu.jpg" height="200" width="400">
	<img src="ser.jpg" height="200" width="400">
</div>
</body>
</html>