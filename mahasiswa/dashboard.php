<?php
// mahasiswa/dashboard.php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'mahasiswa') {
    header('Location: ../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mahasiswa Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Mahasiswa Dashboard</h1>
    <nav>
        <a href="schedule_guidance.php">Schedule Guidance</a> |
        <a href="view_feedback.php">View Feedback</a> |
        <a href="manage_tasks.php">Manage Tasks</a> |
        <a href="../root/logout.php">Logout</a>
    </nav>
</body>
</html>