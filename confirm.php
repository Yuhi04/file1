<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CONFIRM PASSWORD</title>
</head>
<body>
	<?php
	$statement=$_GET['statement'];
	if(empty($statement)){
		echo"Could not change password";
}
else{
	
	?>
<form action="reset.php" method="POST">
	<h1>RESET PASSWORD</h1>
    <input type="password" placeholder="Enter new password" name="pass" required>
    <br> <br>
   <input type="password" placeholder="Confirm Password" name="pwd" required>
    <br> <br>
    <input type="hidden" name="statement" value="<?php echo $statement;?>">
    <br> <br>
    <button type="submit" name="subt">SEND</button>
</form>
</body>
</html>
<?php }?>