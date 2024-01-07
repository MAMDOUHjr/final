<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/HomeStyle.css">
    <title>Instructor Profile</title>
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
</head>
<style>

.profile-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px;
}

.profile-image img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin-right: 20px;
}

.profile-info {
    max-width: 400px;
}
</style>
<body>

    
    <section class="profile-container">
        <div class="profile-image">
            <img src="./styles/imgs/amr.jpg" alt="Instructor Avatar">
        </div>
        <div class="profile-info">
            <h2>Amr Mamdouh</h2>
            <p>Web Development Instructor</p>
            <p>Email: devmamdouhjr@gmail.com</p>
            <p>Experience: 2 years</p>
            <p>Specialization: Frontend Development</p>
            <p>Teaching Style: Interactive and Practical</p>
        </div>
    </section>

    <div class="courses">   
        <div class="course"> 
            <img src="./styles/imgs/html.png" alt="" style="overflow: hidden;">
            <h4> HTML Fundamentals </h4>
           
            <p>Rating: ⭐⭐⭐⭐</p>
            <button>Enroll Now</button>
        </div>
        <div class="course"> 
            <img src="./styles/imgs/css.png" alt="" style="overflow: hidden;">
            <h4> CSS Styling Techniques </h4>
           
            <p>Rating: ⭐⭐⭐⭐⭐</p>
            <button>Enroll Now</button>
        </div>
        <div class="course"> 
            <img src="./styles/imgs/javascript.png" alt="" style="overflow: hidden;">
            <h4> JavaScript Essentials </h4>
            
            <p>Rating: ⭐⭐⭐⭐⭐</p>
            <button>Enroll Now</button>
        </div>
    </div>
        </div>
    </section>

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

</body>
</html>
