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
    <link rel="stylesheet" href="./styles/problemtrack.css">
    <title>Competitive Programming Roadmap</title>
</head>
<nav class="navbar">

    <a href="./index.php" class="logo">Skill Zone<span>| BETA</a>

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

<body>

    <h1 class="h">Competitive Programming Roadmap</h1>

    <dl class="roadmap">
        <dt>1. Learn a Programming Language</dt>
        <dd>Master a language like C++, Java, or Python.</dd>

        <dt>2. Understand Data Structures</dt>
        <dd>Learn arrays, linked lists, stacks, queues, trees, etc.</dd>

        <dt>3. Explore Algorithms</dt>
        <dd>Study sorting algorithms, searching algorithms, and graph algorithms.</dd>

        <dt>4. Time and Space Complexity</dt>
        <dd>Understand the efficiency of algorithms.</dd>

        <dt>5. Dynamic Programming</dt>
        <dd>Master dynamic programming techniques.</dd>

        <dt>6. Practice, Practice, Practice</dt>
        <dd>Solve coding problems regularly on platforms like Codeforces, LeetCode, or HackerRank.</dd>

        <dt>7. Participate in Contests</dt>
        <dd>Join online coding contests to improve your problem-solving skills under time constraints.</dd>

        <dt>8. Learn Advanced Topics</dt>
        <dd>Explore advanced algorithms, competitive programming paradigms, and topics like geometry or number theory.</dd>

        <dt>9. Mock Interviews</dt>
        <dd>Practice interview-like coding sessions to enhance real-world problem-solving skills.</dd>

        <dt>10. Stay Updated</dt>
        <dd>Keep up with the latest trends and updates in competitive programming.</dd>
    </dl>
    <section>
        <h3>ـــــــــــــــــــ Useful Courses ـــــــــــــــــــ </h3>
        <div class="courses">   
            <div class="course"> 
                <img src="./styles/imgs/cpp_logo.png" alt="" style="overflow: hidden;">
                <h4> C++ Course </h4>
                <p>Instructor:
                    <a href="#">John Doe</a>
                </p>
                <p>Rating: ⭐⭐⭐⭐</p>
                <a href="error.htm"><button>Enroll Now</button></a>  
            </div>
            <div class="course"> 
                <img src="./styles/imgs/Python-logo.png" alt="" style="overflow: hidden;">
                <h4> Python Course for beginners </h4>
                <p>Instructor:
                    <a href="#">John Doe</a>
                </p>
                <p>Rating: ⭐⭐⭐⭐⭐</p>
               <a href="error.htm"><button>Enroll Now</button></a> 
            </div>
            <div class="course"> 
                <img src="./styles/imgs/java.png" alt="" style="overflow: hidden;">
                <h4> Java Course </h4>
               
                <p>Instructor:
                    <a href="#">John Doe</a>
                </p>
                <p>Rating: ⭐⭐⭐⭐⭐</p>
                <a href="error.htm"><button>Enroll Now</button></a>
            </div>
            
        </div>
    </section>
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
