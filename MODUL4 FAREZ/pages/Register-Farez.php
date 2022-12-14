<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="eng">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'gagal') { unset($_SESSION['register']);?>
    <div class="alert alert-warning alert-dismissible" role="alert">Email Anda sudah pernah terdaftar!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>
<body>
    <div class="d-flex justify-content-center align-items-center" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="col-md-3">
            <div class="card">
                <form action="../config/register.php" method="POST">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: left;">Register</h5>
                        <hr>
                        <div class="mb-3">
                            <label class="form-label" for="email"><b>Email</b></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Alamat E-Mail" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="user"><b>Nama</b></label>
                            <input type="text" class="form-control" name="user" id="user" placeholder="Masukkan Nama Lengkap" required aria-label="Username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="no_hp"><b>Nomor Handphone</b></label>
                            <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan Nomor Handphone" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="pass"><b>Kata Sandi</b></label>
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Kata Sandi Anda" onkeyup="check()" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="repass"><b>Konfirmasi Kata Sandi</b></label>
                            <input type="password" class="form-control" name="repass" id="repass" placeholder="Konfirmasi Kata Sandi Anda" onkeyup="check()" required>
                        </div>
                        <span id='cek' style="color: green;"></span>
                        <div class="row mt-1 mb-2">
                            <div class="col-sm-3 col-md-3"></div>
                            <div class="col-sm-3 col-md-4">
                                <input class="ps-5 pe-5 btn btn-primary" type="submit" value="Daftar">
                            </div>
                        </div>
                </form>
            </div>
            <h6 class="mb-4" style="text-align: center;">Anda sudah punya akun? <a href="../pages/Login-Farez.php">Login</a></h6>
        </div>
    </div>
</body>