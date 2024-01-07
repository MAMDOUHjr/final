<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $username = $_POST["username"];
    $phone = $_POST["phoneNumber"];
    $country = $_POST["country"];
    $birthday = $_POST["birth-day"];
    $courses = $_POST["coursesTeached"];

    try {
        require_once "config.php";
        
        $query = "INSERT INTO instructors(full_name,email,password,username,phone_number,country,birthday,courses) VALUES (:full_name,:email,:pwd,:username,:phone,:country,:birthday,:courses);";
        $stmt = $PDO->prepare($query);
        $stmt->bindParam(":full_name", $fullname);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":country", $country);
        $stmt->bindParam(":birthday", $birthday);
        $stmt->bindParam(":courses", $courses);
        $stmt->execute();
      
        $PDO = null;
        $stmt = null;
        header("Location: ../sucsessSignupIns.htm");
        die(); 
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
