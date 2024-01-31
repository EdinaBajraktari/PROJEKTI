<?php 
session_start();
if(isset($_SESSION['user'])){
echo "<h3>Welcome te Dashboard</h3>";

echo "<br><a href='welcome.php'>back</a>";

?>

<html lang="en">
<body>
<h1>Dashboard</h1>
<ul>
<li>Produktet</li>
</ul>
</body>
</html>

<?php } else {header('Location:LoginForm.php');}

 ?>
