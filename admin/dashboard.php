<?php
// admin/dashboard.php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../index.php');  // Gunakan path absolut
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Admin Dashboard</h1>
    <nav>
        <a href="manage_users.php">Manage Users</a> |
        <a href="manage_schedules.php">Manage Schedules</a> |
        <a href="../root/logout.php">Logout</a>
    </nav>
    <p>Welcome, Admin!</p>
</body>
</html>