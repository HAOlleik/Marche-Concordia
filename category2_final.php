<?php session_start(); ?>
<!-- Frozen Items catergory page-->
    
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Frozen Items </title> 
    <link rel="stylesheet" href="stylean.css">
    <script src="main.js"></script>
</head>
<body>
    <!-- start header -->
    <header>
        <div class="container">
            <div class="nav-logo">
                <a href="index.html"><img src="logo.jpg" class="nav-logo-img" alt="Store Logo" height="120" width="120"></a>
           </div>
           <br>
           <div class="store-name">
            <a href="index.html"> MARCHÉ CONCORDIA</a>
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
            <li><a href="signIn.html" class="sign-in" ><img src="sign-in.png" class="sign-in-img" height="55" width="55"></a></a></li>
            <li><a href="yourCart.html" class="cart" ><img src="cart.png" class="cart-img" height="55" width="55"></a></li>
                
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
                            <a href="category1_final.html">Fruits and Vegtables</a>
                            <a href="category2_final.html">Frozen Items</a>
                            <a href="category3_final.html">Dairy Products</a>
                            <a href="category4_final.html">Grocery</a>                            </div>
                    </div>
                </li>
                <li><a href="COMING SOON.html" class="deals">DEALS</a></li>            
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

                        <a href="beefpatty.html"> <img class = "product_img_category" src="images/img_frozen/Frozen/ballpark-beef-patty.jpg" alt = "Beef Patty image"></a>
                        <p class="company">Ball Park / 510g</p>
                        <a href="beefpatty.html"><p class="product">Beef Patty</p></a>
                        <p class="price">$8.99</p>
                            <div class = "button">
                            <br><br>
                            <center><a href="yourCart.html" class="btn primary">ADD TO CART</a></center>
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

                        <a href="fishsticks.html"> <img class = "product_img_category" src="images/img_frozen/Frozen/fish-sticks.jpeg" alt = "fish-sticks image"></a>
                        <p class="company">Gorton's / 323g)</p>
                        <a href="fishsticks.html"><p class="product">Fish Sticks</p></a>
                        <p class="price">$7.00</p>
                            <div class = "button">
                            <br><br>
                            <center><a href="yourCart.html" class="btn primary">ADD TO CART</a></center>
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

                        <a href="fries.html"> <img class = "product_img_category" src="images/img_frozen/Frozen/fries.jpeg" alt = "Fries image"></a>
                        <p class="company">McCain / 650g</p>
                        <a href="fries.html"><p class="product">Fries</p></a>
                        <p class="price">$1.99</p>
                            <div class = "button">
                            <br><br>
                            <center><a href="yourCart.html" class="btn primary">ADD TO CART</a></center>
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

                        <a href="frozenfruit.html"> <img class = "product_img_category" src="images/img_frozen/Frozen/frozen-fruits.jpg" alt = "Frozen image"></a>
                        <p class="company">Gourmet Delight / 600g</p>
                        <a href="frozenfruit.html"><p class="product">Field Berry Mix</p></a>
                        <p class="price">$7.20</p>
                            <div class = "button">
                            <br><br>
                            <center><a href="yourCart.html" class="btn primary">ADD TO CART</a></center>
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

                        <a href="icecreamsandwich.html"> <img class = "product_img_category" src="images/img_frozen/Frozen/icecream-sandwiches.jpg" alt = "Ice cream Sandwich image"></a>
                        <p class="company">Scotsburn / 12 x 110mL</p>
                        <a href="icecreamsandwich.html"><p class="product">Ice Cream Sandwich</p></a>
                        <p class="price">$5.99</p>
                            <div class = "button">
                            <br><br>
                            <center><a href="yourCart.html" class="btn primary">ADD TO CART</a></center>
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

                        <a href="mixedvegetables.html"> <img class = "product_img_category" src="images/img_frozen/Frozen/mixed-vegetables.jpg" alt = "Mixed vegtables image"></a>
                        <p class="company">McCain / 500g</p>
                        <a href="mixedvegetables.html"><p class="product">Mixed Vegtable</p></a>
                        <p class="price">$4.99</p>
                            <div class = "button">
                            <br><br>
                            <center><a href="yourCart.html" class="btn primary">ADD TO CART</a></center>
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

                        <a href="nuggets.html"> <img class = "product_img_category" src="images/img_frozen/Frozen/nuggets.jpg" alt = "Nuggest image"></a>
                        <p class="company">Banquet / 680g</p>
                        <a href="nuggets.html"><p class="product">Chicken Nuggets</p></a>
                        <p class="price">$7.99</p>
                            <div class = "button">
                            <br><br>
                            <center><a href="yourCart.html" class="btn primary">ADD TO CART</a></center>
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

                        <a href="pizza.html"> <img class = "product_img_category" src="images/img_frozen/Frozen/Pizza.jpg" alt = "pizza image"></a>
                        <p class="company">Ristorante / 355g</p>
                        <a href="pizza.html"><p class="product">Hawaii Pizza</p></a>
                        <p class="price">$9.99</p>
                            <div class = "button">
                            <br><br>
                            <center><a href="yourCart.html" class="btn primary">ADD TO CART</a></center>
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

                        <a href="icecream.html"> <img class = "product_img_category" src="images/img_frozen/Frozen/prestige-ice-cream.jpg" alt = "Pristige IceCream image"></a>
                        <p class="company"><a href="icecream.html"></a>Prestige / 1.4L</p>
                        <a href="icecream.html"><p class="product">Real Premium Ice Cream</p></a>
                        <p class="price">$5.99</p>
                            <div class = "button">
                            <br><br>
                            <center><a href="yourCart.html" class="btn primary">ADD TO CART</a></center>
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


