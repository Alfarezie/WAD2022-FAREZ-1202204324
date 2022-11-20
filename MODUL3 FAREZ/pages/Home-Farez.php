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
    <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/MODUL3 FAREZ/Home-Farez.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/MODUL3 FAREZ/ListCar-Farez.php">MyCar</a></li>
        </ul>
    </nav>
    <div class="row mx-auto w-75 p-3 mt-2">
        <div class="col-6 text-justify">
            <h1><b>Selamat Datang Di Show Room Farez</b></h1>
            <p>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus</p>
            <?php
                $connect=mysqli_connect("localhost", "root", "", "modul3");
                $query=mysqli_query($connect, "SELECT * FROM showroom_farez_table");
                echo '<a class="btn btn-primary" href="/MODUL3 FAREZ/pages/Add-Farez.php">MyCar</a>';
            ?>
        </div>
        <div class="col">
            <img src="https://www.jeep-id.com/content/dam/cross-regional/asean/jeep/common/bhp/lineup/drive_forward/2021_Wrangler_Rubicon_Sting_Gray.jpg.img.500.jpg"></img>
        </div>
    <div class="row">
        <div class="col-6">
            <img src="/MODUL3 FAREZ/logo-ead.png" style="width:100px;height:30px;float:left"></img>
            <p>Farez_1202204324</p>
        </div>
    </div>