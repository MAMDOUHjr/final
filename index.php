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
    <link rel="stylesheet" href="./styles/tasks_road.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
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
    
    .hero-section {
        background: linear-gradient(to right, #427D9D, #DDF2FD);
        color: #fff;
        padding: 50px;
        text-align: center;
    }

    .hero-section h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .hero-section p {
        font-size: 1.2rem;
        margin-bottom: 30px;
    }

    .hero-section a.button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #144272;
        color: #fff;
        text-decoration: none;
        font-size: 1rem;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .hero-section a.button:hover {
        background-color: #427D9D;
    }
</style>

<body>

    <main>
    <section class="hero-section">
            <h1>Welcome to Skill Zone!</h1>
            <p>Unlock your potential with our top-rated courses. Sign in now to get started on your learning journey.</p>
            <?php
            if (!isset($_SESSION['username'])) {
                echo '<a href="./loading.html" class="button">Sign In</a>';
            }
            ?>
        </section>
        <section>
            <h3>ـــــــــــــــــــ Popular Courses🔥ـــــــــــــــــــ </h3>
            <div class="courses">   
                <!-- cpp course  -->
                <div class="course">   
                    <img src="./styles/imgs/cpp_logo.png" alt="" style="overflow: hidden;">
                    <h4> C++ Course </h4>
                    <p>Instructor:
                        <a href="./instructorprof.php">Amr Mamdouh</a>
                    </p>
                    <p>Rating: ⭐⭐⭐⭐</p>
                    <?php 
                        if (isset($_SESSION['enrolled_courses'])) {
                            $enrolledCourses = $_SESSION['enrolled_courses'];
                            $isEnrolled = false;
                            foreach ($enrolledCourses as $enrolledCourse) {
                                if ($enrolledCourse['course_name'] == 'Cpp') {
                                    $isEnrolled = true;
                                    break;
                                }
                            }
                            if ($isEnrolled) {
                                echo '<a href="./aya/Loading1.html"><button>watch now</button></a>';
                            } else {
                                echo '<a href="./applycourse/appCpp.php"><button>Enroll Now</button></a>';
                            }
                        }  else {
                            echo '<a href="./applycourse/appCpp.php"><button>Enroll Now</button></a>';
                        }
                        ?>
                </div>
                 <!-- python course -->
                <div class="course"> 
                    <img src="./styles/imgs/Python-logo.png" alt="" style="overflow: hidden;">
                    <h4> Python Course for beginners </h4>
                    <p>Instructor:
                        <a href="./instructorprof.php">Amr Mamdouh</a>
                    </p>
                    <p>Rating:⭐⭐⭐⭐⭐</p>
                    <?php 
                        if (isset($_SESSION['enrolled_courses'])) {
                            $enrolledCourses = $_SESSION['enrolled_courses'];
                            $isEnrolled = false;
                            foreach ($enrolledCourses as $enrolledCourse) {
                                if ($enrolledCourse['course_name'] == 'Python') {
                                    $isEnrolled = true;
                                    break;
                                }
                            }
                            if ($isEnrolled) {
                                echo '<a href="./aya/Loading1.html"><button>watch now</button></a>';
                            } else {
                                echo '<a href="./applycourse/appPython.php"><button>Enroll Now</button></a>';
                            }
                        }
                        else {
                            echo '<a href="./applycourse/appPython.php"><button>Enroll Now</button></a>';
                        }
                        ?>
                </div>
                <!-- java course  -->
                <div class="course"> 
                    <img src="./styles/imgs/java.png" alt="" style="overflow: hidden;">
                    <h4> Java Course </h4>
                   
                    <p>Instructor:
                        <a href="./instructorprof.php">Amr Mamdouh</a>
                    </p>
                    <p>Rating: ⭐⭐⭐⭐⭐</p>
                    <?php 
                        if (isset($_SESSION['enrolled_courses'])) {
                            $enrolledCourses = $_SESSION['enrolled_courses'];
                            $isEnrolled = false;
                            foreach ($enrolledCourses as $enrolledCourse) {
                                if ($enrolledCourse['course_name'] == 'Java') {
                                    $isEnrolled = true;
                                    break;
                                }
                            }
                            if ($isEnrolled) {
                                echo '<a href="./aya/Loading1.html"><button>watch now</button></a>';
                            } else {
                                echo '<a href="./applycourse/appJava.php"><button>Enroll Now</button></a>';
                            }
                        } else{
                            echo '<a href="./applycourse/appJava.php"><button>Enroll Now</button></a>';
                        } 
                    
                    ?>
                <!-- php course  -->
                </div>
                <div class="course"> 
                    <img src="./styles/imgs/php.png" alt="" style="overflow: hidden;">
                    <h4> PHP Course </h4>
                    <p>Instructor:
                        <a href="./instructorprof.php">Amr Mamdouh</a>
                    </p>
                    <p>Rating: ⭐⭐⭐⭐</p>
                    <?php 
                        if (isset($_SESSION['enrolled_courses'])) {
                            $enrolledCourses = $_SESSION['enrolled_courses'];
                            $isEnrolled = false;
                            foreach ($enrolledCourses as $enrolledCourse) {
                                if ($enrolledCourse['course_name'] == 'PHP') {
                                    $isEnrolled = true;
                                    break;
                                }
                            }
                            if ($isEnrolled) {
                                echo '<a href="./aya/Loading1.html"><button>watch now</button></a>';
                            } else {
                                echo '<a href="./applycourse/appPhp.php"><button>Enroll Now</button></a>';
                            }
                        } 
                        else{
                            echo '<a href="./applycourse/appPhp.php"><button>Enroll Now</button></a>';
                        }
                    
                    ?>
                    
                </div>
                
              
            </div>
         

        </section>
        <section>
            <h3>ـــــــــــــــــــ Tracks & roadmaps🔥ـــــــــــــــــــ </h3>
            <div class="container">
                <a href="./trackproblem.php" class="course-button">
                    <i class="fa fa-code"></i>
                    <h2>Problem Solving</h2>
                </a>
                <a href="./trackweb.php" class="course-button">
                    <i class="fa fa-laptop"></i>
                    <h2>Web Development</h2>
                </a>
                </div>
        </section>
    </main>
    <footer>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-section-about">
                    <a href="./index.php" style="text-decoration: none;color: aliceblue;"><h1 style="font-family: 'Agentur';">Skill Zone<span>| BETA</h1></a>
                    <p>Skill Roads is a platform that provides you with the best courses and tracks to learn programming languages and computer science.</p>
                    <p>&copy; <span id="currentYear"></span> Skill Roads</p>
                    <div class="contact">
                        <i class="fa fa-envelope"></i>
                        contactUs@skillzone.com
                    </div>
                    <span id="currentTime" style="
                        font-size: 1.5rem;
                        font-weight: bold;
                        color: aliceblue;
                        margin-top: 1rem;
                        display: block;
                    " ></span>
                </div>
            </div>
        </div>
        
        <script>
         
            document.getElementById("currentYear").innerText = new Date().getFullYear();
    
            
            function updateTime() {
                var currentTimeElement = document.getElementById("currentTime");
                var currentTime = new Date();
                var hours = currentTime.getHours();
                var minutes = currentTime.getMinutes();
                var seconds = currentTime.getSeconds();
                
             
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;
    
                currentTimeElement.innerText = "Current Time: " + hours + ":" + minutes + ":" + seconds;
            }
    
        
            setInterval(updateTime, 1000);
        </script>
    </footer>
    
</body>
</html>
