<?php
// mahasiswa/view_feedback.php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'mahasiswa') {
    header('Location: ../index.php');
    exit;
}
include '../connection.php';

$feedbacks = $conn->query("SELECT jadwal_bimbingan.id, users.username AS dosen, jadwal_bimbingan.tanggal, jadwal_bimbingan.feedback FROM jadwal_bimbingan JOIN users ON jadwal_bimbingan.dosen_id = users.id WHERE mahasiswa_id = " . $_SESSION['user_id']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Feedback</title>
</head>
<body>
    <h1>View Feedback</h1>
    <a href="dashboard.php">Back to Dashboard</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Dosen</th>
            <th>Date</th>
            <th>Feedback</th>
        </tr>
        <?php while ($row = $feedbacks->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['dosen']; ?></td>
            <td><?php echo $row['tanggal']; ?></td>
            <td><?php echo $row['feedback']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
