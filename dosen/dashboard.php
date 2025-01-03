<?php
// dosen/dashboard.php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'dosen') {
    header('Location: ../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dosen Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Dosen Dashboard</h1>
    <nav>
        <a href="view_schedule.php">View Schedule</a> |
        <a href="give_feedback.php">Give Feedback</a> |
        <a href="../root/logout.php">Logout</a>
    </nav>
</body>