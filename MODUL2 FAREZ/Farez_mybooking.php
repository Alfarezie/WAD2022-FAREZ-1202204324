<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity=""></script>
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
                <a class="nav-link" href="Farez_booking.php">Booking</a>
            </ul>
            </div>
        </div>
        </nav>
        <div class="container-fluid">
            <h3 class="text-center mt-3">Thank You FAREZ_1202204324 for Reserving</h2>
            <h5 class="text-center">Please double check your reservation details</h4>
            <table class="table">
            <thead>
                <tr>
                <th>Booking Number</th>
                <th>Name</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Car Type</th>
                <th>Phone Number</th>
                <th>Service(s)</th>
                <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                if (isset($_POST["nama"])) {
                echo "<tr>";
                echo '<th scope="row">'.rand(0,3734732).'</th>';
                echo '<td>'.$_POST["nama"].'</td>';
                echo '<td>'.$_POST["date"].' '.$_POST['mulai'].'</td>';
                echo '<td>'.date("Y-m-d",strtotime($_POST['date']."+ ".$_POST['hari']." Days")).' '.$_POST['mulai'].'</td>';
                echo '<td>'.$_POST["mobil"].'</td>';
                echo '<td>'.$_POST["hp"].'</td>';
                echo '<td> <ul>';
                foreach ($_POST["choice"] as $service) {
                    switch ($service) {
                        case "25000":
                            echo '<li>Health Protocol</li>';
                            break;
                        case "100000":
                            echo '<li>Driver</li>';
                            break;
                        case "250000":
                            echo '<li>Fuel Filled</li>';
                            break;
                        default:
                            echo "";
                    }
                }
                echo '</ul> </td>';
                echo '<td>';
                switch ($_POST["mobil"]) {
                    case "Suzuki XL7":
                        $hrg = 315000 * (int)$_POST["hari"];
                        foreach ($_POST["choice"] as $service) {
                            $hrg += (int)$service;
                        }
                        echo $hrg."</td>";
                        break;
                    case "Suzuki Baleno":
                        $hrg = 150000 * (int)$_POST["hari"];
                        foreach ($_POST["choice"] as $service) {
                            $hrg += (int)$service;
                        }
                        echo $hrg."</td>";
                        break;
                    case "Toyota Corolla Cross Hybrid":
                        $hrg = 250000 * (int)$_POST["hari"];
                        foreach ($_POST["choice"] as $service) {
                            $hrg += (int)$service;
                        }
                        echo $hrg."</td>";
                        break;
                    default :
                        echo "";
                }
                } else {
                    echo "<td colspan='8'>no service</td>";
                }
            ?>  
            </tbody>
            </table>
        </div>
        <footer
            class="text-center m-2 mt-2">Created by : FAREZ_1202204324
        </footer>
</body>