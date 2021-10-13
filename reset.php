<?php 
if (isset($_POST['subt'])) {
	$statement=$_POST['statement'];
  $y=0;
	$newpassword=$_POST['pass'];
	$confirmpassword=$_POST['pwd'];
if ($newpassword!=$confirmpassword) {
    echo '<script language="javascript">';
echo 'alert("Password are not similar");';
echo "\n";
header("location:confirm.php?statement=$statement");
echo '</script>';
	}
	require "database.php";
$sql="select* from reset where statement=?";
$token= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($token,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($token,"s",$statement);
  mysqli_stmt_execute($token);
  $select=mysqli_stmt_get_result($token);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['statement']==$statement)
    {
    $y=$y+1;
    $savedemail=$row['email'];
}
  }
  if ($y<1) {
 echo "Re-send your submition".$statement;
  }
  else
  {
$sql="select* from reset where email=?";
$token= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($token,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($token,"s",$savedemail);
  mysqli_stmt_execute($token);
  $select=mysqli_stmt_get_result($token);
  if (!$row=mysqli_fetch_assoc($select)) {
  	echo "There is an error!";
  }
  else
  {
  $sql="UPDATE form set password=? where email=?";
  $token= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($token,$sql)) {
 echo "statement failed";
}
else{
	$newpass=$confirmpassword;
$salted="qsdfghjhgh".$newpass;
$newpass=hash('sha1', $salted);
  mysqli_stmt_bind_param($token,"ss",$newpass,$savedemail);
  mysqli_stmt_execute($token);

  $sql="delete from reset where email=?";
     $token= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($token,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($token,"s",$savedemail);
  mysqli_stmt_execute($token);
  echo "Password updated";
}	
  }

  	}
}
}}}
else
{
	header("location:log.php");
}
?>