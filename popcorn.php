<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popcorn</title>
</head>

<body>
    <h1>Popcorn Sales</h1>

    <?php
    // customer info
    $name = $_POST['name'];
    $adress = $_POST['adress'];
    $city = $_POST['city'];
    // order info quantity
    $unpop = $_POST['unpop'];
    $caramel = $_POST['caramel'];
    $nut = $_POST['nut'];
    $toff = $_POST['toffey'];
    // payement type returns the value 
    $payement = $_POST['payement'];

    /* will check to see if the input for 
    quantities is empty, sets quantity to 0*/
    if ($unpop == "") $unpop = 0;
    else $unpop = $unpop;
    if ($caramel == "") $caramel = 0;
    else $caramel = $caramel;
    if ($nut == "") $nut = 0;
    else $nut = $nut;
    if ($toff == "") $toff = 0;
    else $toff = $toff;

    // total costs per item
    $cost_unpop = $unpop * 3;
    $cost_caramel = $caramel * 3.50;
    $cost_nut = $nut * 4.50;
    $cost_toff = $toff * 5.00;
    // total price
    $total = $cost_unpop + $cost_caramel + $cost_nut + $cost_toff;
    // total items
    $items_total = $unpop + $caramel + $nut + $toff;
    ?>

    <!-- Displays the user name -->
    <h3><?php print("Order for $name"); ?></h3>

    <!-- Checkout form -->
    <div>
        <h3>Order information</h3>
        <table border="border">
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Item cost</th>
            </tr>
            <tr align="center">
                <td>Unpopped Popcorn</td>
                <td>3.00</td>
                <td><?php print("$unpop"); ?></td>
                <td><?php print("$cost_unpop"); ?></td>
            </tr>
            <tr align="center">
                <td>Caramel Popcorn</td>
                <td>3.50</td>
                <td><?php print("$caramel"); ?></td>
                <td><?php print("$cost_caramel"); ?></td>

            </tr>
            <tr align="center">
                <td>Caramel Nut Popcorn</td>
                <td>4.50</td>
                <td><?php print("$nut"); ?></td>
                <td><?php print("$cost_nut"); ?></td>
            </tr>
            <tr align="center">
                <td>Toffey Nut Popcorn</td>
                <td>5.00</td>
                <td><?php print("$toff"); ?></td>
                <td><?php print("$cost_toff"); ?></td>

            </tr>
        </table>


        <!-- Displays the total cost for each item -->
        <p><?php print("The total cost for your order is: $total$"); ?></p>
        <!-- Displays the total items ordered-->
        <p><?php print("The total items in your order is: $items_total"); ?></p>
        <!-- Displays  the value of the payement-->
        <p><?php print("Payement method: $payement "); ?></p>
    </div>
</body>

</html>