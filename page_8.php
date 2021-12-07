<!--Charles Eimer 26747310 Edit product page   -->
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Edit Product</title>
</head>

<body>
    <!-- Navigation for the Backpages Charles 26747310  -->
    <div class="nav_back">
        <a id="welcome" href="final_b.php"><?php print "Welcome " . $_SESSION['username']; ?></a>
        <a href="/index.php">Home</a>
        <a href="/final_b.php">Product List</a>
        <a href="/p11.php">Order List</a>
        <a href="pagenine.php">User List</a>
        <a href="/index.php">Sign out</a>
    </div>
    <section class="outer_edit">
        <!--Inner container for the edit  -->
        <form id="inner_edit" action="/sign_in">
            <h1>Edit Product</h1>
            <p>Please fill each given field to edit a user.</p>
            <hr>
            <input id="input" size="30" type="text" name="name" placeholder="Product name" required>
            <input id="input" size="30" type="text" name="last_name" placeholder="Price" required>
            <input id="input" size="30" type="text" name="email" placeholder="Quantity" required>
            <div id="img_in">
                <input type="file" name="image">
            </div>
            <div>
                <button id="save">Save</button>
            </div>
    </section>
    </form>
</body>

</html>
