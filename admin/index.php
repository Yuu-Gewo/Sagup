<?php
   session_start();
   include_once("../connection/connection.php");
   include_once("../connection/function.php");
   
   // Check if the user is logged in
   $user_data = check_login($conn);

    $query = $conn->query("SELECT program_name as programname, COUNT(program_id) AS volunteer_count FROM program_tb GROUP BY programname");

    foreach($query as $data){
        $program_name[] = $data['programname'];
        $volunteer_count [] = $data['volunteer_count'];
    }

    $query_donation = $conn->query("SELECT SUM(payment_amount) AS amount from donation_tb");

    foreach($query_donation as $Qdonate){
        $payment_amount[] = $Qdonate['amount'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sagup</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../navbar/navigation.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/index1.css">
    <link rel="stylesheet" href="../footer/footer.css">
   
</head>
<body>
    
<header>
    <nav>
        <ul class="nav-bar">
            <li class="logo"><a href="../login/index.php"><img src="../assets/white-logo.jpg" alt=""></a></li>
            <H1 class="text-logo">SAGUP <span class="text-logo2">NEGROS</span></H1>
            <input type="checkbox" id="check">
            <span class="menu">

               
                    <li><a href="../landingPage/index.php">Home</a></li>
                    <?php if($user_data['role_name'] === 'Admin'): ?>
                        <li><a href="../administration/index.php">ADMINISTRATION</a></li>
                     <?php endif; ?>

                        <li><a href="../donation/index.php">DONATIONS</a></li>                      
                        <li><a href="../volunteers/index.php">PROGRAMS</a></li>
          
                <?php
                // Check if user is logged in
                if (isset($_SESSION['user_id'])) {
                    // User is logged in, display "Log Out" link
             
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


    <div class="wrapper-container">
        <div class="wrapper1">

                <form class="form" id = "form" action="" enctype="multipart/form-data" method="post">
                <div class="upload">
                    <?php
                    $user_id = $user_data["user_id"];
                    $username = $user_data["username"];
                    $images = $user_data["images"];
                    ?>
                    <img src="img/<?php echo $images; ?>" width = 175 height = 175 title="<?php echo $images; ?>">
                    <div class="round">
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                    <input type="hidden" name="name" value="<?php echo $username; ?>">
                    <input type="file" name="images" id = "images" accept=".jpg, .jpeg, .png">
                    <i class = "fa fa-camera" style = "color: #fff;"></i>
                    </div>
                </div>
                </form>
                <script type="text/javascript">
                document.getElementById("images").onchange = function(){
                    document.getElementById("form").submit();
                };
                </script>
                <?php
                if(isset($_FILES["images"]["name"])){
                $user_id = $_POST["user_id"];
                $name = $_POST["name"];

                $imageName = $_FILES["images"]["name"];
                $imageSize = $_FILES["images"]["size"];
                $tmpName = $_FILES["images"]["tmp_name"];

                // Image validation
                $validImageExtension = ['jpg', 'jpeg', 'png'];
                $imageExtension = explode('.', $imageName);
                $imageExtension = strtolower(end($imageExtension));
                if (!in_array($imageExtension, $validImageExtension)){
                    echo
                    "
                    <script>
                    alert('Invalid Image Extension');
                    document.location.href = '../admin';
                    </script>
                    ";
                }
                elseif ($imageSize > 1200000){
                    echo
                    "
                    <script>
                    alert('Image Size Is Too Large');
                    document.location.href = '../admin';
                    </script>
                    ";
                }
                else{
                    $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
                    $newImageName .= '.' . $imageExtension;
                    $query = "UPDATE user_tb SET images = '$newImageName' WHERE user_id = $user_id";
                    mysqli_query($conn, $query);
                    move_uploaded_file($tmpName, 'img/' . $newImageName);
                    echo
                    "
                    <script>
                    document.location.href = '../admin';
                    </script>
                    ";
                }
                }
                
                ?>
                <div class="profile">
                    <h1>HI! <?php echo $user_data['username']; ?></h1>
                    <div class="role-title"><?php echo $user_data['role_name']; ?></div>
            
                </div>
         </div>

<!-- --------------------------charts------------------------ -->
         <div class="wrapper-2">
                <div class="volunteers">
                    <div class="volunteer-title">VOLUNTEERS</div>
                    <canvas class="chart" id="myChart"></canvas>
                </div>
         </div>


         
    </div>
    <div class="wrapper-3">
        <div class="donations">
            <h1><div class="donations-title">DONATIONS</div></h1>
            <canvas class="linechart" id="lineChart"></canvas>
        </div>
    </div>

    <!-- ---------------------FOOOTER------------------------------ -->

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
    <!-- <script src="js/index.js"></script> -->

    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: <?php echo json_encode($program_name)?>,
        datasets: [{
            label: 'Volunteer Count',
            data: <?php echo json_encode($volunteer_count)?>,
            backgroundColor: [
                '#F69D62', //foodpantry
                '#D56B26', //herozero
                '#EE762C',//foodwaste
               
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx = document.getElementById('lineChart').getContext('2d');
var lineChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Donation'],
        datasets: [{
            label: 'Total donation',
            data: <?php echo json_encode($payment_amount)?> ,
            backgroundColor: [
                '#F69D62', //foodpantry
               
            ],
             borderColor: 'rgb(75, 192, 192)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

</body>
</html>