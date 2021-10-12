<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup form</title>
   <style>
      body{
         background-image: url('nbv.jpg');
         background-repeat: no-repeat;
         background-attachment: fixed;  
         background-size: cover;
      }
      form{
         text-align: center;
      }
   </style>
</head>
<body>
	<form action="phpdb.php" method="POST">
 <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>

    <label for="First name"><b>First name</b></label>
    <input type="name" placeholder="Enter first name" name="nme" required="">
    <br><br>
    <label for="Last name"><b>Last name</b></label>
    <input type="name" placeholder="Enter last name" name="name" required="">
     <br><br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required="">
     <br><br>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="unme" required="">
     <br><br>
    <label for="password"><b>Password</b></label>
     <input type="password" placeholder="Enter Password" name="password">
     <br><br>
      <button type="reset" value="reset">Reset</button>
      <button type="submit">Submit</button>
</form>

</body>
</html>