<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

// <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "modul4";
$conn = mysqli_connect("localhost", "root", "", "modul4");
?>

<?php
// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 
 
?>