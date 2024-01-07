
<?php
session_start();
$error_message = "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="./styles/signin.css">
    <link rel="stylesheet" href="./styles/HomeStyle.css">

</head>
<body>
    <div class="container">
        <h2>Sign In</h2>
        <?php
                if (isset($_GET['error'])) {
                 echo '<p class="error">' . $_GET['error'] . '</p>';
                }
        ?>

        <form action="./includes/login.php" method="post">
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
          
                <input type="submit" value="Sign In">
               
             
            <a href="./selectSign.htm">Don't have an account? Sign Up</a>
        </form>
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
