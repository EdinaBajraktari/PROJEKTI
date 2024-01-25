<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["user"];
    $password = $_POST["psw"];

  
}
?>
<!DOCTYPE html>
<html>
<body>
Mirsevjen: <?php echo $_REQUEST["user"]; ?><br>

</body>
</html>