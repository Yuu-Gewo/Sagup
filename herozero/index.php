<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>HeroZero</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="../navbar/navigation.css">
    <link rel="stylesheet" href="../footer/footer.css">
</head>
<body>
<header>
    <nav>
        <ul id="homeID" class="nav-bar">
            <li class="logo"><a href="index.php"><img src="../assets/white-logo.jpg" alt=""></a></li>
            <H1 class="text-logo">SAGUP <span class="text-logo2">NEGROS</span></H1>
            <input type="checkbox" id="check">
            <span class="menu">
                <li><a href="../landingPage/index.php">Home</a></li>
                <li><a href="../donation/create.php">DONATE</a></li>
                <li><a href="../volunteers/create.php">Programs</a></li>
                <?php
                // Check if user is logged in
                if (isset($_SESSION['user_id'])) {
                    // User is logged in, display "Log Out" link
                    echo '<li><a href="../admin/index.php">Dashboard</a></li>';
                    echo '<li><a href="../login/logout.php">Log Out</a></li>';
                } else {
                    // User is not logged in, display "Log In" link
                    echo '<li><a href="../login/login.php">Log In</a></li>';
                }
                ?>
                  <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
            </span>
            <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
        </ul>
    </nav>
</header>

<div class="section-1">
    <div class="background">
        <div class="title">
            <h1>HERO4ZERO</h1>
        </div>
    </div>
</div>

<div class="section-2">
    <div class="content">
        <p>In the heart of Bacolod City, a revolution is brewing, not with flames, but with fresh produce. 
            A ground-breaking initiative, fueled by the US Embassy's Emerging Voices Small Grants Program, 
            is taking root. This project isn't your average community garden; it's a springboard for youth 
            leadership. Imagine a vibrant hub where teenagers aren't just learning to plant tomatoes, but to 
            tackle the complex issues of food waste and food insecurity. This program empowers them to become 
            vocal advocates, their voices echoing through the city like the sweet melodies of a MassKara chant.
             They'll delve into the heart of the problem, understanding how perfectly edible food ends up in landfills 
             while families struggle to put meals on the table. But these young minds won't be burdened, they'll be ignited. 
             They'll design solutions, using innovation and passion to bridge the gap between abundance and scarcity. This project 
             isn't just about planting seeds, it's about planting the seeds of change in the next generation of Bacolod's leaders.
             The harvest won't just be vegetables, it will be a generation empowered to fight for a more sustainable and equitable food system.
        </p>
    </div>
</div>

<br>
<br>
<hr class="hr1">
<footer>
    <div class="footer-container">
        <div class="footer-content" id="footer-phone">
            <h3>PHONE</h3>
            <p>+63 (89) 123 4567</p>
        </div>
        <div class="footer-content" id="footer-email">
            <h3>Email</h3>
            <p>sagupnegros@yeyinitiative.org</p>
        </div>
        <div class="footer-content" id="footer-address">
            <h3>ADDRESS</h3>
            <p>Blk. 24, Lot 7, Victoria Street, Eroreco Subdivision, Brgy. Mandalagan, Bacolod CIty, Philippines, 6100</p>
        </div>
    </div>
<br>
<hr class="hr5">
<br>
    <div class="lastpart">
        <h5>SAGUP NEGROS for change foundation.  © 2024 All rights reserved.</h5>
    </div>

</footer>
<br>
</body>
</html>