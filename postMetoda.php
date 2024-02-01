<?php
include('security.php');

if(isset($_POST['btn']))
{
    $username_login = $_POST['username']; 
    $password_login = $_POST['password']; 

    $query = "SELECT * FROM register WHERE username='$username_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);
    $usertypes = mysqli_fetch_array($query_run);

    if($usertypes['role'] == "admin")
    {
        $_SESSION['username'] = $username_login;
        header('Location: Home.php');
    }
    else if($usertypes['role'] == "user")
    {
        $_SESSION['username'] = $username_login;
        header('Location: ../Home.php');
    }
    else
    {
        $_SESSION['status'] = "Username / Password is Invalid";
        header('Location: LoginForm.php');
    }
}
?>