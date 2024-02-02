<?php 

session_start();

  if(isset($_SESSION['username'])){ 
  session_destroy(); 
header('Location:Home.php');

}else{

header('Location:Home.php');
}
?>
