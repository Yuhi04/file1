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
$sql="insert into form (firstname,lastname,email,username,password)values('$fname','$lname','$email','$uname','$password')";

if ($conn->query($sql) === TRUE){
  echo "Record created successfully";

}

else{

  echo "error: " .$sql . "<br>" . $conn->error;
}

$conn->close();
?>