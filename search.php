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
  

<?php
require('db.php');
if(isset($_POST['search'])){
	$q = $_POST['q'];
	$query = mysqli_query($con,"SELECT * FROM `qna` WHERE `query` LIKE '%$q%'"); 
//Replace table_name with your table name and `thing_to_search` with the column you want to search
	$count = mysqli_num_rows($query);
	
	if($count == "0"){
		$output = '<h2>No result found!</h2>';
	}else{
		while($row = mysqli_fetch_array($query)){
        echo "<div class='query-display'>";
        echo "<h2>". $row["query"]. "</h2>";
        echo "<br>";
        echo "<p style='font-size:20px'>". $row["answer"]. "</p><br><br>";
        echo "</div><br><br>";
        echo '</div>';
			}
		}
	}
?>



<div class="footer"><!--FOOTER code -->
  <p> Follow us on Facebook , Twitter , Instagram.<br><br>For other enquiries contact us here. All rights reserved.</p>
</div>