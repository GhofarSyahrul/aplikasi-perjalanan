<?php

$nik = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];

// Validasi NIK

include'databaseKonek.php';
$query_validasi = "SELECT*FROM user WHERE nik = '$nik'";
$query = mysqli_query($databaseKonek, $query_validasi);

if (mysqli_num_rows($query)==0) {
    $query_register = mysqli_query($databaseKonek, "INSERT INTO user(nik, nama_lengkap) VALUES ('$nik', '$nama_lengkap')");
    if($query_register){
        ?>
            <script>
                alert("Data berhasil dibuat, silahkan masuk")
                window.location.assign('index.php');
            </script>
        <?php
    }
}else {
    ?>
            <script>
                alert("NIK sudah pernah dibuat, silahkan ganti nik")
                window.location.assign('register.php');
            </script>
        <?php
}