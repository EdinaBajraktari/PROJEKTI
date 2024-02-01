<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "register";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); 
    $email = $_POST["email"];
    $country = $_POST["country"];
    $gender = $_POST["gender"];

    
    $sql = "INSERT INTO users (name, username, password, email, country, gender) VALUES (?, ?, ?, ?, ?, ?)";
    
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $name, $username, $password, $email, $country, $gender);

    if ($stmt->execute()) {
       
        header("Location: LoginForm.php");
        exit();
    } else {
        
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $gender = $_POST["gender"];

    
    setcookie("user_name", $name, time() + 86400, "/");
    setcookie("user_username", $username, time() + 86400, "/");
    setcookie("user_email", $email, time() + 86400, "/");
    setcookie("user_country", $country, time() + 86400, "/");
    setcookie("user_gender", $gender, time() + 86400, "/");

    
    header("Location: LoginForm.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="register">
    <div class="title">RegisterForm </div>
    <form id="registrationForm" onsubmit="return validateForm()">
        <div class="user-details">
        <h1>Provide your personal data</h1>

        <div class="input-box">
        <span class="details">Name</span>
        <input type="text" id="name" required />
        </div>

        <div class="input-box">
        <span class="details">Username</span>
        <input type="text" id="username"required />
        </div>

        <div class="input-box">
        <span class="details">Password</span>
        <input type="password" id="password" required />
        </div>

        <div class="input-box">
        <span class="details">Email</span>
        <input type="email" id="email" required />
        </div>

        <div class="input-box">
        <span class="details">Country</span>
        <select id="country" name="country" required>
            <option selected="" value="Default">(Please select a country)</option>
        <option value="AF">Australia</option>
        <option value="AL">Albania</option>
        <option value="RKS">Kosovo</option>
        <option value="AS">UK</option>
        <option value="AD">USA</option>
        </select>
        </div>
        </div>
        
        <div class="gender-details">
            <span class="gender-title">Gender</span>
            <div class="category">
            
        <input type="radio" name="gender" id="male" required>
            <label for="male"><span class="dot one"></span>Male</label>

            <input type="radio" name="gender" id="female" required>
            <label for="female"><span class="dot two"></span>Female</label>

            <input type="radio" name="gender" id="not-specified" required>
            <label for="not-specified"><span class="dot three"></span>Prefer not to say</label>
                </div>
            </div>

            <div class="button">
                <input type="submit" value="Register" />
    </div>
    </form>
</div> 
        <script src="register.js"></script>
    
</body>
</html>