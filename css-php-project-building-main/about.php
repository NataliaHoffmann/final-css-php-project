<!--homepage-->
<!DOCTYPE html>
<html lang="en">
<head>
    <!--basic metadata-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is the webpage for Blue Rock Yoga Studio.">
    <meta name="keywords" content="yoga, excersise, webpage">
    <title>About Us - Blue Rock Yoga Studio</title>
    <!--stylesheets-->
    <link rel="stylesheet" href="./css/styles.css"> <!-- css -->
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
    

    <!-- About Us Section -->
    <section id="about-us">
      
        <div class="about-header">
            <h2>About Us</h2>
        </div>
        
        <!-- content -->
        <div class="content">
            <p>Welcome to Blue Rock Yoga Studio, where we combine strength and flexibility to bring you a better, healthier life. Our studio offers a variety of yoga and low impact fitness classes that cater to all skill levels, from beginners to advanced users. We believe in nurturing both the body and mind, providing a peaceful and supportive environment for our members. Whether you're here to relax or challenge yourself, Blue Rock Yoga is here to help you on your journey.</p>
            
            <h3>Our Mission</h3>
            <p>At Blue Rock Yoga, our mission is simple: to create a welcoming space where individuals can explore the benefits of yoga, improve their well-being, and find inner peace. We provide professional instructors from various backgrounds who guide you through each session with personalized attention, so you feel supported and empowered in every practice.</p>
            
            <h3>Our Studio</h3>
            <p>Our studio is designed with comfort and tranquility in mind, offering an environment that encourages growth and relaxation. We’ve carefully curated our space to include calming colors, natural lighting, and a clean aesthetic, so you feel at ease the moment you step inside.</p>

            <!-- images -->
            <div class="image-gallery">
                <h3>Our Space</h3>
                <div class="gallery">
                    <img src="./images/abtusimg.jpg" alt="yoga studio" class="gallery-item">
                    <img src="./images/studio-2.jpg" alt="yoga studio" class="gallery-item">
                    <img src="../images/studio1.jpg" alt="yoga studio" class="gallery-item">
                </div>
            </div>
        </div>
    </section>

</body>
</html>

