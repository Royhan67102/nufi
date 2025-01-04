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
    <link rel="stylesheet" href="../root/assets/css/admindashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="sidebar d-flex flex-column p-3">
        <h4 class="text-center my-3">Admin Panel</h4>
        <hr>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="bi bi-house-door-fill"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-people-fill"></i> Kelola Dosen
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-mortarboard-fill"></i> Kelola Mahasiswa
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-file-earmark-text-fill"></i> Laporan Progress
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-gear-fill"></i> Pengaturan Sistem
                </a>
            </li>
        </ul>
        <hr>
        <button onclick="window.location.href='../root/logout.php';" class="btn btn-danger mt-auto">Logout</button>
    </div>

    <div class="header">
        <h5>Admin Control Panel</h5>
    </div>

    <div class="content">
        <h1>Welcome to Admin Panel</h1>
        <p>This is the dashboard where you can manage users, progress reports, and system settings.</p>
        <div class="card mt-4">
            <div class="card-header">
                <h5>Today's Schedule</h5>
            </div>
            <div class="card-body">
                <ul>
                    <li>08:00 - Meeting with Dr. Agus S.</li>
                    <li>10:30 - Proposal Review (Budi Raharjo)</li>
                    <li>13:00 - Guidance Session (Room BA-302)</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>