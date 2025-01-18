<?php

$databaseKonek = mysqli_connect("localhost", "root", "", "perjalanan");
if (!$databaseKonek) {
    die("Koneksi gagal: " . mysqli_connect_error());
}