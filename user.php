<?php
session_start();
if (empty($_SESSION['nik'])) {
    ?>
    <script>
        window.location.assign('index.php');
    </script>
    <?php
} ?>

<?php include 'layouts/header.php'; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include 'layouts/sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <div class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <h1 class="h2 mb-8 text-dark">Catatan perjalananmu</h1>
                </div>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="mb-4 text-gray-800">
                        <?php
                        $url = @$_GET['url'];
                        if (!empty($url)) {
                            switch ($url) {
                                case 'tulis_catatan':
                                    include 'tulis_catatan.php';
                                    break;

                                case 'catatan_perjalanan':
                                    include 'catatan_perjalanan.php';
                                    break;

                                case 'edit_catatan':
                                    include 'edit_catatan.php';
                                    break;

                                default:
                                    echo 'Halaman Tidak Ditemukan';
                                    break;
                            }
                        } else {
                            echo '<h4>Halo! selamat datang di catatan perjalanan, web ini digunakan untuk mencatat riwayat perjalananmu dengan mudah <br></h4>';
                            echo 'Anda Login Sebagai : ' . $_SESSION["nama_lengkap"];
                        }
                        ?>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <?php include 'layouts/content/end-footer.php'; ?>
        </div>
        <!-- End of Content Wrapper -->

<?php include 'layouts/footer.php'; ?>