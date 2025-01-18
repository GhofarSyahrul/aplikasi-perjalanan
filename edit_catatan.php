<?php

// Koneksi database
include 'databaseKonek.php';


$id_catatan = $_GET['id_catatan'];
$sql = "SELECT * FROM catatan WHERE id_catatan='$id_catatan'";
$query = mysqli_query($databaseKonek, $sql);
$value = mysqli_fetch_array($query);


?>

<div class="card">
    <div class="card-header">
        <a href="?url=catatan_perjalanan" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                 <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
        </a>
    </div>
    <div class="card-body">
        <form action="update_catatan.php" method="post">
            <input type="hidden" name="id_catatan" value="<?= $id_catatan ?>">
            <div class="form-group">
                <label>Tanggal</label>
                <input value="<?= $value['tanggal'] ?>" type="date" class="form-control" name="tanggal" placeholder="pilih tanggalmu" required>
            </div>
            <div class="form-group">
                <label>Waktu perjalanan</label>
                <input value="<?= $value['waktu'] ?>" type="time" class="form-control" name="waktu" placeholder="waktu perjalanan" required>
            </div>
            <div class="form-group">
                <label>Lokasi perjalanan</label>
                <input value="<?= $value['lokasi'] ?>" type="text" class="form-control" name="lokasi" placeholder="lokasi perjalanan" required>
            </div>
            <div class="form-group">
                <label>Suhu tubuh</label>
                <input value="<?= $value['suhu'] ?>" type="number" class="form-control" name="suhu" placeholder="berapa suhu tubuhmu?" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    
                    <i class="fa fa-save fa-sm"></i> SIMPAN</button>
                <button type="reset" class="btn btn-danger"><i class="fa fa-trash fa-sm"></i> HAPUS</button>
            </div>
        </form
    </div>