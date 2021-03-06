<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/a42f30d46c.js" crossorigin="anonymous"></script>
    <title>Jobs</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="nav-logo">
                <a href="/index.php"><img src="images/logo.jpg" class="nav-logo-img" alt="Store Logo" height="120"
                        width="120" /></a>
            </div>
            <br /><br />
            <a class="store-name" href="/index.php">
                MARCHÉ
                <br />
                CONCORDIA
            </a>

            <nav class="navigation">
                <ul>
                    <li>
                        <a href="https://www.google.com/maps/place/Pavillion+Henry+F.Hall+Bldg,+Boulevard+de+Maisonneuve+O,+Montreal,+QC+H3G+1M8/@45.4973223,-73.5812175,17z/data=!3m1!4b1!4m5!3m4!1s0x4cc91a6a8799deb5:0x1ca01f129dc2ef02!8m2!3d45.4973223!4d-73.5790288"
                            class="location"><img src="images/location.jpg" class="location-img" height="55"
                                width="55" /></a>
                    </li>
                    <li>
                        <a href="/signIn.php" class="sign-in"><img src="images/sign-in.png" class="sign-in-img"
                                height="55" width="55" /></a>
                    </li>
                    <li>
                        <a href="yourCart.php" class="cart"><img src="images/cart.png" class="cart-img" height="55"
                                width="55" /></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <header class="sticky-top secondary-header">
        <div class="container-other">
            <nav class="navigation-other d-flex justify-content-center">
                <ul>
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">CATEGORIES</button>
                            <div class="dropdown-content">
                                <a href="/fruits&vegetables">Fruits and Vegtables</a>
                                <a href="/dairy">Dairy Products</a>
                                <a href="/frozen">Frozen Items</a>
                                <a href="/grocery">Grocery</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="" class="deals">DEALS</a></li>
                    <li><a href="" class="locations">OTHER LOCATIONS</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="card text-center">
        <div class="card-header">
            Jobs
        </div>
        <div class="card-body">
            <h5 class="card-title">Available</h5>
            <p class="card-text">No more available positions. Please check later!</p>
            <a href="/index.php" class="btn btn-primary">Home Page</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
    <footer class="footer-class">

        <div class="container-footer">


            <div align-h="right" id="footerTop" class="d-flex justify-content-end pt-3 pb-3">
                <b-nav>
                    <a class="m-1" id="socialMedia" href="https://www.facebook.com/profile.php?id=100073514299484">
                        <i class="fab fa-facebook fa-3x"></i>
                    </a>
                    <a class="m-1" id="socialMedia" href="https://www.instagram.com/marche_concordia/">
                        <i class="fab fa-instagram fa-3x"></i>
                    </a>
                    <a class="m-1" id="socialMedia" href="https://twitter.com/ConcordiaMarche">
                        <i class="fab fa-twitter fa-3x"></i>
                    </a>
                </b-nav>
            </div>
            <div id="newsletter">
                <h3>NewsLetter</h3>
                Sign Up For NewsLetter To receive Newest Deals On Your Email!
                <input type="email" name="NewsLetterSignUp" placeholder="Email Address" id="NewsLetterSignUp">
            </div>
            <a data-toggle="collapse" role="button" aria-expanded="false" aria-controls="Contact"
                href="#Contact">Contact
                Us</a>
            <div class="collapse" id="Contact">
                <div class="card card-body">
                    514-243-8744 <br>
                    marcheconcordia@gmail.com
                </div>
            </div>
            <br>
            <a href="/jobs">Jobs</a>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>