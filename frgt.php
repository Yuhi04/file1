<?php 
  include("database.php");
if (isset($_POST['send'])) {
	$email=$_POST['email'];
	$x=0;
	$sql="select* from form where email=?";
$result= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($result,$sql)) {
 echo "Failed!!";
}
else{
  mysqli_stmt_bind_param($result,"s",$email);
  mysqli_stmt_execute($result);
  $select=mysqli_stmt_get_result($result);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['email']==$email)
    {
    $x=$x+1;
    $savedemail=$row['email'];
}
  }
}
  if($x>=1){
	$statement=bin2hex(random_bytes(8));
	$result=random_bytes(32);
	$url="http://localhost/my%20project/confirm.php?statement=$statement";
	
     $sql="delete from reset where email=?";
     $result= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($result,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($result,"s",$email);
  mysqli_stmt_execute($result);
}
$q="insert into reset(email,statement) values(?,?)";
$result= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($result,$q)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($result,"ss",$email,$statement);
  mysqli_stmt_execute($result);
}
$from = 'mutambagz@gmail.com';
$to = $email;
$subject = 'Reset password';
$message = '<p>Click on this link';
$message .= '<a href="'.$url.'</a></p>';
$headers = 'From: ' . $from;
$headers .= 'Reply-To: ' . $from;
$headers .= 'Content-type:text/html';
mail($to, $subject, $message, $headers);
echo"email successful";
}
else{
	echo "email not found";
}
}
?>