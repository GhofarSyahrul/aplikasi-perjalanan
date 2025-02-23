<div class="card">
    <div class="card-header">
        <a href="user.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                        <th>Suhu</th>
                        <th class="bg-info text-dark" style="width: 12%;>EDIT</th>
                        <!-- <th class="bg-danger text-white">HAPUS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    include 'databaseKonek.php';

                    if (isset($_SESSION['nik'])) {
                        $nik = $_SESSION['nik'];  // Dapatkan nilai NIK dari session
                    
                        // Ubah query untuk mencocokkan kolom yang sesuai
                        $sql = "SELECT * FROM catatan WHERE id_user = '$nik'";  // Sesuaikan nama kolom jika perlu
                    
                        // Cek apakah query berhasil
                        $query = mysqli_query($databaseKonek, $sql);

                        // Jika query gagal, tampilkan error
                        if (!$query) {
                            die('Query gagal: ' . mysqli_error($databaseKonek));
                        }

                        // Jika query berhasil, tampilkan data
                        foreach ($query as $value) {
                            ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $value['tanggal'] ?></td>
                                <td><?= $value['waktu'] ?></td>
                                <td><?= $value['lokasi'] ?></td>
                                <td><?= $value['suhu'] ?>℃</td>
                                <td class="">
                                    <a href="?url=edit_catatan&id_catatan=<?= $value['id_catatan']; ?>" class="btn btn-info">
                                    <i class="fa fa-pen fa-xs"></i> Edit</a>
                                    <a onclick="return confirm('Yakin ingin hapus catatan perjalanannmu?')"
                                        href="hapus_catatan.php?id_catatan= <?= $value['id_catatan']; ?>"
                                        class="btn btn-danger">
                                        <i class="fa fa-trash fa-xs"></i> Hapus</a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "Session NIK tidak ditemukan.";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>