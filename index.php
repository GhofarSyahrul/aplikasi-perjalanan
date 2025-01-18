<?php include 'layouts/header.php'; ?>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Hai! selamat datang, Silahkan masukan Nik dan
                                            Nama kamu</h1>
                                    </div>
                                    <form class="user" method="post" action="auth_login.php">
                                        <div class="form-group">
                                            <input type="text" name="nik" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Silahkan masukan nomor nik kamu!" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="nama_lengkap"
                                                class="form-control form-control-user" id="exampleInputPassword"
                                                placeholder="Silahkan masukan nama lengkap kamu!" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Masuk
                                        </button>
                                        <a href="register.php" class="btn btn-facebook btn-user btn-block">
                                            Belum buat akun? ayo buat <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <?php include 'layouts/footer.php'; ?>
</body>

</html>