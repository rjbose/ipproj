<?php
require('db.php');


//Fetching Values from URL
$query=$_POST['query'];
$category=$_POST['category'];

//Insert query
$sql = "insert into unanswered(query,category) values ('$query', '$category')";

$result = mysqli_query($con,$sql);

if($result){
            echo "Query successfully submitted";
        }
        
else{
        echo "could not submit";
    }
    

mysqli_close($con); // Connection Closed
?>