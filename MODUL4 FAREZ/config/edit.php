<?php
    $connect=mysqli_connect("localhost:3315", "root", "", "modul3");
    $id=$_GET['id'];
    $Mobil=$_POST['mobil'];
    $Nama=$_POST['nama'];
    $Merk=$_POST['merk'];
    $Tanggal=$_POST['date'];
    $Deskripsi=$_POST['deskripsi'];
    $Foto=$_FILES['foto']['name'];
    $Foto2=$_FILES['foto']['tmp_name'];
    $Bayar=$_POST['bayar'];
    $query=mysqli_query($connect, "UPDATE showroom_farez_table SET nama_mobil='$Mobil', pemilik_mobil='$Nama', merk_mobil='$Merk', tanggal_beli='$Tanggal', deskripsi='$Deskripsi', foto_mobil='$Foto', status_pembayaran='$Bayar' WHERE id_mobil='$id'");
    if($query){
        header("location:../pages/ListCar-Farez.php");
    }
?>