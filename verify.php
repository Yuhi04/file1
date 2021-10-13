<?php
session_start();
include('database.php');

if (isset($_POST['verify'])) {
    $email=$_SESSION['email'];
    $code=$_POST['code'];
   $query = "SELECT * FROM form WHERE code=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i',$code);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }
  if($num_rows > 0){
      $query = "UPDATE form SET status='Verified' WHERE email=? ";
  $stmti = $conn->prepare($query);
$stmti->bind_param('s',$email);
$stmti->execute();
$stmti->close();
header('location:log.php');

    }
  else{
    echo "Wrong code";
  }

  }
?>