<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>

    <link rel="stylesheet" href="css/P4/P4.css" />
    <link rel="stylesheet" href="css/P4/P4_a.css" />
    <link rel="stylesheet" href="css/P4/P4_b.css" />
    <link rel="stylesheet" href="styles.css" />
    <script
      src="https://kit.fontawesome.com/a42f30d46c.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <header>
      <div class="container">
        <div class="nav-logo">
          <a href="/index.php"
            ><img
              src="images/logo.jpg"
              class="nav-logo-img"
              alt="Store Logo"
              height="120"
              width="120"
          /></a>
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
            <li>
              <a href="/signIn.php" class="sign-in"
                ><img
                  src="images/sign-in.png"
                  class="sign-in-img"
                  height="55"
                  width="55"
              /></a>
            </li>
            <li>
              <a href="yourCart.php" class="cart"
                ><img
                  src="images/cart.png"
                  class="cart-img"
                  height="55"
                  width="55"
              /></a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <header class="sticky-top secondary-header">
      <div class="container-other">
        <nav class="navigation-other d-flex justify-content-center">
          <ul>
            <li><a href="category_1.php" class="deals"><?php print "WELCOME " . strtoupper($_SESSION['username']); ?></a></li>
            <li>
              <div class="dropdown">
                <button class="dropbtn">CATEGORIES</button>
                <div class="dropdown-content">
                  <a href="/category1_final.php">Fruits and Vegtables</a>
                  <a href="/category2_final.php">Dairy Products</a>
                  <a href="/category3_final.php">Frozen Items</a>
                  <a href="/category4_final.php">Grocery</a>
                </div>
              </div>
            </li>
            <li><a href="COMING SOON.php" class="deals">DEALS</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="container px-4 py-5 mx-auto">
      <div class="row d-flex justify-content-center">
        <div class="col-5">
          <h4 class="heading">Your Cart</h4>
        </div>
        <div class="col-7">
          <div class="row text-right">
            <div class="col-4">
              <h6 class="mt-2">Category</h6>
            </div>
            <div class="col-4">
              <h6 class="mt-2">Quantity</h6>
            </div>
            <div class="col-4">
              <h6 class="mt-2">Price</h6>
            </div>
          </div>
        </div>
      </div>

      <!-- Products in Shopping cart -->
      <div id="shopping-cart">
        <div id="prod1">
          <div class="row d-flex justify-content-center border-top">
            <div class="col-5">
              <div class="row d-flex">
                <div class="prod">
                  <img src="images/milk3pc.jpg" class="prod-img" />
                </div>
                <div class="my-auto flex-column d-flex pad-left">
                  <h6 class="mob-text">Milk</h6>
                  <p class="mob-text">2L carton (3.25%)</p>
                </div>
              </div>
            </div>
            <div class="my-auto col-7">
              <div class="row text-right">
                <div class="col-4">
                  <p class="mob-text">Dairy</p>
                </div>
                <div class="col-4">
                  <div class="row d-flex justify-content-end px-3">
                    <p class="mb-0" id="cnt1">1</p>
                    <div class="d-flex flex-column plus-minus">
                      <span class="vsm-text plus">+</span>
                      <span class="vsm-text minus">-</span>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <h6 id="prod1price" class="mob-text">$3.75</h6>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="prod2">
          <div class="row d-flex justify-content-center border-top">
            <div class="col-5">
              <div class="row d-flex">
                <div class="prod">
                  <img
                    src="images/img_frozen/Frozen/nuggets.jpg"
                    class="prod-img"
                  />
                </div>
                <div class="my-auto flex-column d-flex pad-left">
                  <h6 class="mob-text">Chicken Nuggets</h6>
                  <p class="mob-text">Banquet (680g)</p>
                </div>
              </div>
            </div>
            <div class="my-auto col-7">
              <div class="row text-right">
                <div class="col-4">
                  <p class="mob-text">Frozen</p>
                </div>
                <div class="col-4">
                  <div class="row d-flex justify-content-end px-3">
                    <p class="mb-0" id="cnt2">1</p>
                    <div class="d-flex flex-column plus-minus">
                      <span class="vsm-text plus">+</span>
                      <span class="vsm-text minus">-</span>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <h6 id="prod2price" class="mob-text">$7.99</h6>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="prod3">
          <div class="row d-flex justify-content-center border-top">
            <div class="col-5">
              <div class="row d-flex">
                <div class="prod">
                  <img
                    src="images/img_frozen/Frozen/icecream-sandwiches.jpg"
                    class="prod-img"
                  />
                </div>
                <div class="my-auto flex-column d-flex pad-left">
                  <h6 class="mob-text">Ice Cream Sandwich</h6>
                  <p class="mob-text">Scotsburn (12 x 110mL).</p>
                </div>
              </div>
            </div>
            <div class="my-auto col-7">
              <div class="row text-right">
                <div class="col-4">
                  <p class="mob-text">Frozen</p>
                </div>
                <div class="col-4">
                  <div class="row d-flex justify-content-end px-3">
                    <p class="mb-0" id="cnt2">1</p>
                    <div class="d-flex flex-column plus-minus">
                      <span class="vsm-text plus">+</span>
                      <span class="vsm-text minus">-</span>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <h6 id="prod3price" class="mob-text">$5.99</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Payment -->
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
            <div class="row">
              <div class="col-lg-3 radio-group">
                <div class="row d-flex px-3 radio">
                  <img
                    class="pay"
                    src="https://thumbs.dreamstime.com/b/dollar-bill-icon-cash-money-symbol-vector-financial-banking-infographic-design-element-183107288.jpg"
                  />
                  <p class="my-auto">Cash</p>
                </div>
              </div>
              <!----
              <div class="col-lg-5">
                <div class="row px-2">
                  <div class="form-group col-md-6">
                    <label class="form-control-label">Name on Card</label>
                    <input
                      type="text"
                      id="cname"
                      name="cname"
                      placeholder="John Doe"
                    />
                  </div>
                  <div class="form-group col-md-6">
                    <label class="form-control-label">Card Number</label>
                    <input
                      type="text"
                      id="cnum"
                      name="cnum"
                      placeholder="1111 1111 1111 1111"
                    />
                  </div>
                </div>
                <div class="row px-2">
                  <div class="form-group col-md-6">
                    <label class="form-control-label">Expiry Date</label>
                    <input
                      type="text"
                      id="exp"
                      name="exp"
                      placeholder="MM/YYYY"
                    />
                  </div>
                  <div class="form-group col-md-6">
                    <label class="form-control-label">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="***" />
                  </div>
                </div>
              </div>-->
              <div id="checkout" class="col-lg-4 mt-2">
                <div class="row d-flex justify-content-between px-4">
                  <p class="mb-1 text-left">Subtotal</p>
                  <h6 id="subtotal" class="mb-1 text-right">$23.49</h6>
                </div>
                <div class="row d-flex justify-content-between px-4">
                  <p class="mb-1 text-left">Shipping</p>
                  <h6 id="shipping" class="mb-1 text-right">$2.99</h6>
                </div>
                <div class="row d-flex justify-content-between px-4" id="tax">
                  <p class="mb-1 text-left">Total (tax included)</p>
                  <h6 id="total" class="mb-1 text-right">$26.48</h6>
                </div>

                <div id="show-taxes">
                  <div class="row d-flex justify-content-between px-4">
                    <p id="gst-label" class="mb-1 text-left"></p>
                    <h6 id="gst" class="mb-1 text-right"></h6>
                  </div>

                  <div class="row d-flex justify-content-between px-4">
                    <p id="qst-label" class="mb-1 text-left"></p>
                    <h6 id="qst" class="mb-1 text-right"></h6>
                  </div>
                </div>

                <div class="row d-flex justify-content-between px-4">
                  <p class="mb-1 text-left"></p>
                  <h6 class="mb-1 text-right"></h6>
                  <a href="#checkout" id="show-taxes-link">Show Taxes</a>
                </div>

                <button class="btn-block btn-blue" id="chk">
                  <span>
                    <span id="checkout">Checkout</span>
                    <span id="check-amt">$26.48</span>
                  </span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <footer class="footer-outer">
      <div id="newsletter">
        <h3>NewsLetter</h3>
        Sign Up For NewsLetter To receive Newest Deals On Your Email!
        <input type="email" name="NewsLetterSignUp" placeholder="Email Address" id="NewsLetterSignUp" />
      </div>
      <a href="/Contact">Contact Us</a>
      <a href="/Jobs">Jobs</a>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
      </div>
    </footer> -->

    <footer class="footer-class">
      <div class="container-footer">
        <div
          align-h="right"
          id="footerTop"
          class="d-flex justify-content-end pt-3 pb-3"
        >
          <b-nav>
            <a class="m-1" id="socialMedia" href="https://www.facebook.com/">
              <i class="fab fa-facebook fa-3x"></i>
            </a>
            <a class="m-1" id="socialMedia" href="https://www.instagram.com/">
              <i class="fab fa-instagram fa-3x"></i>
            </a>
            <a class="m-1" id="socialMedia" href="https://twitter.com/?lang=en">
              <i class="fab fa-twitter fa-3x"></i>
            </a>
          </b-nav>
        </div>
        <div id="newsletter">
          <h3>NewsLetter</h3>
          Sign Up For NewsLetter To receive Newest Deals On Your Email!
          <input
            type="email"
            name="NewsLetterSignUp"
            placeholder="Email Address"
            id="NewsLetterSignUp"
          />
        </div>
        <a
          data-toggle="collapse"
          role="button"
          aria-expanded="false"
          aria-controls="Contact"
          href="#Contact"
          >Contact Us</a
        >
        <div class="collapse" id="Contact">
          <div class="card card-body">
            514-243-8744 <br />
            marcheconcordia@gmail.com
          </div>
        </div>
        <br />
        <a href="/Jobs.php">Jobs</a>
      </div>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery.3.5.1.jquery.min.js"></script>
    <script src="js/P4/P4.js"></script>
  </body>
</html>
