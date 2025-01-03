<?php
// mahasiswa/schedule_guidance.php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'mahasiswa') {
    header('Location: ../index.php');
    exit;
}
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dosen_id = $_POST['dosen_id'];
    $tanggal = $_POST['tanggal'];

    $sql = "INSERT INTO jadwal_bimbingan (mahasiswa_id, dosen_id, tanggal, status) VALUES (?, ?, ?, 'Pending')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('iis', $_SESSION['user_id'], $dosen_id, $tanggal);
    $stmt->execute();
    $stmt->close();
    echo "<p>Guidance scheduled successfully!</p>";
}

$dosen_list = $conn->query("SELECT id, username FROM users WHERE role = 'dosen'");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Schedule Guidance</title>
</head>
<body>
    <h1>Schedule Guidance</h1>
    <a href="dashboard.php">Back to Dashboard</a>
    <form method="POST">
        <label>Dosen:</label>
        <select name="dosen_id">
            <?php while ($row = $dosen_list->fetch_assoc()): ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['username']; ?></option>
            <?php endwhile; ?>
        </select><br>
        <label>Date:</label>
        <input type="date" name="tanggal" required><br>
        <button type="submit">Schedule</button>
    </form>
</body>
</html>