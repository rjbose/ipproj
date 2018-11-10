<?php


include("auth.php"); //include auth.php file on all secure pages ?>

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
  <a href="index.php">Welcome <?php echo $_SESSION['username']?>!</a>
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
  <a href="logout.php">Logout</a> 
  <form method="POST" action="search.php" class="searchdb">
			<input type="text" name="q" placeholder="query">
			<input type="submit" name="search" value="Search">
		</form>
</div>
<br>
  
<div class="search-bar"> 
 
 <script>
  (function() {
    var cx = '015547456235743402690:lcvntcoeazy';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
  
</div>



<h2>About the founders</h2>

<div class="about-us">
    
    <h3>Ranjay Bose</h3>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>


<div class="about-us">
    
     <h3>pradil</h3>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    
</div>


<div class="about-us">
    
     <h3>ankit</h3>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    
</div>



<div class="footer"><!--FOOTER code -->
  <p> Follow us on Facebook , Twitter , Instagram.<br><br>For other enquiries contact us here. All rights reserved.</p>
</div>