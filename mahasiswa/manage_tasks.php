<?php
// mahasiswa/manage_tasks.php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'mahasiswa') {
    header('Location: ../index.php');
    exit;
}
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = $_POST['task'];
    $deadline = $_POST['deadline'];

    $sql = "INSERT INTO tasks (mahasiswa_id, task, deadline) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('iss', $_SESSION['user_id'], $task, $deadline);
    $stmt->execute();
    $stmt->close();
    echo "<p>Task added successfully!</p>";
}

$tasks = $conn->query("SELECT id, task, deadline FROM tasks WHERE mahasiswa_id = " . $_SESSION['user_id']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Tasks</title>
</head>
<body>
    <h1>Manage Tasks</h1>
    <a href="dashboard.php">Back to Dashboard</a>
    <form method="POST">
        <label>Task:</label>
        <input type="text" name="task" required><br>
        <label>Deadline:</label>
        <input type="date" name="deadline" required><br>
        <button type="submit">Add Task</button>
    </form>
    <h2>Your Tasks</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Task</th>
            <th>Deadline</th>
        </tr>
        <?php while ($row = $tasks->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['task']; ?></td>
            <td><?php echo $row['deadline']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>