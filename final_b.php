<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="final_page7.css">
    <title>Product List</title>
</head>

<body>
    <div class="nav_main">
        <a id="welcome" href="final_b.html"><?php print "Welcome " . $_SESSION['username']; ?></a>
        <a href="index.php">Home</a>
        <a href="final_b.php">Product List</a>
        <a href="p11.php">Order List</a>
        <a href="pageNine.php">User List</a>
        <a href="index.php">Sign out</a>
    </div>
    <h2>Products</h2>
        <p>To select the item you would like to modify, click on item name or in the given checkbox</p>

        <br>

        <div class="">
            <table class="table table-striped">
    
                <tr>
                    <th colspan="3">Product List</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th colspan="2">Edit / Remove</th>
                </tr>
                <tr>
                    <td><input type="checkbox" id="one" name="one"></td>
                    <td><img src="images/img_veg_fruits/grapes.png" alt="grapes" width="100" height="100"></td>
                    <td><label for="one">Grapes</label></td>
                    <td >$3.54</td>
                    <td><input type="number" name="" id="one" min="0" max="20"></td>
                    <td>
                        <div class = "button">
                            <a href="/page_8.php" class="btn primary">DELETE</a>
                           <a href="/page_8.php" class="btn secondary">&nbsp&nbsp&nbspEDIT&nbsp&nbsp&nbsp</a>
                      </div>
                    </td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="" id="two"></td>
                    <td><img src="images/img_dairy_products/dairy/cheese.jpg" alt="grapes" width="100" height="100"></td>
                    <td><label for="two">Moon Cheese</label></td>
                    <td>$10.00</td>
                    <td><input type="number" name="" id="two" min="0" max="20"></td>
                    </td>
                    <td>
                        <div class = "button">
                            <a href="/page_8.php" class="btn primary">DELETE</a>
                           <a href="/page_8.php" class="btn secondary">&nbsp&nbsp&nbspEDIT&nbsp&nbsp&nbsp</a>
                      </div>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" id="three"></td>
                    <td><img src="images/img_frozen/Frozen/ballpark-beef-patty.jpg" alt="grapes" width="100" height="100"></td>
                    <td><label for="three">Ballpark Beef Patty</label></td>
                    <td>$8.99</td>
                    <td><input type="number" name="" id="three" min="0" max="20"></td>
                    </td>
                    <td>
                         <div class = "button">
                            <a href="/page_8.php" class="btn primary">DELETE</a>
                           <a href="/page_8.php" class="btn secondary">&nbsp&nbsp&nbspEDIT&nbsp&nbsp&nbsp</a>
                      </div>
                    </td>

                </tr>
               

                </tr>
            <!-- </tbody> -->
        </table>

        <section>
            <div class = "button">
                <center> <a href="#" class="btn1 adduser">ADD PRODUCTS </a></center> 
            </div>
        </section>
</div>
</body>
