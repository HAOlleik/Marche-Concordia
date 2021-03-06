
<!doctype html>
<html>
<head>
<!-- Grocery catergory page-->
    
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Grocery </title> 
    <link rel="stylesheet" href="stylean.css">
    <script src="main.js"></script>
</head>
<body>
    <!-- start header -->
    <header>
        <div class="container">
            <div class="nav-logo">
                <a href="index.php"><img src="logo.jpg" class="nav-logo-img" alt="Store Logo" height="120" width="120"></a>
           </div>
           <br>
           <div class="store-name">
            <a href="index.php"> MARCHÉ CONCORDIA</a>
            </div>
           
        <nav class="navigation">
        <ul>
               <li>
              <a
                href="https://www.google.com/maps/place/Pavillion+Henry+F.Hall+Bldg,+Boulevard+de+Maisonneuve+O,+Montreal,+QC+H3G+1M8/@45.4973223,-73.5812175,17z/data=!3m1!4b1!4m5!3m4!1s0x4cc91a6a8799deb5:0x1ca01f129dc2ef02!8m2!3d45.4973223!4d-73.5790288"
                class="location"
                ><img
                  src="images/location.jpg"
                  class="location-img"
                  height="55"
                  width="55"
              /></a>
            </li>
            <li><a href="signIn.php" class="sign-in" ><img src="sign-in.png" class="sign-in-img" height="55" width="55"></a></a></li>
            <li><a href="yourCart.php" class="cart" ><img src="cart.png" class="cart-img" height="55" width="55"></a></li>
                
        </ul>
        </nav>
    </div>
    </header>
    
<header class="secondary-header">
    <div class="container-other">
        <nav class="navigation-other">
            <ul>
              <li><a href="category_1.php" class="deals"><?php print "WELCOME " . strtoupper($_SESSION['username']); ?></a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">CATEGORIES</button>
                        <div class="dropdown-content">
                            <a href="category1_final.php">Fruits and Vegtables</a>
                            <a href="category2_final.php">Frozen Items</a>
                            <a href="category3_final.php">Dairy Products</a>
                            <a href="category4_final.php">Grocery</a>                            </div>
                    </div>
                </li>
                <li><a href="COMING SOON.php" class="deals">DEALS</a></li>            
            </ul>
        </nav>
    </div>
</header> 
<!-- end header -->
<!-- start container -->

<div class="container">
    <!-- start row -->
    <div class="row"> 
        <div class="col-md-4">
            <div class="d-flex flex-column justify-content-left">
                <div class="product_info_category">
                    <div class="d-flex flex-column">

                        <a href="salt.php"> <img class = "product_img_category" src="images/img_grocery/grocery/salt.jpg" alt = "Salt image"></a>
                        <p class="company">Windsor / 2 kg</p>
                        <a href="salt.php"><p class="product">Household salt</p></a>
                        <p class="price">$2.99</p>
                            <div class = "button">
                            <br><br>
                            <center><a href="yourCart.php" class="btn primary">ADD TO CART</a></center>
                            <br><br>
                            </div>
                    </div>
                </div>     
            </div>
        </div>

        <div class="col-md-4">
            <div class="d-flex flex-column justify-content-left">
                <div class="product_info_category">
                    <div class="d-flex flex-column">

                        <a href="cookie.php"> <img class = "product_img_category" src="images/img_grocery/grocery/cookie.jpg" alt = "Grapes image"></a>
                        <p class="company">Chips Ahoy / 258 g</p>
                        <a href="cookie.php"><p class="product">Chips Ahoy Original</p></a>
                        <p class="price">$3.50</p>
                            <div class = "button">
                            <br><br>
                            <center><a href="yourCart.php" class="btn primary">ADD TO CART</a></center>
                            <br><br>
                            </div>
                    </div>
                </div>     
            </div>
        </div>

        <div class="col-md-4">
            <div class="d-flex flex-column justify-content-left">
                <div class="product_info_category">
                    <div class="d-flex flex-column">

                        <a href="flakes.php"> <img class = "product_img_category" src="images/img_grocery/grocery/flakes.jpg" alt = "Raspberries image"></a>
                        <p class="company">Post / 1.4 kg</p>
                        <a href="flakes.php"><p class="product">Cranberry Almond Crunch</p></a>
                        <p class="price">$7.00</p>
                            <div class = "button">
                            <br><br>
                            <center><a href="yourCart.php" class="btn primary">ADD TO CART</a></center>
                            <br><br>
                            </div>
                    </div>
                </div>     
            </div>
        </div>
           
    </div> <!-- end row -->
    <!-- start row -->
    <div class="row">
        <div class="col-md-4">
            <div class="d-flex flex-column justify-content-left">
                <div class="product_info_category">
                    <div class="d-flex flex-column">

                        <a href="chips.php"> <img class = "product_img_category" src="images/img_grocery/grocery/fritos.jpg" alt = "Onion image"></a>
                        <p class="company">Fritos / 340 g</p>
                        <a href="chips.php"><p class="product">Original Fritos</p></a>
                        <p class="price">$1.20</p>
                            <div class = "button">
                            <br><br>
                            <center><a href="yourCart.php" class="btn primary">ADD TO CART</a></center>
                            <br><br>
                            </div>
                    </div>
                </div>     
            </div>
        </div>

        <div class="col-md-4">
            <div class="d-flex flex-column justify-content-left">
                <div class="product_info_category">
                    <div class="d-flex flex-column">

                        <a href="ketchup.php"> <img class = "product_img_category" src="images/img_grocery/grocery/ketchup.jpg" alt = "Tomato image"></a>
                        <p class="company">Heinz / 836 g</p>
                        <a href="tomato.php"><p class="product">Heinz Tomato Ketchup</p></a>
                        <p class="price">$5.00</p>
                            <div class = "button">
                            <br><br>
                            <center><a href="yourCart.php" class="btn primary">ADD TO CART</a></center>
                            <br><br>
                            </div>
                    </div>
                </div>     
            </div>
        </div>

        <div class="col-md-4">
            <div class="d-flex flex-column justify-content-left">
                <div class="product_info_category">
                    <div class="d-flex flex-column">

                        <a href="oliveoil.php"> <img class = "product_img_category" src="images/img_grocery/grocery/olive-oil.jpg" alt = "Broccoli image"></a>
                        <p class="company">Maison Orphee / 836 g</p>
                        <a href="oliveoil.php"><p class="product">Extra Virgin Olive Oil</p></a>
                        <p class="price">$8.97</p>
                            <div class = "button">
                            <br><br>
                            <center><a href="yourCart.php" class="btn primary">ADD TO CART</a></center>
                            <br><br>
                            </div>
                    </div>
                </div>     
            </div>
        </div>
           
    </div> <!-- end row -->
    <!-- start row -->
    <div class="row">
        <div class="col-md-4">
            <div class="d-flex flex-column justify-content-left">
                <div class="product_info_category">
                    <div class="d-flex flex-column">

                        <a href="pasta.php"> <img class = "product_img_category" src="images/img_grocery/grocery/pasta.jpeg" alt = "Iceberg image"></a>
                        <p class="company"> Barilla / 500 g</p>
                        <a href="pasta.php"><p class="product">Penne Rigate Pasta</p></a>
                        <p class="price">$4.30</p>
                            <div class = "button">
                            <br><br>
                            <center><a href="yourCart.php" class="btn primary">ADD TO CART</a></center>
                            <br><br>
                            </div>
                    </div>
                </div>     
            </div>
        </div>

        <div class="col-md-4">
            <div class="d-flex flex-column justify-content-left">
                <div class="product_info_category">
                    <div class="d-flex flex-column">

                        <a href="peanutbutter.php"> <img class = "product_img_category" src="images/img_grocery/grocery/peanut-butter.jpg" alt = "Banana image"></a>
                        <p class="company">Kraft / 1kg</p>
                        <a href="peanutbutter.php"><p class="product">Peanut Butter</p></a>
                        <p class="price">$9.99</p>
                            <div class = "button">
                            <br><br>
                            <center><a href="yourCart.php" class="btn primary">ADD TO CART</a></center>
                            <br><br>
                            </div>
                    </div>
                </div>     
            </div>
        </div>

        <div class="col-md-4">
            <div class="d-flex flex-column justify-content-left">
                <div class="product_info_category">
                    <div class="d-flex flex-column">

                        <a href="ruffles.php"> <img class = "product_img_category" src="images/img_grocery/grocery/ruffles.jpg" alt = "Lime image"></a>
                        <p class="company"><a href="grapes.php"></a>Ruffles / 200 g</p>
                        <a href="ruffles.php"><p class="product">All-Dressed Ruffles</p></a>
                        <p class="price">$2.50</p>
                            <div class = "button">
                            <br><br>
                            <center><a href="yourCart.php" class="btn primary">ADD TO CART</a></center>
                            <br><br>
                            </div>
                    </div>
                </div>     
            </div>
        </div>
           
    </div>
    <!-- end row -->
</div>
<!--end of container-->

</body>
</html>  


