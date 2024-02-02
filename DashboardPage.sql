USE dashboardpage;

-- Create the users table
CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);


CREATE TABLE IF NOT EXISTS courses (
    course_id INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(100) NOT NULL,
    enrollment_date DATE NOT NULL,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

INSERT INTO users (username, email, password) VALUES ('user1', 'user1@example.com', 'password123');


INSERT INTO courses (course_name, enrollment_date, user_id) VALUES
    ('Introduction to Python', '2024-02-01', 1),
    ('Data Structures and Algorithms', '2024-01-15', 1),
    ('Web Development with JavaScript', '2023-12-20', 1);
