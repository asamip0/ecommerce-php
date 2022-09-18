<?php
include('hesder.php');
session_start();

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>cart</title>
    <title>cart</title>
</head>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>cart</title>
    <title>cart</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>
                    My Cart
                </h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price </th>
                            <th scope="col">Quantity</th>
                            <th scope="col"></th>
                        </tr>
                        <?php

                        $total = 0;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $total = $total + $value['Price'];
                                echo "
                     <tr>
                        <td>" . ($key + 1) . "</td>
                        <td>$value[Item_Name]</td>
                        <td>$value[Price]</td>
                        <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='1'></td>
                        <td>
                        <form  action='manage_cart.php' method='POST'>
                            <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</td>
                            <input type ='hidden' name='Item_Name' value='$value[Item_Name]'>
                        </form>
                     </tr>
                      ";
                            }
                        }
                        ?>
                    </thead>
                    <tbody class="text-center">

                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Total:</h4>
                    <h5 class="text-right" id='total_value'><?php echo $total ?></h5>
                    <div class="form-check">
                        <form method="POST" action="s.php">
                            <input type="hidden" name="total" value="<? echo $total ?>">
                            <button class="btn btn-primary btn-block" id="payment-button"> Make purchase</button>


                        </form>
                        </form>
                    </div>
                </div>
            </div>

            <body>

            </body>

</html>