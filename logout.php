<?php 
session_start();

if(isset($_SESSION['user'])){ 
session_destroy(); 
header('Location:LoginForm.php');
}else{
header('Location:LoginForm.php');
}
?>
