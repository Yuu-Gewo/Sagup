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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="../navbar/navigation.css">
    <link rel="stylesheet" href="../footer/footer.css">
   
</head>
<body>

<header>
    <nav>
        <ul id="homeID" class="nav-bar">
            <li class="logo"><a href="../landingPage/index.php"><img src="../assets/white-logo.jpg" alt=""></a></li>
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

    <div class="background">
        <div class="background-image"></div>
    </div>

    <br>
    <hr class="hr1">
    <br>

    <div class="content-container">
        <div class="content-card">
            <div class="history">
            <h1>HISTORY</h1>
                <p>SAGUP NEGROS IS AN INIATIVE THAT STARTED BY THE YEY 
                    Youth Empowering Youth INIATIVE INCORPORATED FOCUS ON THE ENVIRONMENT. 
                    FOOD WASTE PART HOW TO LESSEN KNOWING THAT IT WAS CONTRIBUTING TO THE GLOBAL 
                    GAS EMISSION THAT CAUSE OF CLIMATE CHANGE OR CLIMATE CRISIS. THE TEAM THINK ON 
                    HOW THEY CAN LESSEN THE FOOD WASTE. GET SERIES OF CONSULTATION. FOOD WASTE IS NOT 
                    JUST AN ENVIRONMENTAL ISSUE BUT ALSO AN ECONOMIC ISSUE FOR OUR LOCAL MARKET VENDOR. 
                    Because basically kung hindi nila mabaligya, loss income para sa ila ihabaoy nalang 
                    sya diretso. So, dako gid sya nga issue especially sang naggwa ang pandemic kay we are 
                    isolated and we just in our homes and limited lang ang paggwa and ang mga tawo nga ma gwa. 
                    And based from that the whole enterprise was fully developed.
                </p>
            </div>
        </div>
    <br>
    <hr class="hr2">
    <br>
        <div class="images">

            <div class="card">
                <img src="../assets/kids.jpg" alt="">
            </div>

            <div class="card">
                <img src="../assets/kids.jpg" alt="">
            </div><div class="card">

                <img src="../assets/kids.jpg" alt="">
            </div><div class="card">

                <img src="../assets/kids.jpg" alt="">
            </div>
        </div>
    <br>
    <hr class="hr3">
    <br>
    <div class="section-3">
        <div class="goals">
            <div class="three">
                <h1>3</h1>
            </div>
        </div>

        <div class="main">
            <h1>MAIN GOALS</h1>
            <ul>
                <li>Help local market vendor to increase their income monthly with 10%</li>
                <br>
                <li>Lessen their food water generation about 50% to 100%</li>
                <br>
                <li>Spread the advocacy, help them solve their problems related, and encourage young people and other communities about climate and food waste education</li>
            </ul>
        </div>
    </div>
    <br>
    <hr class="hr4">
    <br>

</div>

<br>
    <hr class="hr5">
<br>

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