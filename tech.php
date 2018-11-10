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


<br><br>


<center><h1>Some tech queries that have been answered.</h1></center>
<br><br>


<?php 

require('db.php'); 
    
 $query = "SELECT query,answer FROM `qna` WHERE category='technology'";
 $result = mysqli_query($con,$query) or die(mysql_error());

    
if (mysqli_num_rows($result) > 0) {
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
    
    


<div style="text-align:center;" >
    <a href="query_req.html"><h2>Didn't find what you were looking for? Click here to request an answer .</h2></a>
    
    </div>



<div class="footer"><!--FOOTER code -->
  <p> Follow us on Facebook , Twitter , Instagram.<br><br>For other enquiries contact us here. All rights reserved.</p>
</div>