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
    <link rel="stylesheet" href="./css/yourpage.css"> <!-- css -->
    <link rel="icon" href="./images/favicon.png"> <!-- icon -->
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
        </fieldset>

        <!--dropdown schedule -->
        <fieldset>
        <h1>Book Your Classes And Timings Now:</h1>
        <form action="#" method="POST">
            <label for="day">Please Select Day:</label>
            <select id="day" name="day">
                <option value="monday">Monday</option>
                <option value="tuesday">Tuesday</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">Thursday</option>
                <option value="friday">Friday</option>
            </select>
            
            <label for="time">Please Select A Time:</label>
            <select id="time" name="time">
                <option value="morning">Morning</option>
                <option value="afternoon">Afternoon</option>
                <option value="evening">Evening</option>
            </select>

            <label for="time_slot">Select Time Slot:</label>
            <p>Please note a single class session will last the hours listed below</p>
            <select id="time_slot" name="time_slot">
                <option value="timeOne">9 AM - 12 PM</option>
                <option value="timeTwo">12 PM - 3 PM</option>
                <option value="timeThree">3 PM - 6 PM</option>
            </select>
            <button type="submit">Book Now!</button>
        </form>
    </fieldset>
    <a href="./backend/logout.php" class="btn-logout">Logout</a>

    <footer>
        <div class="logo">
            <a href="index.php"><img src="./img/logo.png" alt="logo"></a>
        </div>
    </footer>
</body>
</html>

