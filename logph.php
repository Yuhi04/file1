<?php
session_start();
include "database.php";
$uname=$_POST['name'];
$password=$_POST['pwd'];
$salted="qsdfghjhgh".$password;
$password=hash('sha1', $salted);
  $sql= "SELECT * FROM form WHERE username = '$uname' AND password = '$password' ";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
  $query = "SELECT * FROM form WHERE status='Verified' ";
  $query = "SELECT * FROM form WHERE username = '$uname' AND password = '$password' AND status='Verified' ";
    $stmt = $conn->prepare($query);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;  
  }
  if($num_rows > 0){
$_SESSION['name']=$uname;
$_SESSION['pass']=$password;
 header("location:wlcm.php");
if(!empty($_POST['remember'])) {
            setcookie ("name",$uname,time()+ 3600);
            setcookie ("pass",$savedpassword,time()+ 3600);
            setcookie("check",$check,time()+ 3600);

        }}
else{
  header("location:login.php");
}}
else
{
echo 'Incorrect username or password';
}
?>

<?php




