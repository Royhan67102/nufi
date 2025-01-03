<?php
include 'connection.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form login
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validasi input
    if (empty($username) || empty($password)) {
        echo "<script>alert('Username dan Password harus diisi!'); window.location.href='index.php';</script>";
        exit;
    }

    // Query untuk mendapatkan user berdasarkan username
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Periksa apakah user ditemukan
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verifikasi password
        $hashed_password = md5($password);
        
        // Debugging: Tampilkan password yang di-hash dan password dari database
        echo "Password yang di-hash: " . $hashed_password . "<br>";
        echo "Password dari database: " . $user['password'] . "<br>";

        if ($hashed_password === $user['password']) {
            // Password benar, set session
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $user['role'];

            // Redirect berdasarkan role
            if ($user['role'] === 'admin') {
                header("Location: /naga/naggggga/admin/dashboard.php");
            } elseif ($user['role'] === 'dosen') {
                header("Location: /naga/naggggga/dosen/dashboard.php");
            } else {
                header("Location: /naga/naggggga/mahasiswa/dashboard.php");
            }
            exit;
        } else {
            echo "<script>alert('Password salah!'); window.location.href='index.php';</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan!'); window.location.href='index.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>