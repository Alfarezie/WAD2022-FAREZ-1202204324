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
            <li class="nav-item"><a class="nav-link" href="/MODUL3 FAREZ REMEDIAL/pages/Home-Farez.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/MODUL3 FAREZ REMEDIAL/pages/Order-Farez.php">My Order</a></li>
        </ul>
    </nav>
    <div class="row mx-auto w-75 p-3 mt-2">
        <div class="col-6 text-justify">
            <h1><b>Selamat Datang Di Catering All Food Indonesia Raya</b></h1>
            <p>Dimana makanan apapun yang anda cara dan inginkan pasti tersedia di catering ini</p>
            <?php
                $connect=mysqli_connect("localhost:3315", "root", "", "modul3");
                $query=mysqli_query($connect, "SELECT * FROM showroom_farez_table");
                echo '<a class="btn btn-primary" href="/MODUL3 FAREZ REMEDIAL/pages/Add-Farez.php">My Order</a>';
            ?>
        </div>
        <div class="col">
            <img style="width: 350px; height: 250px;" src="https://cdn0-production-images-kly.akamaized.net/kutsJcqqYV0-9pDI3l6YEl2v7xQ=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1367799/original/048059200_1475843806-Masakan_Indonesia.jpg"></img>
        </div>
        <br></br>
        <br></br>
</body>
<footer> 
    <img src="/MODUL3 FAREZ REMEDIAL/logo-ead.png" style="width:100px;height:30px;float:left"></img>
    <p>Farez_1202204324</p>
</footer>