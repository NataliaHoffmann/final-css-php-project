<?php
session_start();

// Check if user is logged in, otherwise redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

// Display user info
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <!--basic metadata-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is the webpage for Blue Rock Yoga Studio.">
    <meta name="keywords" content="yoga, excersise, webpage">
    <title> Your page - Blue Rock Yoga Studio</title>
    <!--stylesheets-->
    <link rel="stylesheet" href="./css/indexstyles.css"> <!-- css -->
    <link rel="icon" href="./images/favicon (2).png"> <!-- icon -->
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="./img/logo-name.jpg" alt="logo"></a>
        </div>
        <?php
            include 'navs/login-nav.php';
        ?>
    </header>
    <section id="contactus">
        <fieldset>
            <h1>Hello, <?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?>!</h1>
            <p>Username: <?php echo $_SESSION['username']; ?></p>
            <p>Email: <?php echo $_SESSION['email']; ?></p>
            <p>Phone: <?php echo $_SESSION['phone']; ?></p>
            <p>Bookings: <?php echo $_SESSION['bookings']; ?></p>
            <a href="./backend/logout.php" class="btn-logout">Logout</a>
        </fieldset>
    </section>


    <footer>
        <div class="logo">
            <a href="index.php"><img src="./img/logo.png" alt="logo"></a>
        </div>
    </footer>
</body>
</html>
