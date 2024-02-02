<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "dashboardpage";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = "user1";
$email = "user1@example.com";
$password = password_hash("password123", PASSWORD_DEFAULT);


$sqlInsertUser = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
if ($conn->query($sqlInsertUser) === TRUE) {
    echo "Sample user inserted successfully.<br>";
} else {
    echo "Error inserting user: " . $conn->error . "<br>";
}


$courseName1 = "Introduction to Python";
$enrollmentDate1 = "2024-02-01";

$courseName2 = "Data Structures and Algorithms";
$enrollmentDate2 = "2024-01-15";

$courseName3 = "Web Development with JavaScript";
$enrollmentDate3 = "2023-12-20";

$sqlGetUserId = "SELECT user_id FROM users WHERE username = '$username'";
$result = $conn->query($sqlGetUserId);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $userId = $row["user_id"];

    $sqlInsertCourses = "INSERT INTO courses (course_name, enrollment_date, user_id) VALUES
        ('$courseName1', '$enrollmentDate1', $userId),
        ('$courseName2', '$enrollmentDate2', $userId),
        ('$courseName3', '$enrollmentDate3', $userId)";

    if ($conn->multi_query($sqlInsertCourses) === TRUE) {
        echo "Sample courses inserted successfully.<br>";
    } else {
        echo "Error inserting courses: " . $conn->error . "<br>";
    }
} else {
    echo "User not found.<br>";
}

$conn->close();

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

