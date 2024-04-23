<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sagup</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/landingpage.css">
    <link rel="stylesheet" href="../navbar/navigation.css">
    <link rel="stylesheet" href="../footer/footer.css">
   
</head>
<body>
   <!-- Navigation Bar -->
<header>
    <nav>
        <ul id="homeID" class="nav-bar">
            <li class="logo"><a href="index.php"><img src="../assets/white-logo.jpg" alt=""></a></li>
            <H1 class="text-logo">SAGUP <span class="text-logo2">NEGROS</span></H1>
            <input type="checkbox" id="check">
            <span class="menu">
                <li><a href="index.php">Home</a></li>
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
       <div class="welcome">
        <p>Welcome to SAGUP NEGROS</p>
       </div>
    </div>
</div>
<br><br>
<hr class="hr1">
<br><br>

<div class="section-2">
    <h1>About Sagup Negros</h1>
    <div class="about">
        <div class="about-text">
            <div class="textArea">SAGUP NEGROS is an initiative that started by the EYE (Youth Empowering Youth) initiative Inc. 
                                One of their programs is focus on the environment. The one reason why they started SAGUP NEGROS 
                                is about Food Waste and how it contributes to the global gas emission that causes climate change 
                                or climate crisis. <br> <br>
                                <a href="../about/index.php" class="about-more">See More...</a>
                            </div>
        </div>
        <div class="about-img"></div>
       
    </div>
</div> 
<br><br>
<hr class="hr1">
<br><br>

<div class="section-3">
    <div class="card-container">
        
        <div class="card">
            <h3>HEROZERO</h3>
            <img src="../assets/herozero.jpg" alt="">
            <div class="card-content">
                <p>A transformative initiative in Bacolod City that aims to empower young people to become advocates and leaders in 
                    addressing the intertwined issues of food waste and food insecurity. 
                    The project is supported by the US Embassy in the Philippines through the Emerging Voices Small Grants Program.
                </p>              
            </div>
            <a href="../herozero/index.php" class="btn">Read More...</a>
        </div>
   
        <div class="card">
            <h3>FOOD WASTE MITIGATION</h3>
            <img src="../assets/foodwastemitigation.jpg" alt="">
            <div class="card-content">
            <p>An idea that was sparked by the realization that food waste contributes significantly to global gas emissions, 
                exacerbating the climate crisis not only to address the environmental 
                impact of food waste but also to empower local market vendors by helping them increase their income and reduce waste.
                </p>
            </div>
            <a href="#" class="btn">Read More...</a>
        </div>
      

        <div class="card">
            <h3>FOOD PANTRY</h3>
            <img src="../assets/foodpantry.jpg" alt="">
            <div class="card-content">
            <p>A program that seeks to address the intertwined issues of food waste and food insecurity in Bacolod City.
                 The food waste heroes will rescue surplus food from farmers, markets, and businesses which will then be made accessible for vulnerable populations.

                    
                </p>              
            </div>
            <a href="#" class="btn">Read More...</a>
        </div>
    </div>
</div>

<div class="section-4">
    <div class="donation-container">
         
                <h1>YOUR DONATIONS HAVE SUPPORTED</h1>
                <h3>123456</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, 
                    sint obcaecati modi et eos, pariatur qui, odio exercitationem placeat 
                    eum commodi! Explicabo provident numquam aut consequuntur! Asperiores 
                    deserunt laudantium quos.
                </p>
           
    </div>
</div>
<br><br>
<hr class="hr1"><br>
<hr class="hr2"><br>
<hr class="hr3"><br>

<div class="section-5">
    <div class="share-title">
        <h1>SHARE SAGUP NEGROS WITH US!</h1>
    </div>
    <div class="share-container">      
             
                <div class="share-card" id="share-card1">
                    <img src="../assets/donate.jpg" alt="">
                    <a href="../donation/create.php" class="share-btn">Donate ↗</a>
                    <p>Make a donate to support our advocacies</p>
                </div>

                <div class="share-card" id="share-card2">
                    <img src="../assets/volunteer.jpg" alt="">
                    <a href="../volunteers/create.php" class="share-btn">Volunteer ↗</a>
                    <p>Be a part of the SAGUP NEGROS</p>
                </div>
          
    </div>
</div>

<br>
<hr class="hr4">

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
<hr class="hr5">
<br>
    <div class="lastpart">
        <h5>SAGUP NEGROS for change foundation.  © 2024 All rights reserved.</h5>
    </div>
    <br>
</footer>

</body>
</html>