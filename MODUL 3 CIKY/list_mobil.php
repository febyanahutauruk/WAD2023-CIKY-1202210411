a<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)

            
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->

            include 'connect.php';
            
            $sql = "SELECT * FROM showroom_mobil";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "nama_mobil: " . $row["nama_mobil"]. " - brand_mobil: " . $row["brand_mobil"]. " - warna_mobil: " . $row["warna_mobil"]. "- tipe_mobil: " . $row["tipe_mobil"]. " - harga_mobil: " . $row["harga_mobil"] . "<a href='form_detail_mobil.php?id=" .$row['id'] . ">link</a><br>";
                }
            } else {
                echo "0 results";
            }
            
            $conn->close();
            




            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            
                       
            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>


