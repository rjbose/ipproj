<?php
session_start();
?>
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


<h2>We are here to answer your queries! So create an account and gain knowledge NOW !</h2><br><br>

<?php 
require('db.php'); 
    
 $query = "SELECT * FROM `qna` WHERE category='cooking'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 
    
if (mysqli_num_rows($result)>0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
?>
<?php
        echo "<div class='query-display'>";
        echo "<h2>". $row["query"]. "</h2>";
        echo "<br>";
        echo "<p style='font-size:20px'>". $row["answer"]. "</p><br><br>";
        echo "</div><br><br>";
    }
} else {
    echo "0 results";
}
?>
<?php
	require('db.php');
	//session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        
        if($rows==1 && $username == "admin" ){
			$_SESSION['username'] = $username;
			header("Location: admin.html"); // Redirect administrator to admin.php
            }
        elseif($rows==1 && $username != "admin"){
            $_SESSION['username'] = $username;
            header("Location: index.php"); // Redirect administrator to index.php
        }
        
        else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<div class="loginform">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
<a href="forgotPassword.php">Forgot Password</a>
<br /><br />
</div>
<?php }?>


<div class="footer"><!--FOOTER code -->
  <p> Follow us on Facebook , Twitter , Instagram.<br><br>For other enquiries contact us here. All rights reserved.</p>
</div>



</body>
</html>
