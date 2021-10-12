<!DOCTYPE html>
<html>
<head>
  <title>LOGIN FORM</title>
  <style>
body {
 background-image: url('best.jpg');
 background-repeat: no-repeat;
 background-attachment: fixed;  
  background-size: cover;
}
form{
    text-align: center;
}
div{
    text-align: center;
}
</style>
</head>
<body>

<form action="logph.php" method="post">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" value="<?php if(isset($_COOKIE["name"])) { echo $_COOKIE["name"]; } ?>">
    <br> <br>
    <label for="pwd"><b>Password</b></label>
   <input type="password" placeholder="Enter Password" name="pwd" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>">
    <br> <br>
    <button type="submit">Login</button>
    <button type="reset" value="reset">Cancel</button>
    <label>
       <br> <br>
      <input type="checkbox" name="remember" value=" <?php if(isset($_COOKIE['check'])){?>checked<?php }?>">Remember me
    </label>
</form>
<br><br>
<div>Create new account here<button><a href="sgn.php">SIGNUP</a></button></div>
</body>
</html>
