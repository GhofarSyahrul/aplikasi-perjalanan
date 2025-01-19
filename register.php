<?php include 'layouts/header.php'; ?>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-7 col-lg-12 col-md-10">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Apakah kamu belum memiliki akun? ayo buat!</h1>
                                    </div>
                                    <form class="user" method="post" action="proses_regist.php">
                                        <div class="form-group">
                                            <input type="number" name="nik" class="form-control form-control-user" placeholder="Silahkan masukan nomor nik kamu!" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="nama_lengkap" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Silahkan masukan nama lengkap kamu!" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block btn-google">
                                            Buat <i class="fa fa-spinner"></i>
                                        </button>
                                        <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                            apakah sebelumnya sudah buat akun? <i class="text-decoration-underline">masuk</i>
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

    <script>
        $(document).ready(function(){
            // Handle form submission
            $('#registerForm').on('submit', function(e){
                e.preventDefault();  // Prevent the default form submission
                
                // Get form data
                var formData = $(this).serialize();
                
                // Send data via AJAX
                $.ajax({
                    url: 'proses_regist.php',
                    type: 'POST',
                    data: formData,
                    success: function(response){
                        // Assuming response contains the success or error message
                        if (response == 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Pendaftaran Berhasil!',
                                text: 'Silakan masuk dengan NIK Anda.',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                window.location.href = 'index.php';  // Redirect to login page
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'NIK Sudah Terdaftar!',
                                text: 'Silakan ganti NIK Anda.',
                                confirmButtonText: 'OK'
                            });
                        }
                    },
                    error: function(){
                        Swal.fire({
                            icon: 'error',
                            title: 'Terjadi Kesalahan!',
                            text: 'Gagal mengirim data. Silakan coba lagi.',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>