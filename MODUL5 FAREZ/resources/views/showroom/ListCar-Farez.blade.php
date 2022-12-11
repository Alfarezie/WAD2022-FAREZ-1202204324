<?php use App\Models\Showroom; ?>
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
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/Showroom">MyCar</a></li>
            </ul>
        </div>
    </nav>
    <h1><b>My Show Room</b></h1>
    <p>List Show Room Farez - 1202204324</p>
        @foreach($showrooms as $showroom)
            <div class='row row-cols-1 row-cols-md-2 g-4'>
                <div class='col'>
                    <div class='card'>
                        <img class='card-img-top' src='/image/{{$showroom->image}}' alt='No Image'></img>
                        <div class='card-body'>
                            <h6 class='card-title'><center>
                                <b>{{$showroom->name}}</b>
                                </center>
                            </h6>
                            <p class='card-text'>{{$showroom->description}}</p>
                        </div>

                        <div class='card-footer'>
                            <a href='../pages/Detail-Farez.php' button class='btn btn' id='Details'>Detail</a>
                            <a href='../config/delete.php' button class='btn btn' id='Delete'>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach

<footer>
    <div>
        <p>List Mobil: <?php echo (Showroom::all()->count()) ?></p>
    </div>
</footer>


