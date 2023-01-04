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
        </div>
    </nav>
    <h1><b>Order Collection</b></h1>
    <p>Order Pesanan Catering Farez - 1202204324</p>
    <?php
        $connect=mysqli_connect("localhost:3315", "root", "", "modul3");
        $query=mysqli_query($connect, "SELECT * FROM showroom_farez_table");
        foreach ($query as $tampil):?>
            <div class='row row-cols-1 row-cols-md-2 g-4'>
                <div class='col'>
                    <div class='card'>
                        <img class='card-img-top' src='/MODUL3 FAREZ REMEDIAL/images/<?php echo $tampil['foto_mobil']?>' alt='No Image'></img>
                        <div class='card-body'>
                            <h6 class='card-title'><center>
                                <b><?php echo $tampil['nama_mobil']?></b>
                                </center>
                            </h6>
                            <p class='card-text'><?php echo substr($tampil['deskripsi'], 0, 50)?>...</p>
                        </div>

                        <div class='card-footer'>
                            <a href='/MODUL3 FAREZ REMEDIAL/pages/Detail-Farez.php?id=<?php echo $tampil['id_mobil']?>' button class='btn btn' id='Details'>Detail</a>
                            <a href='/MODUL3 FAREZ REMEDIAL/config/delete.php?id=<?php echo $tampil['id_mobil']?>' button class='btn btn' id='Delete'>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="Deletetoast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Alert</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Data dihapuskan
            </div>
        </div>
    </div>
    <script>
        const toastTrigger = document.getElementById('Delete')
        const toastLiveExample = document.getElementById('Deletetoast')
        if (toastTrigger) {
            toastTrigger.addEventListener('click', () => {
                const toast = new bootstrap.Toast(toastLiveExample)
                toast.show()
            })
        }
</script>

<footer>
    <div>
        <p>List Pemesanan: <?php echo mysqli_num_rows($query) ?></p>
    </div>
</footer>


