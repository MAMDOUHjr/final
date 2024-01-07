<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $country = $_POST["country"];
    $birthday = $_POST["birthday"];

    try {
        require_once "config.php";

        $query = "UPDATE students SET full_name = :fullName, email = :email, phone_number = :phoneNumber, country = :country, birthday = :birthday WHERE username = :username";

        $stmt = $PDO->prepare($query);
        $stmt->bindParam(":fullName", $fullName);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":phoneNumber", $phoneNumber);
        $stmt->bindParam(":country", $country);
        $stmt->bindParam(":birthday", $birthday);
        $stmt->bindParam(":username", $_SESSION['username']);
        $stmt->execute();

        $rowCount = $stmt->rowCount();  // Get the number of affected rows

        // Close the connection
        $PDO = null;
        $stmt = null;

        if ($rowCount > 0) {
            // Update successful
            header("Location: ../index.php");
            exit();
        } else {
            // No rows were affected
            echo "No rows were affected. Check if the data is already the same.";
        }
    } catch (PDOException $e) {
        // Handle errors
        die("Query failed: " . $e->getMessage());
    }
} else {
    // Handle invalid request method
    echo "Invalid request method";
}
?>
