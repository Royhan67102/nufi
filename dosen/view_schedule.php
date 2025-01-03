<?php
// dosen/view_schedule.php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'dosen') {
    header('Location: ../index.php');
    exit;
}
include '../connection.php';

$schedules = $conn->query("SELECT jadwal_bimbingan.id, users.username AS mahasiswa, jadwal_bimbingan.tanggal, jadwal_bimbingan.status FROM jadwal_bimbingan JOIN users ON jadwal_bimbingan.mahasiswa_id = users.id WHERE dosen_id = " . $_SESSION['user_id']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Schedule</title>
</head>
<body>
    <h1>View Schedule</h1>
    <a href="dashboard.php">Back to Dashboard</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Mahasiswa</th>
            <th>Tanggal</th>
            <th>Status</th>
        </tr>
        <?php while ($row = $schedules->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['mahasiswa']; ?></td>
            <td><?php echo $row['tanggal']; ?></td>
            <td><?php echo $row['status']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>