<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/tasks_road.css">
    <link rel="stylesheet" href="./styles/HomeStyle.css">
    <title>Tasks & Roadmaps</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        
    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="./index.php" class="logo">Skill Zone <span>| BETA</span></a>
            <ul class="nav-list">
                <li class="nav-item"><a href="./index.php">Home</a></li>
                <li class="nav-item"><a href="./tasks_road.php">Tracks / Roadmaps</a></li>
                <li class="nav-item"><a href="./intern.php">Internships</a></li>
                <?php
        
        if (isset($_SESSION['username'])) {
         
            echo '<li class="nav-item"><a href="./stuprof.php">' . $_SESSION['username'] . '</a></li>';
            echo '<li class="nav-item"><a href="./includes/logout.php">log out </a></li>';
        } else {
            
            echo '<li class="nav-item"><a href="./loading.html">Sign In / Up</a></li>';
        }
        ?>
            </ul>
        </nav>
    </header>
    

    <div class="container">
        <a href="./trackproblem.php" class="course-button">
            <i class="fa fa-code"></i>
            <h2>Problem Solving</h2>
        </a>
        <a href="./trackweb.php" class="course-button">
            <i class="fa fa-laptop"></i>
            <h2>Web Development</h2>
        </a>
        <a href="#" class="course-button">
            <i class="fa fa-mobile"></i>
            <h2>Mobile Development</h2>
        </a>
        <a href="#" class="course-button">
            <i class="fa fa-bar-chart"></i>
            <h2>Data Science</h2>
        </a>
        <a href="#" class="course-button">
            <i class="fa fa-code"></i>
            <h2>Programming Languages</h2>
        </a>
        <a href="#" class="course-button">
            <i class="fa fa-gamepad"></i>
            <h2>Game Development</h2>
        </a>
        <a href="#" class="course-button">
            <i class="fa fa-database"></i>
            <h2>Databases</h2>
        </a>
        <a href="#" class="course-button">
            <i class="fa fa-cogs"></i>
            <h2>Machine Learning</h2>
        </a>
    </div>
</body>
<footer>
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section-about">
                <a href="./index.php" style="text-decoration: none;color: aliceblue;"><h1 style="font-family: 'Agentur';">Skill Zone<span>| BETA</h1></a>
                <p>Skill Roads is a platform that provides you with the best courses and tracks to learn programming languages and computer science.</p>
                <p>&copy; Skill Roads</p>
                <div class="contact">
                    <i class="fa fa-envelope"></i>
                    contactUs@skillzone.com
                </div>
            </div>
        </div>
    </div>
</footer>

</html>
