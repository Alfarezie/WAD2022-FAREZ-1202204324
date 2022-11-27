<?php
    $connect=mysqli_connect("localhost:3315", "root", "", "modul3");
    $Id=$_GET['id'];
    $hapus="DELETE FROM showroom_farez_table WHERE id_mobil = $Id";
    if(mysqli_query($connect,$hapus)){
        header("Location:../pages/ListCar-Farez.php");
    }
?>