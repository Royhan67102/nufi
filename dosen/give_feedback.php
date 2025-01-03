<?php
// dosen/give_feedback.php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'dosen') {
    header('Location: ../index.php');
    exit;
}
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $guidance_id = $_POST['guidance_id'];
    $feedback = $_POST['feedback'];

    $sql = "UPDATE jadwal_bimbingan SET feedback = ?, status = 'Completed' WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $feedback, $guidance_id);
    $stmt->execute();
    $stmt->close();
}

$pending_guidance = $conn->query("SELECT jadwal_bimbingan.id, users.username AS mahasiswa, jadwal_bimbingan.tanggal FROM jadwal_bimbingan JOIN users ON jadwal_bimbingan.mahasiswa_id = users.id WHERE dosen_id = " . $_SESSION['user_id'] . " AND status = 'Pending'");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Give Feedback</title>
</head>
<body>
    <h1>Give Feedback</h1>
    <a href="dashboard.php">Back to Dashboard</a>
    <form method="POST">
        <label>Guidance ID:</label>
        <select name="guidance_id">
            <?php while ($row = $pending_guidance->fetch_assoc()): ?>
                <option value="<?php echo $row['id']; ?>">ID: <?php echo $row['id']; ?> - Mahasiswa: <?php echo $row['mahasiswa']; ?> - Tanggal: <?php echo $row['tanggal']; ?></option>
            <?php endwhile; ?>
        </select><br>
        <label>Feedback:</label>
        <textarea name="feedback" required></textarea><br>
        <button type="submit">Submit Feedback</button>
    </form>
</body>
</html>
