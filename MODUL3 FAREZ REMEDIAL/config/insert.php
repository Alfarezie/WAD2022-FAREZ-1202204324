<?php
    $connect=mysqli_connect("localhost:3315", "root", "", "modul3");
    $Makanan=$_POST['makanan'];
    $Nama=$_POST['nama'];
    $Tanggal=$_POST['date'];
    $Deskripsi=$_POST['deskripsi'];
    $Foto=$_FILES['foto']['name'];
    $Foto2=$_FILES['foto']['tmp_name'];
    $Bayar=$_POST['bayar'];
    $query=mysqli_query($connect, "INSERT INTO showroom_farez_table(id_mobil, nama_mobil, pemilik_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('','$Makanan','$Nama','$Tanggal','$Foto','$Deskripsi','$Bayar')");
    if($query){
        move_uploaded_file($Foto2, '../images/'. $Foto);
        echo "<script>alert('Data telah ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=/MODUL3 FAREZ REMEDIAL/pages/Add-Farez.php'>";
    }else{
        echo "<script>alert('Data gagal ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=/MODUL3 FAREZ REMEDIAL/pages/Add-Farez.php'>";
    }
?>