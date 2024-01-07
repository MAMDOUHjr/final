<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/HomeStyle.css">
    
    <title>Enroll</title>
    <style>

        body{
        margin: 0;  
        padding: 0;
       font-family: Arial, sans-serif;
         background-color: #DDF2FD;
        }
        .container{
            margin: 10px 10px;
            display: flex;
            flex-direction: row;
            gap: 10px;
            justify-content: space-around;
         width: 100%;
         min-height: 100vh;
        }
        .W_learn{
            width: 400px;
        }
        dl{
            margin: 15px 10px;
            padding: 10px;
        }
        dt{
            margin: 5px;
            font-weight: 600;
            font-family:Arial, Helvetica, sans-serif;
            font-size: 18px;
        }
        
        .logo{
            margin: 5px 5px;
            padding: 25px;
            display: flex;
            justify-content: center;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            width: 250px;
            height: 250px;
        }
        #h3{
            margin: 5px;
            padding: 2px 100px;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: xx-large;
        }
        .but{
            
        background-color: #144272;
        width: 150px;
        display: inline-block;
        cursor: pointer;
        outline: none;
        border: 0;
        vertical-align: middle;
        text-decoration: none;
        font-family: sans-serif;
        font-size: 15px;
        }
        button{
    width: 150px;
    height: 50px;
    border: none;
    text-align: center;
    border-radius: 5px;
    background-color: #144272;
    color: #fff;
    font-size: larger;
    font-weight: bold;
    cursor: pointer;
    transition: 0.5s;

}
button:hover{
    background-color: #427D9D;
    transition: 0.5s;
}
a{
    text-decoration: none;
    color: black;
    font-size: large;
}
a:hover{
    color: red;
}
.overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Adjust the alpha value for transparency */
            backdrop-filter: blur(10px); /* Add the blur effect */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            display: none;
        }

        .overlay-content {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
    </style>
   
</head>
<body>


    <!-- ========================== -->
    <div class="overlay" id="overlay">
        <div class="overlay-content">
            <p>You need to sign in to apply for this course.</p>
            <a href="../signin.php"><button>Sign In</button></a>
        </div>
    </div>
    <!-- ========================== -->


    <div class="container">
        <div class="content">
           <div class="course_content">
            <dl>
                <dt>⭐ Course content</dt>
                <dd>- we have :
                    <ol>
                        <li>Chapter1
                            <ul>
                                <li>siple python cod</li>
                                <li>Variables</li>
                                <li>Strings</li>
                                <li>Numbers</li>
                            </ul>
                        </li><br>
                        <li>Chapter2
                            <ul>
                                <li>How to get input</li>
                                <li>Build a simple project</li>
                                <li>List</li>
                                <li>Tuple</li>
                            </ul>
                        </li><br>
                        <li>Chapter3
                            <ul>
                                <li>Functions</li>
                                <li>Conditionals</li>
                                <li>Comparisons</li>
                                <li>project calculator</li>
                            </ul>
                        </li>
                    </ol>
                </dd>
            </dl>
           </div>
           <br>
           <div class="W_learn">
            <dl>
                <dt>⭐ What you will learn</dt>
            <dd>-Learning Python can provide you with a versatile set of skills that are applicable in various domains.</dd>
            </dl>
           </div>
           <br>
           <div class="hours">
            <dl>
                <dt>⭐ Hours of course</dt>
                <dd>- 16 hours</dd>
            </dl>
           </div><br>
           <div class="inst">
            <dl>
                <dt>⭐ Course instructor name</dt>
                <dd>
                <a href="../instructorprof.php">Amr mamdouh</a> 
                </dd>
            </dl>
           </div>
 <div class="but">
   
    <script>
       
        <?php 
            if (!isset($_SESSION['username'])) {
                echo 'document.getElementById("overlay").style.display = "flex";';
            }
        ?>
        
    </script>
     <a href="./successApply.php?course_name=Python"><button>Apply</button></a>
      </div>
    </div>
    <div class="photo">
       <div class="photo1">
        <img class="logo" src="../styles/imgs/Python-logo.png" alt="python logo"> 
        <h3 id="h3">Python</h3>
       </div>
    </div>
   
        </div>
      
</body>
<footer>
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section-about">
                <a href="../index.php" style="text-decoration: none;color: aliceblue; "><h1 style="font-family: 'Agentur';">Skill Zone<span>| BETA</h1></a>
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

