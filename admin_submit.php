<?php
require('db.php');


//Fetching Values from URL
$query=$_POST['query'];
$answer=$_POST['answer'];
$category=$_POST['category'];


//Insert query
$sql = "insert into qna(query,answer,category) values ('$query','$answer','$category')";

$result = mysqli_query($con,$sql);

if($result){
            echo "Query successfully answered";
        }
        
else{
        echo "could not submit";
    }
    

mysqli_close($con); // Connection Closed
?>