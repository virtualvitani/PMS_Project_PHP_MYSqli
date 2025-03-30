<?php

$connection = mysqli_connect('localhost', 'virtualvitani', 'Elementa08', 'Reception_operations');
    
if($connection === false){
    die("Connection failed: ". mysqli_connect_error());
}

$sql = "SELECT * from Arrivals";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) === 0) {
    die("There are no arrivals in our database!");
}

$arrivals = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reception Operations</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <div class="page-wrapper d-flex h-100">
    <aside class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Sidebar</span>
        </a>

    <hr>

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
            Home
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            Dashboard
            </a>
        </li>
    </ul>

    <hr>

    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://avatars.githubusercontent.com/u/54596779?v=4" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Virtual_Vitani</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">Create Reservation</a></li>
            <li><a class="dropdown-item" href="#">Reservation Update</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
    </aside>

    <div class="content flex-grow-1">
        <header class="p-3 text-bg-dark">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="text-end">
                        <button type="button" class="btn btn-outline-light me-2">Login</button>
                        <button type="button" class="btn btn-warning">Sign-up</button>
                    </div>
                </div>
            </div>
        </header>

    <div class="container my-5">
    <h1>Arrivals</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Arrival Date</th>
                <th>Reservation Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Room Type</th>
                <th>Room</th>
                <th>Guests</th>
                <th>Departure Date</th>
                <th>Agency</th>
                <th>Note</th>
                <th>Package</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arrivals as $arrival): ?>
                <tr>
                    <td><?= $arrival['id'] ?></td>
                    <td><?= $arrival['calendar_date'] ?></td>
                    <td><?= $arrival['reservation_number'] ?></td>
                    <td><?= $arrival['first_name'] ?></td>
                    <td><?= $arrival['last_name'] ?></td>
                    <td><?= $arrival['room_type'] ?></td>
                    <td><?= $arrival['room'] ?></td>
                    <td><?= $arrival['guests'] ?></td>
                    <td><?= $arrival['departure_date'] ?></td>
                    <td><?= $arrival['agency'] ?></td>
                    <td><?= $arrival['note'] ?></td>
                    <td><?= $arrival['package'] ?></td>
                    <td><?= $arrival['price'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    </div>

    <footer class="py-3 text-bg-dark">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">FAQ</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>
        <p class="text-center text-white"> @2024 Company, Inc</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    </body>
</html>