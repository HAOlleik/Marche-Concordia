<!-- Charles Eimer 26747310 Page_10 Edit user information   -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Edit User</title>
</head>

<body>
    <!-- Navigation for the Backpages Charles 26747310  -->
    <div class="nav_back">
        <a id="welcome" href="page9.php"><?php print "Welcome " . $_SESSION['username']; ?></a>
        <a href="/index.html">Home</a>
        <a href="/final_b.html">Product List</a>
        <a href="/p11.html">Order List</a>
        <a href="pagenine.html">User List</a>
        <a href="/index.html">Sign out</a>
    </div>

    <!--Outter Container for the edit user form  -->
    <section class="outer_edit">
        <!--Inner container for the edit  -->
        <form id="inner_edit" action="/sign_in">
            <h1>Edit User</h1>
            <p>Please fill each given field to edit a user.</p>
            <hr>
            <input id="input" size="30" type="text" name="name" placeholder="First name" required>
            <input id="input" size="30" type="text" name="last_name" placeholder="Last name" required>
            <input id="input" size="30" type="email" name="email" placeholder="New Email" required>
            <input id="input" size="30" type="password" name="password" placeholder="New Password" required>
            <input id="input" size="30" type="text" name="id" placeholder="New ID" required>
            <div>
                <button id="save">Save</button>
            </div>
    </section>
    </form>
</body>

</html>