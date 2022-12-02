<?php
if (!isset($_SESSION)) {
    session_start();
}
$koneksi=mysqli_connect("localhost:3315", "root", "", "wad_modul4_farez");
$email = $_POST['email'];
$password = $_POST['pass'];

$cek=mysqli_query($koneksi, "SELECT * FROM user_farez WHERE email='$email'");

if (mysqli_num_rows($cek) > 0) {
    $result = mysqli_fetch_assoc($cek);
    $password_cek=$result['password'];
    if ($password == $password_cek) {
        $_SESSION['email'] = $result['email'];
        $_SESSION['message'] = 'Anda berhasil login !';
        header('location:../pages/Home-Farez.php');
        exit();
    } else {
    $_SESSION['message-error'] = 'Password Anda salah, silahkan coba lagi !';
    header('location:../pages/Login-Farez.php');
    exit();
    }
}
$_SESSION['message-error'] = 'Gagal Login';
header('location:../pages/Login-Farez.php');
exit();
?>

