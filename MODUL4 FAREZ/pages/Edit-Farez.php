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
<body>
<?php
    $koneksi=mysqli_connect("localhost:3315", "root", "", "modul3");
    $id=$_GET['id'];
    $read=mysqli_query($koneksi, "SELECT * FROM showroom_farez_table WHERE id_mobil=$id");
    $pilih=mysqli_fetch_array($read);
?>
<div class="col-6">
    <form action="../config/edit.php?id=<?php echo $pilih['id_mobil']?>" method="post" enctype='multipart/form-data'>
    <label for="">Nama Mobil</label>
    <input type="text" class="form-control" value="<?php echo $pilih['nama_mobil']?>" name="mobil">

    <label class="mt-2" for="">Nama Pemilik</label>
    <input type="text" class="form-control" name="nama" value="<?php echo $pilih['pemilik_mobil']?>">

    <label class="mt-2" for="">Merk</label>
    <input type="text" class="form-control" name="merk" value="<?php echo $pilih['merk_mobil']?>">

    <label class="mt-2" for="">Tanggal Beli</label>
    <input type="date" class="form-control" name="date" value="<?php echo $pilih['tanggal_beli']?>">

    <label class="mt-2" for="">Deskripsi</label>
    <input type="text" class="form-control" name="deskripsi" value="<?php echo $pilih['deskripsi']?>">

    <label class="mt-2" for="">Foto</label>
    <input type="file" class="form-control" name="foto" value="<?php echo $pilih['foto_mobil']?>">

<div class="mb-3">
    <label for="Status_Pembayaran"><b>Status Pembayaran</b></label>
    <div class="mb-3">
        <input type="radio" name="bayar" id="bayar" value="Lunas" <?php echo $pilih['status_pembayaran']?>>
        <label for="Lunas">Lunas</label>
        <input type="radio" name="bayar" id="bayar" value="Belum Lunas" <?php echo $pilih['status_pembayaran']?>>
        <label for="Belum Lunas">Belum Lunas</label> 
    </div>
</div>
<button type="submit" class="btn btn-primary w-100">Simpan</button>
    </form>
</div>
</body>