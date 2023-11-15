<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa

include 'connect.php';

if(isset($_GET['nama_mobil'])) {
    $id = $_GET['nama_mobil'];

    $sql = "DELETE FROM showroom_mobil WHERE showroom_mobil=$showroom_mobil";

    if ($conn->query($sql) === TRUE) {
        header("location: list_mobil.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid Request";
}

$conn->close();

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)

    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil

    // (4) Buatkan perkondisi jika eksekusi query berhasil

// Tutup koneksi ke database setelah selesai menggunakan database

?>