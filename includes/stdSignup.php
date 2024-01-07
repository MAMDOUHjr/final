<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $username = $_POST["username"];
    $phone = $_POST["phoneNumber"];
    $country = $_POST["country"];
    $birthday = $_POST["birth-day"];

        require_once "config.php";
        $query = "SELECT * FROM students WHERE email = :email";
        $stmt = $PDO->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            header("Location:../signup.php?error=Email already exists");
            exit();
        }
        if (empty($fullname)) {
            header("Location:../signup.php?error=Full Name is required");
            exit();
        }
        if (empty($email)) {
            header("Location:../signup.php?error=Email is required");
            exit();
        }
        if (empty($pwd)) {
            header("Location:../signup.php?error=Password is required");
            exit();
        }
        if (empty($confirmPassword)) {
            header("Location:../signup.php?error=Confirm Password is required");
            exit();
        }
        if (empty($username)) {
            header("Location:../signup.php?error=Username is required");
            exit();
        }
        if (empty($phone)) {
            header("Location:../signup.php?error=Phone Number is required");
            exit();
        }
        if (empty($country)) {
            header("Location:../signup.php?error=Country is required");
            exit();
        }
        if (empty($birthday)) {
            header("Location:../signup.php?error=Birth Day is required");
            exit();
        }
        if ($pwd !== $confirmPassword) {
            header("Location:../signup.php?error=The two passwords do not match");
            exit();
        }
        if($pwd !== $confirmPassword){
            header("Location:../signup.php?error=The two passwords do not match");
            exit();
        }
        
       
        $query = "SELECT * FROM students WHERE username = :username";
        $stmt = $PDO->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            header("Location:../signup.php?error=Username already exists");
            exit();
        }



    
    try {
        require_once "config.php";
        $query = "INSERT INTO students (full_name,email,password,username,phone_number,country,birthday) VALUES (:full_name,:email,:pwd,:username,:phone,:country,:birthday);";
        $stmt = $PDO->prepare($query);
        $stmt->bindParam(":full_name", $fullname);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":country", $country);
        $stmt->bindParam(":birthday", $birthday);
        $stmt->execute();
        
        $PDO = null;
        $stmt = null;
        header("Location: ../sucsesssignup.htm");
        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
