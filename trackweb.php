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
    <title>Web Development Roadmap</title>
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
<body>

    <h1 class="h">Web Development Roadmap</h1>

    <section>
        <h3>ـــــــــــــــــــ Frontend Development ـــــــــــــــــــ </h3>
        <dl class="roadmap">
            <dt>1. Learn HTML and CSS</dt>
            <dd>Master the fundamentals of building web pages with HTML and CSS.</dd>

            <dt>2. Understand JavaScript</dt>
            <dd>Learn the basics of JavaScript for interactive web development.</dd>

            <dt>3. Explore Frontend Frameworks</dt>
            <dd>Study popular frontend frameworks like React, Angular, or Vue.js.</dd>

            <dt>4. Responsive Design</dt>
            <dd>Learn how to create responsive and mobile-friendly web designs.</dd>

            <dt>5. Browser Developer Tools</dt>
            <dd>Understand how to use browser developer tools for debugging and optimization.</dd>

            <dt>6. Version Control</dt>
            <dd>Learn version control using Git and GitHub.</dd>

            <dt>7. Web Performance Optimization</dt>
            <dd>Optimize web performance for faster loading times.</dd>
        </dl>
        
        <div class="courses">   
            <div class="course"> 
                <img src="./styles/imgs/html.png" alt="" style="overflow: hidden;">
                <h4> HTML Fundamentals </h4>
                <p>Instructor:
                    <a href="#">Jane Doe</a>
                </p>
                <p>Rating: ⭐⭐⭐⭐</p>
                <a href="error.htm"><button>Enroll Now</button></a>
            </div>
            <div class="course"> 
                <img src="./styles/imgs/css.png" alt="" style="overflow: hidden;">
                <h4> CSS Styling Techniques </h4>
                <p>Instructor:
                    <a href="#">Jane Doe</a>
                </p>
                <p>Rating: ⭐⭐⭐⭐⭐</p>
                <a href="error.htm"><button>Enroll Now</button> </a>
            </div>
            <div class="course"> 
                <img src="./styles/imgs/javascript.png" alt="" style="overflow: hidden;">
                <h4> JavaScript Essentials </h4>
                <p>Instructor:
                    <a href="#">John Doe</a>
                </p>
                <p>Rating: ⭐⭐⭐⭐⭐</p>
                <a href="error.htm"><button>Enroll Now</button> </a>
            </div>
        </div>
    </section>
    
    <section>
        <h3>ـــــــــــــــــــ Backend Development ـــــــــــــــــــ </h3>
        <dl class="roadmap">
            <dt>1. Choose a Backend Language</dt>
            <dd>Learn a backend language such as Node.js, Python, Ruby, or Java.</dd>

            <dt>2. Server-Side Frameworks</dt>
            <dd>Explore server-side frameworks like Express.js, Django, or Flask.</dd>

            <dt>3. Database Management</dt>
            <dd>Understand databases and how to interact with them (e.g., MySQL, MongoDB).</dd>

            <dt>4. RESTful APIs</dt>
            <dd>Learn how to design and consume RESTful APIs for web applications.</dd>

            <dt>5. Authentication and Authorization</dt>
            <dd>Implement user authentication and authorization mechanisms.</dd>

            <dt>6. Deployment and Hosting</dt>
            <dd>Learn how to deploy and host backend applications on platforms like Heroku or AWS.</dd>

            <dt>7. Server-Side Rendering (Optional)</dt>
            <dd>Explore server-side rendering for improved performance and SEO.</dd>
        </dl>
        
        <div class="courses">   
            <div class="course"> 
                <img src="./styles/imgs/node.png" alt="" style="overflow: hidden;">
                <h4> Node.js Fundamentals </h4>
                <p>Instructor:
                    <a href="#">John Doe</a>
                </p>
                <p>Rating: ⭐⭐⭐⭐</p>
                <a href="error.htm"> <button>Enroll Now</button>    </a>
            </div>
            <div class="course"> 
                <img src="./styles/imgs/Expressjs.png" alt="" style="overflow: hidden;">
                <h4> Express.js Basics </h4>
                <p>Instructor:
                    <a href="#">Jane Doe</a>
                </p>
                <p>Rating: ⭐⭐⭐⭐⭐</p>
                <a href="error.htm"><button>Enroll Now</button> </a>
            </div>
            <div class="course"> 
                <img src="./styles/imgs/mongo.png" alt="" style="overflow: hidden;">
                <h4> MongoDB Essentials </h4>
                <p>Instructor:
                    <a href="#">Jane Doe</a>
                </p>
                <p>Rating: ⭐⭐⭐⭐</p>
                <a href="error.htm"><button>Enroll Now</button> </a>
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
