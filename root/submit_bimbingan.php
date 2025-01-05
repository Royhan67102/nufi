<?php
// Koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$database = "database_name";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$dosen = $_POST['dosen'];

// Query untuk menyimpan data
$sql = "INSERT INTO jadwal_bimbingan (nama, nim, judul, tanggal, jam, dosen) VALUES ('$nama', '$nim', '$judul', '$tanggal', '$jam', '$dosen')";

if ($conn->query($sql) === TRUE) {
    header("Location: jadwal_bimbingan.php"); // Mengarahkan ke halaman jadwal bimbingan
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
