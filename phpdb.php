 <?php
 include "database.php";
$fname=$_POST['nme'];
echo "<br>";
$lname=$_POST['name'];
echo "<br>";
$email=$_POST['email'];
echo "<br>";
$uname=$_POST['unme'];
echo "<br>";
  $password = sha1($_POST['password']);
$sql="insert into form (firstname,lastname,email,username,password)values(?,?,?,?,?)";
$st=mysqli_stmt_init($conn);
if(mysqli_stmt_prepare($st,$sql))
{
  echo "Record created successfully";
mysqli_stmt_bind_param($st,"sssss",$fname,$lname,$email,$uname,$password);
mysqli_stmt_execute($st);
}

else{

  echo "error: " .$sql . "<br>" . $conn->error;
}

$conn->close();
?>
 