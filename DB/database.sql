CREATE DATATABASE perjalanan;

-- TABEL CATATAN
CREATE TABLE catatan (
    id_catatan INTEGER PRIMARY KEY AUTOINCREMENT,
    id_user INTEGER(11),
    tanggal DATE,
    waktu VARCHAR(20)
    lokasi VARCHAR(100)
    suhu INTEGER(20)
):

-- TABEL USER
CREATE TABLE user (
    id_user INTEGER PRIMARY KEY AUTOINCREMENT,
    nik INTEGER(11),
    nama_lengkap VARCHAR(30),
);