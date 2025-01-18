<?php
$nik = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];

// Validasi NIK
include 'databaseKonek.php';
$query = mysqli_query($databaseKonek, "SELECT * FROM user WHERE nik='$nik' AND nama_lengkap='$nama_lengkap'");
if (mysqli_num_rows($query) == 0) { ?>
    <script>
        alert('NIK dan Nama Lengkap kamu tidak terdaftar. coba buat');
        window.location.assign("register.php");
    </script>
<?php
} else {
    session_start();
    $_SESSION['nik'] = $nik;
    $_SESSION['nama_lengkap'] = $nama_lengkap;
    header(header: 'Location: user.php');
    exit();
}
?>
