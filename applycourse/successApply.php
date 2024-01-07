<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/SuccessStyle.css">
    <title>Congratulations!</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #DDF2FD;
            text-align: center;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .congrats {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .course-name {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .watch-button {
            background-color: #144272;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.5s;
        }

        .watch-button:hover {
            background-color: #427D9D;
            transition: 0.5s;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="congrats">Congratulations!</div>
        <div class="course-name">You have successfully enrolled in the course.</div>
        <a href="../aya/Loading1.html"class="watch-button">Watch Course</a>
    </div>
</body>



</html>
<?php
if (isset($_GET['course_name'])) {
    $courseName = $_GET['course_name'];

    // Fetch course information based on $courseName if needed
    // You can retrieve the course details from a database or any other source

    // For now, let's just display the course_name
    echo "<h2>Enrolling in Course: $courseName</h2>";


    $_SESSION['enrolled_courses'][] = [
        'course_name' => $courseName,
       
    ];

  
    exit();
} else {
    header("Location: ...");
    exit();
}
?>
