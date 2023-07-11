<?php

session_start();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <ul>
                <li><h1>Admin Panel</h1></li>

                <li>
                    <div class="user">
                        <?php
                        if (isset($_SESSION['id'])) {
                        ?>
                           <a href="../login_register/logout.php" class="login">Logout</a>
                        <?php
                        }
                        ?>
                    </div>
                </li>
            </ul>
        </div>


    <div class="content">
        <div class="cards">
            <div class="card">
                <a href="../hotel_offers/insert_offer_hotel.php">Add Chilren's Homes</a>
            </div>

            <div class="card">
                <a href="../hotel_offers/insert_room_type.php">Add Companies</a>
            </div>

            <!--   
             <div class="card">
                <a href="../hotel_offers/insert_offer_hotel_services.php">Add Hotel Offers Services</a>
            </div>
         -->

            <div class="card">
                <a href="../hotel_offers/view_hotel_offers.php">View Children's Homes</a>
            </div>

            <div class="card">
                <a href="../hotel_offers/view_hotel_offer_bookings.php">View Companies</a>
            </div>

        </div>
    </div>

    </div>
</body>

</html>
