<?php

session_start();
$id_user = $_SESSION["nik"];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];

include'databaseKonek.php';
$sql = "INSERT INTO catatan(id_user,tanggal,waktu,lokasi,suhu) VALUES('$id_user','$tanggal','$waktu','$lokasi','$suhu')";
$query = mysqli_query($databaseKonek, $sql);

if($query){
    ?>
        <script>
            alert("Data tersimpan")
            window.location.assign('user.php');
        </script>
    <?php
} else{
    ?>
        <script>
            alert("Catatan tidak tersimpan")
            window.location.assign('user.php?url=tulis_catatan');
        </script>
    <?php
}

?>