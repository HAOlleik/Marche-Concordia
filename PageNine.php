<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Product List</title>
</head>

<body>
    <div class="nav_back">
        <a id="welcome" href="final_b.php"><?php print "Welcome " . $_SESSION['username']; ?></a>
        <a href="index.php">Home</a>
        <a href="final_b.php">Product List</a>
        <a href="p11.php">Order List</a>
        <a href="PageNine.php">User List</a>
        <a href="signout.php">Sign out</a>
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
                <td>$3.54</td>
                <td><input type="number" name="" id="one" min="0" max="20"></td>
                <td>
                    <div class="button">
                        <a href="page_8.php" class="btn primary">DELETE</a>
                        <a href="page_8.php" class="btn secondary">&nbsp&nbsp&nbspEDIT&nbsp&nbsp&nbsp</a>
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
                    <div class="button">
                        <a href="page_8.php" class="btn primary">DELETE</a>
                        <a href="page_8.php" class="btn secondary">&nbsp&nbsp&nbspEDIT&nbsp&nbsp&nbsp</a>
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
                    <div class="button">
                        <a href="page_8.php" class="btn primary">DELETE</a>
                        <a href="page_8.php" class="btn secondary">&nbsp&nbsp&nbspEDIT&nbsp&nbsp&nbsp</a>
                    </div>
                </td>

            </tr>


            </tr>
            <!-- </tbody> -->
        </table>

        <section>
            <div class="button">
                <center> <a href="#" class="btn1 adduser">ADD PRODUCTS </a></center>
            </div>
        </section>
    </div>
</body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a42f30d46c.js" crossorigin="anonymous"></script>
    <title>Back Store Users Page</title>
</head>

<body>

    <div class="nav_back">
        <a id="welcome" href="pageNine.php">
            <?php print "Welcome " . $_SESSION['username']; ?>
        </a>
        <a href="index.html">Home</a>
        <a href="final_b.html">Product List</a>
        <a href="p11.html">Order List</a>
        <a href="pageNine.html">User List</a>
        <a href="index.html">Sign out</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col-1">#</th>
                <th scope="col-2">First</th>
                <th scope="col-2">Last</th>
                <th scope="col-2">Email</th>
                <th scoper="col-2">User Id</th>
                <th scoper="col-2">Edit/Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Hussein</td>
                <td>Olleik</td>
                <td>hussein.olleik5@gmail.com</td>
                <td>00001</td>
                <td>
                    <div class="button">
                        <a href="/page_10.html" class="btn primary">DELETE</a>
                        <a href="/page_10.html" class="btn secondary">&nbsp&nbsp&nbspEDIT&nbsp&nbsp&nbsp</a>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>koko</td>
                <td>okok</td>
                <td>kokookok@yopmail.com</td>
                <td>00002</td>
                <td>
                    <div class="button">
                        <a href="/page_10.html" class="btn primary">DELETE</a>
                        <a href="/page_10.html" class="btn secondary">&nbsp&nbsp&nbspEDIT&nbsp&nbsp&nbsp</a>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>lolo</td>
                <td>olol</td>
                <td>loloolol@yopmail.com</td>
                <td>00003</td>
                <td>
                    <div class="button">
                        <a href="/page_10.html" class="btn primary">DELETE</a>
                        <a href="/page_10.html" class="btn secondary">&nbsp&nbsp&nbspEDIT&nbsp&nbsp&nbsp</a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary btn-lg" href="page_10.html">Add</a>
    </div>
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
