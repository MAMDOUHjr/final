<?php
session_start();



$error_message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    require_once "config.php";
    
    try {
        $query = "SELECT * FROM students WHERE username = :username AND password = :password";
        $stmt = $PDO->prepare($query);  
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if(empty($username)){
            header("Location:../signin.php?error=Username is required");
            exit();
        }
        else if(empty($password)){
            header("Location:../signin.php?error=Password is required");
         
        }
        else
        if ($user) {
           
            $_SESSION['username'] = $user['username'];
            header("Location:../index.php");
            exit();
        } else {
            header("Location:../signin.php?error=wrong username or password");
            exit();
        }

        $PDO = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
?>
