<?php
    $connect=mysqli_connect("localhost", "root", "", "modul3");
    $Mobil=$_POST['mobil'];
    $Nama=$_POST['nama'];
    $Merk=$_POST['merk'];
    $Tanggal=$_POST['date'];
    $Deskripsi=$_POST['deskripsi'];
    $Foto=$_FILES['foto']['name'];
    $Foto2=$_FILES['Foto']['tmp_name'];
    move_uploaded_file($Foto2, 'images/'.$Foto);
    $Bayar=$_POST['bayar'];
    $query=mysqli_query($connect, "INSERT INTO showroom_farez_table(id_mobil, nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('','$Mobil','$Nama','$Merk','$Tanggal','$Deskripsi','$Foto','$Bayar')");
    if($query){
        echo "<script>alert('Data telah ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=/Add_Farez.php'>";
    }else{
        echo "<script>alert('Data gagal ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=/Add-Farez.php'>";
    }
?>