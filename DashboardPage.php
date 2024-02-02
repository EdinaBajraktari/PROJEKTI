<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ED-Learn Courses - Dashboard</title>
    <link rel="stylesheet" href="DashboardPage.css">
    <script src="DashboardPage.js"></script>
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
</body>
</html>

