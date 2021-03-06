<!-- Completed Charles  -->
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link href="css/P12/P12.css" rel="stylesheet" type="text/css" />
    <script
      src="https://kit.fontawesome.com/a42f30d46c.js"
      crossorigin="anonymous"
    ></script>
    <script
      data-require="jquery@3.1.1"
      data-semver="3.1.1"
      src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"
    ></script>
    <script src="script.js"></script>
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="nav_2.css" />
    <link rel="stylesheet" href="css/P12/P12.css" />
    <title>Order Profile</title>
  </head>

  <body>
    <header id="edithead">
    <div class="navigation">
        <a id="welcome" href="final_b.php"><?php print "Welcome " . $_SESSION['username']; ?></a>
        <a href="index.php">Home</a>
        <a href="final_b.php">Product List</a>
        <a href="p11.php">Order List</a>
        <a href="pageNine.php">User List</a>
        <a href="index.php">Sign out</a>
    </div>
    </header>

    <h1 id="renderOrderNum">Order #</h1>
    <p>Edit and manage the order profile here.</p>
    <br />

    <div>
      <div>
        <button type="button" class="btn primary savebtn">Save</button>
      </div>
    </div>

    <!-- Info -->
    <div>
      <table class="tg">
        <thead>
          <tr>
            <th class="tg-7btt">
              <h3>Customer Name</h3>
            </th>
            <th class="tg-7btt">
              <h3>Date</h3>
            </th>
            <th class="tg-7btt">
              <h3>Total</h3>
            </th>
            <th class="tg-7btt">
              <h3>Fulfilled</h3>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="tg-c3ow">
              <p id="cname">Customer Name Here</p>
            </td>
            <td class="tg-c3ow">
              <input
                type="date"
                id="datefield"
                name="trip-start"
                class="date"
              />Enter/Edit Date
            </td>
            <td class="tg-c3ow">
              <p id="total">$25.5</p>
            </td>
            <td>
              <select id="fulfilled">
                <option value="fulfilled_yet">&checkmark;</option>
                <option value="not_fulfilled_yet">&cross;</option>
                <option value="delayed">&ominus;</option>
              </select>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Products -->
    <div class="products" id="products">
      <table class="tg" id="tg">
        <thead>
          <tr class="prod" id="prod0">
            <th class="tg-7btt">
              <h4 class="heading1">Ordered Item</h4>
            </th>
            <th class="tg-7btt">
              <h6 style="opacity: 0">Product Details II</h6>
            </th>
            <th class="tg-7btt">
              <h6>Category</h6>
            </th>
            <th class="tg-amwm">
              <h6>Quantity</h6>
            </th>
            <th class="tg-amwm">
              <h6>Price</h6>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="prod" id="prod1">
            <td class="tg-c3ow">
              <div class="flex-item prod-image">
                <img src="images/milk3pc.jpg" class="prod-img" />
              </div>
            </td>
            <td class="tg-0pky">
              <div>
                <h6>Milk</h6>
                <p>2L (3.25%)</p>
              </div>
            </td>
            <td class="tg-c3ow">Dairy</td>
            <td class="tg-baqh">
              <div class="quantity buttons_added">
                <input type="button" value="-" class="minus" /><input
                  type="number"
                  step="1"
                  min="1"
                  max=""
                  name="quantity"
                  value="1"
                  title="Qty"
                  class="input-text qty text"
                  size="4"
                  pattern=""
                  inputmode=""
                /><input type="button" value="+" class="plus" />
                <br />
                <br />
                <center>
                  <button class="btn btn-danger">
                    <i class="fa fa-trash-o fa-lg"></i>
                  </button>
                </center>
              </div>
            </td>
            <td class="tg-baqh">$3.75</td>
          </tr>

          <tr class="prod" id="prod2">
            <td class="tg-c3ow">
              <div class="flex-item prod-image">
                <img
                  src="images/img_frozen/Frozen/nuggets.jpg"
                  class="prod-img"
                />
              </div>
            </td>
            <td class="tg-0pky">
              <div>
                <h6>Chicken Nuggets</h6>
                <p>Banquet (680g)</p>
              </div>
            </td>
            <td class="tg-c3ow">Frozen</td>
            <td class="tg-baqh">
              <div class="quantity buttons_added">
                <input type="button" value="-" class="minus" /><input
                  type="number"
                  step="1"
                  min="1"
                  max=""
                  name="quantity"
                  value="1"
                  title="Qty"
                  class="input-text qty text"
                  size="4"
                  pattern=""
                  inputmode=""
                /><input type="button" value="+" class="plus" />
                <br />
                <br />
                <center>
                  <button class="btn btn-danger">
                    <i class="fa fa-trash-o fa-lg"></i>
                  </button>
                </center>
              </div>
            </td>
            <td class="tg-baqh">$7.99</td>
          </tr>

          <tr class="prod" id="prod3">
            <td class="tg-c3ow">
              <div class="flex-item prod-image">
                <img
                  src="images/img_frozen/Frozen/icecream-sandwiches.jpg"
                  class="prod-img"
                />
              </div>
            </td>
            <td class="tg-0pky">
              <div>
                <h6>Ice Cream Sandwich</h6>
                <p>Scotsburn (12 x 110mL)</p>
              </div>
            </td>
            <td class="tg-c3ow">Frozen</td>
            <td class="tg-baqh">
              <div class="quantity buttons_added">
                <input type="button" value="-" class="minus" /><input
                  type="number"
                  step="1"
                  min="1"
                  max=""
                  name="quantity"
                  value="1"
                  title="Qty"
                  class="input-text qty text"
                  size="4"
                  pattern=""
                  inputmode=""
                /><input type="button" value="+" class="plus" />
                <br />
                <br />
                <center>
                  <button class="btn btn-danger">
                    <i class="fa fa-trash-o fa-lg"></i>
                  </button>
                </center>
              </div>
            </td>
            <td class="tg-baqh">$5.99</td>
          </tr>
        </tbody>
      </table>
      <br />
      <div>
        <button type="button" class="btn primary addbtn">Add Item</button>
      </div>
      <br />
    </div>

    <!---<footer class="footer-class">
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
        <a href="/Jobs">Jobs</a>
      </div>
    </footer>
  -->

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
    <script src="js/P12/P12.js"></script>
  </body>
</html>
