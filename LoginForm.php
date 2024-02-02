<?php
  if(isset($_POST['loginbtn'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
      echo "Please fill the required fields!";
    }else{
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        include_once 'users.php';
        $i=0;
        
        foreach($users as $user){
          if($user['username'] == $username && $user['password'] == $password){
            session_start();
      
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['role'] = $user['role'];
            $_SESSION['loginTime'] = date("H:i:s");
            header("location:Home.php");
            exit();
          }else{
            $i++;
            if($i == sizeof($users)) {
              echo "Incorrect Username or Password!";
              exit();
            }
          }
        }
    }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="Login.css" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="Login.js"></script>
    </head>
    <body>
 
      <div class="container">
     
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="Form" onsubmit="return validateForm()">
        <h1>Login</h1>
        <div class="box">
       Username: <input  type="text" placeholder="username" name="username" id="username" required>
       <i class='bx bxs-user'></i>

        </div>
        <div class="box">
          <input  type="password" placeholder="password" name="password" id="password" required>
          <i class='bx bxs-lock-alt'></i>
      
           </div>
           <div class="forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot password?</a>
             </div>
            <button type="submit" name="loginbtn" class="btn" value='RUAJ'>Submit</button>

             <div class="register-link">
              <p>Dont have an account?<a href="register.php">  Register</a></p>
             </div>
             
       </form>
   

      </div>
      


    </body>
</html>


