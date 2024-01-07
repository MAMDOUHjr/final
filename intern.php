<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./styles/HomeStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internships</title>
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
    .message {
    text-align: center;
    margin-top: 50px;
    font-size: 30px;
    color: #555;
    font-family: 'Agentur';

}
.con {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;
}
.con a{
    text-decoration: none;
    color: #555;
    font-family: 'Agentur';
    transition: 0.3s;
}
.con a:hover{
    color: rgb(34, 0, 255);
}


</style>
<body>
         
    <div class="con">
        <p class="message">Sorry, no internships available right now . Back to<a href="./index.php"> Home page </a> </p>
      
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