<?php
    session_start();
    if($_POST['pass']!=$_POST['repass']){
        echo "<script>alert('Ada kesalahan dalam pengisian sandi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../pages/Register-Farez.php'>";
    }else{
        $username=$_POST['user'];
        $email=$_POST['email'];
        $no_hp=$_POST['no_hp'];
        $password=$_POST['pass'];
        $koneksi=mysqli_connect("localhost:3315", "root", "", "wad_modul4_farez");
        $cek=mysqli_query($koneksi, "SELECT email FROM user_farez WHERE email='$email'");
        if(mysqli_num_rows($cek)>0){
            $row=mysqli_fetch_assoc($cek);
            $email_cek=$row['email'];
            if($email==$email_cek){
                $_SESSION['register'] = 'gagal';
                header("location:../pages/Register-Farez.php");
            }
        }else{
            $tambah=mysqli_query($koneksi, "INSERT INTO user_farez (nama, email, no_hp, password) VALUES ('$username', '$email', '$no_hp', '$password')");
            if($tambah){
                $_SESSION['register'] = 'berhasil';
                header("location:../pages/Login-Farez.php");
            }else{
                header("location:../pages/Register-Farez.php");
            }
        }
    }
?>
