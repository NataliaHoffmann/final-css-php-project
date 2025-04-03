<!--homepage-->
<!DOCTYPE html>
<html lang="en">
<head>
    <!--basic metadata-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is the webpage for Blue Rock Yoga Studio.">
    <meta name="keywords" content="yoga, excersise, webpage">
    <title>Blue Rock Yoga Studio</title>
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

    <main>
        <!-- Intro -->
        <section class="Intro">
            <h1>Hey There,</h1>
            <p>Welcome to Blue Rock Yoga</p>
            <p>Rooted In Strength Through Yoga</p>
        </section>

        <!-- Who We Are -->
        <section id="who-we-are">
            <h2>Who We Are</h2>
            <p>Blue Rock Yoga is a studio that is dedicated to fostering your physical and mental well-being. We offer a variety of yoga classes catered to different levels of comfortability and we offer flexible timings at affordable prices. Our experienced instructors are dedicated to helping you find your inner peace, improve flexibility, and achieve overall well-being.</p>
        </section>

        <!-- Section -->
        <section class="details">
        <h1>Want access to schedules and bookings? </h1>
        <p>Register now! Its free.</p>
        <a href="register.html" class="registerBtn">
        <button>Register Now</button>
        </section>

        <!-- Membership Info  -->
        <section id="membership-info">
            <h2>Join Our Membership Program</h2>
            <p>Become a member at Blue Rock Yoga and enjoy access to the sauna, creative workshops, and special events. Whether you prefer weekly sessions or more flexible drop-in options, we have a membership plan that fits your schedule and needs.</p>
            <ul>
                <li><strong>Basic Membership:</strong> Access to 3 classes per week.</li>
                <li><strong>Premium Membership:</strong> Unlimited access to all classes and workshops.</li>
                <li><strong>Drop-in Classes:</strong> Pay per class for a more flexible option.</li>
            </ul>
        </section>

        <!-- Testimonials Section -->
        <section id="reviews">
            <h2>What Our Members Say</h2>
            <blockquote>
                <p>"Blue Rock Yoga has completely transformed my life. The instructors are so supportive, and the classes are always refreshing and challenging. I leave every class feeling rejuvenated!"</p>
                <footer>- Emily R.</footer>
            </blockquote>
            <blockquote>
                <p>"I love the peaceful atmosphere at Blue Rock Yoga. It’s the perfect place to relax, clear my mind, and focus on my health."</p>
                <footer>- Mark L.</footer>
            </blockquote>
            <blockquote>
                <p>"I was hesitant to purchase the basic membership plan, but I am so glad I did. It's allowed me to never worry about classes and now Im able to fully enjoy every session. Worth every penny!"</p>
                <footer>- Anika F.</footer>
            </blockquote>
            <blockquote>
                <p>"I've tried many studio's but Blue Rock is my all time favorite. The instructors are incredible teachers and the aesthetics of the studio are just beautiful!"</p>
                <footer>- Denise E.</footer>
            </blockquote>
            <blockquote>
                <p>"I was given a gift card by a friend for my birthday for one free class and sauna use. I've never tried yoga prior to my first session at Blue Rock, but I was amazed! The sauna was amazing and the class was reviving! Will be coming again!"</p>
            <footer>- Sam K.</footer>
            </blockquote>
            <blockquote>
                <p>"I suffered an injury about a month ago and needed to find a way to stay active without pushing limits. Blue Rocks classes for injury recovery are incredible and so affordable. Thank you Blue Rock.</p>
                <footer>- Al J.</footer>
            </blockquote>
        </section>
    </main>

    <!--footer-->
    <footer>
        <p>&copy; Blue Rock Yoga Studio 2025. All rights reserved.</p>
    </footer>
    
</body>
</html>