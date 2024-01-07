<?php
if (isset($_GET['course_name'])) {
    $courseName = $_GET['course_name'];
    echo "<h2>Enrolling in Course: $courseName</h2>";
    $_SESSION['enrolled_courses'][] = [
        'course_name' => $courseName,
    ];
    header("Location: ../stuprof.php");
    exit();
} else {
    header("Location: ...");
    exit();
}
?>