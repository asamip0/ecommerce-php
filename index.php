<?php

include('hesder.php');
session_start();

$api_items = [
    ['id' => 1, 'item' => "Red Apple", 'price' => 20, 'image' => "images/10.jpg"],
    ['id' => 2, 'item' => "Air Pods", 'price' => 30, 'image' => "images/11.jpeg"],
    ['id' => 3, 'item' => "Khalti", 'price' => 50, 'image' => "images/13.png"],
    // ['id' => 4, 'item' => "China", 'price' => 50, 'image' => "images/13.png"]
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
        <div class="container mt-5">
            <div class="row">
                <?php
                foreach ($api_items as $item) {
                    echo '<div class="col-lg-3">';
                    echo '<form action="manage_cart.php" method="POST">';
                    echo '<div class="card">
                            <img src="' . $item['image'] . '" class="card-img-top">
                            <div class="card-body text-center">
                            <h5 class="card-title">' . $item['item'] . '</h5>
                            <p class="card-text">' . $item['price'] . '</p>
                             ' . show_cart_button($item['item']) . '
                            <input type="hidden" name="Item_Name" value="' . $item['item'] . '">
                            <input type="hidden" name="Price" value="' . $item['price'] . '">
                            </div>
                            </div>';
                    echo '</form>
                            </div>';
                }
                ?>

            </div>

        </div>
</body>

</html>