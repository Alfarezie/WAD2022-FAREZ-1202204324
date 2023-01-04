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
<div class="col-6">
    <form action="/MODUL3 FAREZ REMEDIAL/config/insert.php" method="post" enctype="multipart/form-data">
    <label for="">Nama Makanan</label>
    <input type="text" class="form-control" name="makanan">

    <label class="mt-2" for="">Nama Pemesan</label>
    <input type="text" class="form-control form-control-readonly" readonly value="FAREZ - 1202204324" name="nama">

    <label class="mt-2" for="">Tanggal Beli</label>
    <input type="date" class="form-control" name="date">

    <label class="mt-2" for="">Foto</label>
    <input type="file" class="form-control" name="foto">

    <label class="mt-2" for="">Deskripsi</label>
    <input type="text" class="form-control" name="deskripsi">

<div class="mb-3">
    <label for="Status_Pembayaran"><b>Status Pembayaran</b></label>
    <div class="mb-3">
        <input type="radio" name="bayar" id="bayar" value="Lunas">
        <label for="Lunas">Lunas</label>
        <input type="radio" name="bayar" id="bayar" value="Belum Lunas">
        <label for="Belum Lunas">Belum Lunas</label>
    </div>
</div>
<button type="submit" class="btn btn-primary w-100">Selesai</button>
    </form>
</div>
