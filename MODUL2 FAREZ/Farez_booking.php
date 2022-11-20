<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity=""></script>
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" >
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav m-auto">
                <a class="nav-link" aria-current="page" href="Farez_home.php">Home</a>
                <a class="nav-link active" href="Farez_booking.php">Booking</a>
            </ul>
            </div>
        </div>
        </nav>
        <div>
        <h5 class="text-center p-2 m-2 w-75 mt-2 m-auto">Rent Your Car NOW!</h5>
            <div class="row mx-auto w-75 p-3 mt-2">
                <div class="col-6 text-center">
                    <?php
                    if (isset($_GET["nomor"]) ) {
                        if ($_GET["nomor"] == "1") {
                            echo '<img src="https://d2fgf7u961ce77.cloudfront.net/uploads/automobile/xl7_thumb2.png" class="w-75">';
                        } elseif ($_GET["nomor"] == "2") {
                            echo '<img src="https://d2fgf7u961ce77.cloudfront.net/uploads/automobile/baleno-thumb.png" class="w-75">';
                        } elseif ($_GET["nomor"] == "3"){
                            echo '<img src="https://www.toyota.astra.co.id/sites/default/files/2021-11/corolla-cross-hybrid.png" class="w-75">';
                        }          
                    } else {
                        echo '<img src="https://d2fgf7u961ce77.cloudfront.net/uploads/automobile/xl7_thumb2.png" class="w-75">';
                    };
                    ?>         
                </div>
                <div class="col-6">
                    <form action="Farez_mybooking.php" method="post">
                    <label for="">Name</label>
                    <input type="text" class="form-control form-control-readonly" readonly value="FAREZ_1202204324" name="nama">

                    <label class="mt-2" for="">Book Date</label>
                    <input type="date" class="form-control" name="date">

                    <label class="mt-2" for="">Start Time</label>
                    <input type="time" class="form-control" name="mulai">

                    <label class="mt-2" for="">Duration (Days)</label>
                    <input type="number" class="form-control" name="hari">

                    <label class="mt-2" for="">Car Type</label>
                    <select name="mobil" id="" class="form-select">
                        <option value="Suzuki XL7">Suzuki XL7</option>
                        <option value="Suzuki Baleno">Suzuki Baleno</option>
                        <option value="Toyota Corolla Cross Hybrid">Toyota Corolla Cross Hybrid</option>
                    </select>
                    <label class="mt-2" for="">Phone Number</label>
                    <input type="number" class="form-control " name="hp">

                    <label class="mt-2" for="">Add Service(s)</label>
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox" value="25000" id="" name="choice[]">
                        <label class="form-check-label" for="">
                            Health Protocol / Rp.25000
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input " type="checkbox" value="100000" id="" name="choice[]">
                        <label class="form-check-label" for="">
                            Driver / Rp.100000
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox" value="250000" id="" name="choice[]">
                        <label class="form-check-label" for="">
                            Fuel Filled / Rp.250000
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Book</button>
                    </form>
                </div>
            </div>
        </div>
        <footer 
            class="text-center m-2 mt-2">Created by : FAREZ_1202204324
        </footer>
</body>