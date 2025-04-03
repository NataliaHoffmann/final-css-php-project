<!DOCTYPE html>
<html lang="en">
<head>
    <!--basic metadata-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is the webpage for Blue Rock Yoga Studio.">
    <meta name="keywords" content="yoga, excersise, webpage">
    <title>Register here</title>
    <!--stylesheets-->
    <link rel="stylesheet" href="./css/indexstyles.css"> <!-- css -->
    <link rel="icon" href="./images/favicon (2).png"> <!-- icon -->
    
</head>
<body>
    <header>
        <div class="logo">
    <!-- set the logo here -->
            <a href="index.php"><img src="" alt="logo"></a>
        </div>
        <?php
            include 'navs/default-nav.php';
        ?>
    </header>
    <div class="container">
        <h1>First time? Register with us now!</h1>
        <p>Please fill in this form to create an account with us.</p>
        <p>Access to schedules, bookings and exclusive services.</p>
        <form action="./backend/add.php">
            <fieldset>
                <legend>Personal Information</legend>
                <div>
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" placeholder="Type first name">
                </div>
                <div>
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname"placeholder="Type last name">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Your Email"></p>
                </div>
                <div>
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required pattern="^[0-9]{10}$">
                </div>
            </fieldset>
            <fieldset>
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Enter a username" required>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                </div>
            </fieldset>
            <div class="button-container">
                <p>All caught up?</p>
                <input type="submit" name="Submit" value="Add">
                <input type="reset" value="Clear">
            </div>
        </form>
    </div>
    
</body>
</html>