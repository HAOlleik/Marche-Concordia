<?php session_start(); ?>
<!doctype html>
<html>
<head>
<!-- Fruits and Vegtables catergory page-->
    
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Fruit and Vegtable </title> 
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
              <li><a href="category1_final.php" class="deals"><?php print "WELCOME " . strtoupper($_SESSION['username']); ?></a></li>
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

                        <a href="Apple.php"> <img class = "product_img_category" src="images/img_veg_fruits/apples.png" alt = "Apple image"></a>
                        <p class="company">Local / 1 fruit (approx. 180 g)</p>
                        <a href="Apple.php"><p class="product">Apples</p></a>
                        <p class="price">approx. $1.38 / unit</p>
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

                        <a href="grapes.php"> <img class = "product_img_category" src="images/img_veg_fruits/grapes.png" alt = "Grapes image"></a>
                        <p class="company">Local / 1 bag (approx. 460 g)</p>
                        <a href="grapes.php"><p class="product">Grapes</p></a>
                        <p class="price">approx. $3.54 / unit</p>
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

                        <a href="raspberries.php"> <img class = "product_img_category" src="images/img_veg_fruits/raspberries.png" alt = "Raspberries image"></a>
                        <p class="company">Local / 170 g</p>
                        <a href="raspberries.php"><p class="product">Raspberries</p></a>
                        <p class="price">approx. $3.00 / unit</p>
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

                        <a href="onion.php"> <img class = "product_img_category" src="images/img_veg_fruits/onion.png" alt = "Onion image"></a>
                        <p class="company">Local</p>
                        <a href="onion.php"><p class="product">Onion</p></a>
                        <p class="price">approx. $4.00 / bag</p>
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

                        <a href="tomato.php"> <img class = "product_img_category" src="images/img_veg_fruits/tomato.png" alt = "Tomato image"></a>
                        <p class="company">Local</p>
                        <a href="tomato.php"><p class="product">Tomato</p></a>
                        <p class="price">approx. $1.15 / unit</p>
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

                        <a href="broccoli.php"> <img class = "product_img_category" src="images/img_veg_fruits/broccoli.png" alt = "Broccoli image"></a>
                        <p class="company">Local</p>
                        <a href="broccoli.php"><p class="product">Broccoli</p></a>
                        <p class="price">approx. $1.79 / unit</p>
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

                        <a href="iceberg.php"> <img class = "product_img_category" src="images/img_veg_fruits/iceberg.png" alt = "Iceberg image"></a>
                        <p class="company">Local</p>
                        <a href="iceberg.php"><p class="product">Iceberg</p></a>
                        <p class="price">approx. $1.38 / unit</p>
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

                        <a href="Banana.php"> <img class = "product_img_category" src="images/img_veg_fruits/banana.png" alt = "Banana image"></a>
                        <p class="company">Local</p>
                        <a href="Banana.php"><p class="product">Banana</p></a>
                        <p class="price">approx. $0.49 / unit</p>
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

                        <a href="lime.php"> <img class = "product_img_category" src="images/img_veg_fruits/lime.png" alt = "Lime image"></a>
                        <p class="company"><a href="grapes.php"></a>Local</p>
                        <a href="lime.php"><p class="product">Lime</p></a>
                        <p class="price">approx. $0.55 / unit</p>
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


