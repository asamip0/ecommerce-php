<?php

include('hesder.php');
session_start();

$items = [
    ["Red Apple", 20, "images/10.jpg"],
    ["Air Pods", 30, "images/11.jpg"],
    ["Khalti", 50, "images/13.png"]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <div>
        <!-- <div class="container mt-5">
            <div class="row"> -->

        <!-- <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                        <div class="card">
                            <img src="images/10.jpg" class="card-img-top">
                            <div class="card-body text-center">
                                <h5 class="card-title">Red Apple</h5>
                                <p class="card-text">Price Rs.20</p>
                                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                                <input type="hidden" name="Item_Name" value="Red Apple">
                                <input type="hidden" name="Price" value="20 ">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                        <div class="card">
                            <img src="images/11.jpeg" class="card-img-top">
                            <div class="card-body text-center">
                                <h5 class="card-title">airpods</h5>
                                <p class="card-text">Price Rs.30</p>
                                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                                <input type="hidden" name="Item_Name" value="Airpods">
                                <input type="hidden" name="Price" value="30 ">
                            </div>
                        </div>

                    </form>
                    </form>
                </div> -->
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">

                <div class="card">
                    <img src="images/13.png" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Khalti</h5>
                        <p class="card-text">Price Rs.50</p>
                        <?php echo show_cart_button("Khalti"); ?>
                        <input type="hidden" name="Item_Name" value="Khalti">
                        <input type="hidden" name="Price" value="50 ">
                    </div>

                </div>
            </form>
        </div>

    </div>

    </div>
</body>

</html>