<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
  <link rel="stylesheet" href="p11.css" />
  <title>Order list</title>
</head>

<body>
    <div class="nav_main">
        <a id="welcome" href="final_b.php"><?php print "Welcome " . $_SESSION['username']; ?></a>
        <a href="index.php">Home</a>
        <a href="final_b.php">Product List</a>
        <a href="p11.php">Order List</a>
        <a href="pageNine.php">User List</a>
        <a href="index.php">Sign out</a>
    </div>
<div class="h1andp">
  <h1>Order List</h1>
  <p>Edit and manage your orders from here.</p>
</div>

  <div>
    <form class="d-flex">
      <input id="navSearchBar" class="form-control me-2" type="search" placeholder="Search Orders" aria-label="Search"
        width="25em" />
      <button class="btn secondary" type="submit">Search</button>
    </form>
    <div class="h1andp">
      <button type="button" class="btn primary" id="addbtn">Add</button>
    </div>
  </div>
  <div class="">
    <table class="table table-striped">
      <tr>
        <th>Order #</th>
        <th>Date</th>
        <th>Customer</th>
        <th>Total</th>

        <th></th>
      </tr>
      <tr>
        <td>#0001</td>
        <td>10/06/2021</td>
        <td>John Smith</td>
        <td>$50.45</td>


        <td>
          <div class="cellbtn">
            <button type="button" class="btn primary" id="delete">
              Delete</button><a href="P12.php"><button type="button" class="btn secondary edit">
                &nbsp&nbspEdit&nbsp&nbsp
              </button></a>
          </div>
        </td>
      </tr>
      <tr>
        <td>#0002</td>
        <td>15/06/2021</td>
        <td>Tom Corey</td>
        <td>$18.76</td>


        <td>
          <div class="cellbtn">
            <button type="button" class="btn primary" id="delete">
              Delete</button><a href="P12.php"><button type="button" class="btn secondary edit">
                &nbsp&nbspEdit&nbsp&nbsp
              </button></a>
          </div>
        </td>
      </tr>
      <tr>
        <td>#0003</td>
        <td>03/07/2021</td>
        <td>Elizabeth Patel</td>
        <td>$65.39</td>

        <td>
          <div class="cellbtn">
            <button type="button" class="btn primary" id="delete">
              Delete</button><a href="P12.php"><button type="button" class="btn secondary edit">
                &nbsp&nbspEdit&nbsp&nbsp
              </button></a>
          </div>
        </td>
      </tr>
    </table>
  </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery.3.5.1.jquery.min.js"></script>
<script src="js/P12/P12.js"></script>

</html>
