<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reception Operations</title>
</head>
<body>
    <h1>Connecting to Base</h1>

    <?php
        $connection = mysqli_connect('localhost', 'virtualvitani', 'Elementa08', 'Reception_operations');
    
        if($connection === false){
            die("Connection failed: ". mysqli_connect_error());
        }

        $sql = "SELECT * from Arrivals";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0) {
            $arrivals = mysqli_fetch_all($result);
            var_dump($arrivals);die();
            ?>

            <table>
                <tr>
                    <th>Calendar Date</th>
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

    <?php
            foreach ($arrivals as $arrival) {
                echo '<tr>';
                echo '<td>' . $arrival[1] . '</td>';
                echo '<td>' . $arrival[2] . '</td>';
                echo '<td>' . $arrival[3] . '</td>';
                echo '<td>' . $arrival[4] . '</td>';
                echo '<td>' . $arrival[5] . '</td>';
                echo '<td>' . $arrival[6] . '</td>';
                echo '<td>' . $arrival[7] . '</td>';
                echo '<td>' . $arrival[8] . '</td>';
                echo '<td>' . $arrival[9] . '</td>';
                echo '<td>' . $arrival[10] . '</td>';
                echo '<td>' . $arrival[11] . '</td>';
                echo '<td>' . $arrival[12] . '</td>';
                echo '</tr>';
            }
        }
    ?>
    </table>
</body>
</html>