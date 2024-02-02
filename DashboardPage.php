<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "dashboardpage";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

if (isset($_SESSION['role']) && $_SESSION['role'] !== 'admin'){

}
//if ($_SESSION['role'] !== 'admin') {
//    header("Location: DashboardPage.php"); 
//}
echo "Debug Point 1<br>";
$userData = [
    "username" => "user1",
    "email" => "user1@example.com",
    "password" => password_hash("password123", PASSWORD_DEFAULT),
    "role" => "admin"
];

$sqlInsertUser = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";
$stmtUser = $conn->prepare($sqlInsertUser);

if ($stmtUser) {
    $stmtUser->bind_param("ssss", $userData['username'], $userData['email'], $userData['password'], $userData['role']);

    if ($stmtUser->execute()) {
        echo "Sample user inserted successfully.<br>";
    } else {
        echo "Error inserting user: " . $stmtUser->error . "<br>";
    }

    $stmtUser->close();
} else {
    echo "Error preparing user insertion statement: " . $conn->error . "<br>";
}

$courseData = [
    ["Introduction to Python", "2024-02-01"],
    ["Data Structures and Algorithms", "2024-01-15"],
    ["Web Development with JavaScript", "2023-12-20"],
];

$sqlInsertCourses = "INSERT INTO courses (course_name, enrollment_date, user_id) VALUES (?, ?, ?)";
$stmtCourses = $conn->prepare($sqlInsertCourses);

if ($stmtCourses) {
    $userId = getUserID($conn, $userData['username']);

    foreach ($courseData as $data) {
        $stmtCourses->bind_param("ssi", $data[0], $data[1], $userId);

        if (!$stmtCourses->execute()) {
            echo "Error inserting courses: " . $stmtCourses->error . "<br>";
            break;
        }
    }

    $stmtCourses->close();
} else {
    echo "Error preparing courses insertion statement: " . $conn->error . "<br>";
}

$conn->close();
echo "Debug Point 2<br>";
function getUserID($conn, $username)
{
    $sqlGetUserId = "SELECT user_id FROM users WHERE username = ?";
    $stmtUserId = $conn->prepare($sqlGetUserId);

    if ($stmtUserId) {
        $stmtUserId->bind_param("s", $username);
        $stmtUserId->execute();
        $stmtUserId->bind_result($userId);
        $stmtUserId->fetch();
        $stmtUserId->close();

        return $userId;
    } else {
        echo "Error preparing user ID statement: " . $conn->error . "<br>";
        return null;
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ED-Learn Courses - Dashboard</title>
    <link rel="stylesheet" href="DashboardPage.css">
    <!--<script src="DashboardPage.js"></script>-->
</head>
<body>
    <header>
        <div class="nav">
            <a class="active" href="Home.php">Home</a>
            <a href="about.php">About</a>
            <a href="Courses.php">All Courses</a>
            <a href="Contact.php">Contact</a>
            <a href="news.php">News</a>
            <a href="DashboarPage.php">Dashboard</a>
            <div class="search">
                <input type="text" placeholder="Search.." name="search">
            </div>
        </div>
    </header>

    <main>
        <section class="card welcome-card">
            <h2>Welcome, User!</h2>
            <p>This is your dashboard. Here you can view and manage computer science courses.</p>
        </section>

        <section class="card recent-courses">
            <h2>Recent Courses</h2>
            <ul class="course-list">
                <li class="course-item">
                    <span>Introduction to Python</span>
                    <span>Enrolled on 2024-02-01</span>
                </li>
                <li class="course-item">
                    <span>Data Structures and Algorithms</span>
                    <span>Enrolled on 2024-01-15</span>
                </li>
                <li class="course-item">
                    <span>Web Development with JavaScript</span>
                    <span>Enrolled on 2023-12-20</span>
                </li>
            </ul>
        </section>

        <section class="card course-statistics">
            <h2>Course Statistics</h2>
            <p>Total Courses: 15</p>
            <p>Enrolled Courses: 5</p>
            <p>Completed Courses: 2</p>
        </section>
    </main>

    <footer>
        <div class="content">
            <div class="social-media">
                <h4>Social</h4>
                <p><a><i class="fab fa-twitter"></i> Twitter</a></p>
                <p><a><i class="fab fa-youtube"></i> YouTube</a></p>
                <p><a><i class="fab fa-facebook-f"></i> Facebook</a></p>
                <p><a><i class="fab fa-instagram"></i> Instagram</a></p>
            </div>

            <div class="links">
                <h4>Quick links</h4>
                <p><a>Home</a></p>
                <p><a>About</a></p>
                <p><a>Blogs</a></p>
                <p><a>Contact</a></p>
            </div>

            <div class="info">
                <h4 class="address">Address</h4>
                <p><a>Kosove, Prishtine, 10000</a></p>
                <h4 class="mobile">Mobile</h4>
                <p><a>+383 45200300</a></p>
                <h4 class="mail">Email</h4>
                <p><a>EDlearn@gmail.com</a></p>
            </div>
        </div>
    </footer>
    <script src="DashboardPage.js"></script>
</body>
</html>

