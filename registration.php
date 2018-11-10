<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    
    
    <div class="navbar">
  <img src="logo.png" id="logo">
  <a href="login.php">Welcome ! </a>
  <a href="index.php">Home</a>
  <a href="aboutus.php">About Us</a>
  <div class="dropdown">
    <button class="dropbtn">Find Answers
 
    </button>
    <div class="dropdown-content">
      <a href="cooking.php">Cooking</a>
      <a href="finance.php">Finance</a>
      <a href="tech.php">Technology</a>
      <a href="education.php">Education</a>
    </div>
  </div> 
</div>
<br>
  


<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="signupform">
<h1>Sign up here</h1><br>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required /><br>
<input type="email" name="email" placeholder="Email" required /><br>
<input type="password" name="password" placeholder="Password" required /><br>
<input type="submit" name="submit" value="Register" /><br>
</form>
<br /><br/>
<p><a href="login.php">Already a member? Click here to login.</a></p>
</div>
<?php } ?>


<div class="footer"><!--FOOTER code -->
  <p> Follow us on Facebook , Twitter , Instagram.<br><br>For other enquiries contact us here. All rights reserved.</p>
</div>

</body>
</html>
