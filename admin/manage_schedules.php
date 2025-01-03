<?php
// admin/manage_schedules.php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../index.php');
    exit;
}
include '../connection.php';

$schedules = $conn->query("SELECT jadwal_bimbingan.id, users.username AS mahasiswa, u2.username AS dosen, jadwal_bimbingan.tanggal, jadwal_bimbingan.status FROM jadwal_bimbingan JOIN users ON jadwal_bimbingan.mahasiswa_id = users.id JOIN users u2 ON jadwal_bimbingan.dosen_id = u2.id");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Schedules</title>
</head>
<body>
    <h1>Manage Schedules</h1>
    <a href="dashboard.php">Back to Dashboard</a>
    <h2>Schedule List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Mahasiswa</th>
            <th>Dosen</th>
            <th>Tanggal</th>
            <th>Status</th>
        </tr>
        <?php while ($row = $schedules->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['mahasiswa']; ?></td>
            <td><?php echo $row['dosen']; ?></td>
            <td><?php echo $row['tanggal']; ?></td>
            <td><?php echo $row['status']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>