<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit();
}

$username = $_SESSION['username'];

try {
    require_once "./includes/config.php";
    $query = "SELECT * FROM students WHERE username = :username";
    $stmt = $PDO->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $student = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$student) {
        die("Student not found");
    }

    $enrolledCourses = isset($_SESSION['enrolled_courses']) ? $_SESSION['enrolled_courses'] : [];

    $PDO = null;
    $stmt = null;
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/profileStyle.css">
    <title>Student Profile</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .profile-details {
            margin-top: 20px;
        }

        .profile-details p {
            margin: 10px 0;
            font-size: 16px;
        }

        .edit-profile-btn {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .edit-profile-btn:hover {
            background-color: #2980b9;
        }

        /* New styles for input fields and second container */
        .profile-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .edit-container {
            display: none;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .edit-container label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
        }

        .edit-container button {
            display: inline-block;
            margin-top: 20px;
            margin-right: 10px;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .edit-container button.cancel-btn {
            background-color: #e74c3c;
        }

        .edit-container button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <div class="profile-container">
        <h1>Student Profile</h1>

        <div class="profile-details">
            <p><strong>Full Name:</strong> <?php echo $student['full_name']; ?></p>
            <p><strong>Email:</strong> <?php echo $student['email']; ?></p>
            <p><strong>Phone Number:</strong> <?php echo $student['phone_number']; ?></p>
            <p><strong>Country:</strong> <?php echo $student['country']; ?></p>
            <p><strong>Birthday:</strong> <?php echo $student['birthday']; ?></p>

            <h2>Enrolled Courses:</h2>
            <ul>
                <?php foreach ($enrolledCourses as $enrolledCourse) : ?>
                    <li> <?php echo $enrolledCourse['course_name']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <button class="edit-profile-btn">Edit Profile</button>

        <div class="edit-container">
            <form action="./includes/updateprof.php"method="Post">

            
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName"  name="fullName">

            <label for="email">Email</label>
            <input type="email" id="email" name="email">

            <label for="phoneNumber">Phone Number</label>
            <input type="tel" id="phoneNumber"name="phoneNumber">

            <label for="country">Country</label>
            <input type="text" id="country"name="country">

            <label for="birthday">Birthday</label>
            <input type="date" id="birthday"name="birthday">
           
            <input type="submit" class="edit-profile-btn save-btn">
            <button class="edit-profile-btn cancel-btn">Cancel</button>
            </form>
            
        </div>
    </div>
                    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var editContainer = document.querySelector(".edit-container");
            document.querySelector(".edit-profile-btn").addEventListener("click", function () {
                editContainer.style.display = "block";
            });

            document.querySelector(".cancel-btn").addEventListener("click", function () {
                editContainer.style.display = "none";
            });
        });
    </script>
</body>
</html>
