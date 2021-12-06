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

    <form action="popcorn.php" method="post">
        <table border="border">
            <tr>
                <th>Buyers Name</th>
                <th>Street Adress</th>
                <th>City, zip, state</th>
            </tr>
            <tr>
                <!-- names are name, adress, city -->
                <td><input type="text" placeholder="Enter name" name="name"></td>
                <td><input type="text" placeholder="Enter Adress" name="adress"></td>
                <td><input type="text" placeholder="Enter City, zip, state" name="city"></td>
            </tr>
        </table>


        <div>
            <h2>Product list</h2>
            <table border="border">
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
                <!-- names are unpop, caramel, nut toffey -->
                <tr>
                    <td>Unpopped Popcorn (1 lb.)</td>
                    <td>3.00</td>
                    <td><input type="text" placeholder="Enter quantity" name="unpop"></td>
                </tr>
                <tr>
                    <td>Caramel Popcorn (2 lb. canister) </td>
                    <td>3.50</td>
                    <td><input type="text" placeholder="Enter quantity" name="caramel"></td>
                </tr>
                <tr>
                    <td>Caramel Nut Popcorn (2 lb. canister)</td>
                    <td>4.50</td>
                    <td><input type="text" placeholder="Enter quantity" name="nut"></td>
                </tr>
                <tr>
                    <td>Toffey Nut Popcorn (2 lb. canister)</td>
                    <td>5.00</td>
                    <td><input type="text" placeholder="Enter quantity" name="toffey"></td>
                </tr>
            </table>
        </div>

        <div>
            <!-- names are payment -->
            <h2>Payment method</h2>
            <!-- The label tag links with the id of the input -->
            <label for="visa">Visa</label>
            <input type="radio" name="payement" id="visa" value="visa">
            <br>

            <label for="master">MasterCard</label>
            <input type="radio" name="payement" id="master" value="MasterCard">
            <br>

            <label for="discover">Discover</label>
            <input type="radio" name="payement" id="discover" value="Discover">
            <br>

            <label for="check">Check</label>
            <input type="radio" name="payement" id="check" value="Check">
            <br>
            <br>

            <!-- Submit and reset buttons -->
            <!-- names are submit  reset-->
            <input type="submit" value="submit" name="submit">
            <input type="reset" value="reset" name="reset">

        </div>
    </form>
</body>

</html>