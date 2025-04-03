<!--homepage-->
<!DOCTYPE html>
<html lang="en">
<head>
    <!--basic metadata-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is the webpage for Blue Rock Yoga Studio.">
    <meta name="keywords" content="yoga, excersise, webpage">
    <title>Login To Your Account</title>
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
    <section  id="login">
        <h1>Login</h1>
        <form action="./backend/login.php" method="post">
            <div class="imgcontainer">
                <img src="../images/favicon (2).png" class="img2">
            </div>
            <div class="container">
                <label for="username">Username or Email:</label>
                <input type="text" id="username" name="username" placeholder="Enter your username or email" required>

        
                <label for="password"><b>Password:</b></label>
                <input type="password" id="passoword" placeholder="Please Enter Your Password" name="password" required>
        
                <div class="button-container">
                    <button type="submit" class="btn-submit">Login</button>
                </div>
                <div class="container" style="background-color:#93ACB5">
                    <button type="button" class="cancelbtn">Cancel</button>
                </div>

            </div>

            <div class="help">
                <p>Don't have an account? <a href="register.html">Register here</a></p>
            </div>
        </form>
    </section>

</body>
</html>