<?php
//session_start();
//if(!isset($_SESSION["username"])){
//header("Location: login.php");
//exit(); }

session_start();

if(!isset($_SESSION["username"])){
echo "<script>
alert('Please login to continue');
window.location.href='login.php';
</script>";
}
?>
