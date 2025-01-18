<?php

$id_catatan = $_GET['id_catatan'];

include 'databaseKonek.php';
$sql = "DELETE FROM catatan WHERE id_catatan = '$id_catatan'";
$query = mysqli_query($databaseKonek, $sql);

if ($query) {
    ?>
    <script>
        alert("Catatanmu berhasil dihapus!");   
        window.location.assign ("user.php?url=catatan_perjalanan");  // Redirect ke halaman tampilCatatan.php   
    </script>
    <?php
} else {
    ?>
    <script>
        alert("Catatanmu Tidak Terhapus!");
        window.location.assign ("user.php?url=catatan_perjalanan");  // Redirect ke halaman tampilCatatan.php   
    </script>
    <?php
}
?>