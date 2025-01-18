<div class="card">
    <div class="card-header">
        <a href="user.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                 <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
        </a>
    </div>
    <div class="card-body">
        <form action="simpan_catatan.php" method="post">
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" class="form-control" name="tanggal" placeholder="pilih tanggalmu" required>
            </div>
            <div class="form-group">
                <label>Waktu perjalanan</label>
                <input type="time" class="form-control" name="waktu" placeholder="waktu perjalanan" required>
            </div>
            <div class="form-group">
                <label>Lokasi perjalanan</label>
                <input type="text" class="form-control" name="lokasi" placeholder="lokasi perjalanan" required>
            </div>
            <div class="form-group">
                <label>Suhu tubuh</label>
                <input type="number" class="form-control" name="suhu" placeholder="berapa suhu tubuhmu?" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save"></i> SIMPAN</button>
                <button type="reset" class="btn btn-danger"><i class="fa fa-trash"></i> HAPUS</button>
            </div>
        </form
    </div>