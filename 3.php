
<?php 
session_start();
$_SESSION['username'] = "Admin";
$_SESSION['password'] = "rahasia";
echo "Username = ".$_SESSION['username'];
echo "<br/>";
echo "Password = ".$_SESSION['password'];
?>
