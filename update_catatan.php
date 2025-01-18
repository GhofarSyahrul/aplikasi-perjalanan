<?php

include 'databaseKonek.php';
$id_catatan = $_POST['id_catatan'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];

$sql = "UPDATE catatan SET tanggal = '$tanggal', waktu = '$waktu', lokasi = '$lokasi', suhu = '$suhu' WHERE id_catatan = '$id_catatan'";

$query = mysqli_query($databaseKonek, $sql);

if ($query) {
    echo "<script>
                alert('Catatan berhasil diperbarui');
                window.location = 'user.php?url=catatan_perjalanan';
              </script>";
} else {
    // Jika gagal, tampilkan pesan error
    echo "Error: " . mysqli_error($databaseKonek);
}
?>



<!-- <?php

include 'databaseKonek.php';

// Periksa apakah ID dan data yang diperlukan ada
if (isset($_POST['id_catatan'])) {
    $id_catatan = $_POST['id_catatan'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $lokasi = $_POST['lokasi'];
    $suhu = $_POST['suhu'];

    // Query untuk memperbarui data catatan di database
    $sql = "UPDATE catatan SET tanggal = '$tanggal', waktu = '$waktu', lokasi = '$lokasi', suhu = '$suhu' WHERE id_catatan = '$id_catatan'";

    // Eksekusi query
    if (mysqli_query($databaseKonek, $sql)) {
        // Jika berhasil, arahkan kembali ke halaman utama
        echo "<script>
                alert('Catatan berhasil diperbarui');
                window.location = 'user.php?url=catatan_perjalanan';
              </script>";
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Error: " . mysqli_error($databaseKonek);
    }
} else {
    // Jika ID tidak ditemukan
    echo "ID catatan tidak ditemukan!";
    ?>
    <script>
        window.location.assign = 'user.php?url=catatan_perjalanan.php';
    </script>
    <?php
}
?> -->
