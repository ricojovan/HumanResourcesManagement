<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>
    <!--menu button-->
    <div class="menu-btn">
    <i class="fa-sharp fa-solid fa-circle-right fa-beat"></i>
    </div>
   <div class="side-bar">
    <!--header section-->
    <header>
        <!--iamge-->
        <img src="#" alt="">
        <h3>KUPAL KA RICO JOBAN</h3>
    </header>
   
    <!--Menu items-->
    <div class="menu">
        <div class="item"><a href=""><i class="fas fa-desktop"></i>BORATIKELS</a></div>
        <div class="item"><a class="sub-btn"><i class="fas fa-cash-register"></i>SAMPLE TEXT
        <!--dropdown-->
        <!--dropdown arrow-->
        <i class="fas fa-angle-right dropdown"></i>
        </a>
        <div class="sub-menu">
            <a href="" class="sub-item"><i class="fas fa-user-cog"></i>SAMPLE TEXT</a>
            <a href="" class="sub-item"><i class="fas fa-history"></i>SAMPLE TEXT</a>
            <a href="" class="sub-item"><i class="fas fa-certificate"></i>SAMPLE TEXT</a>
        </div>
        </div>

        <div class="item"><a class="sub-btn"><i class="fas fa-boxes"></i>Inventory
        <!--dropdown-->
        <!--dropdown arrow-->
        <i class="fas fa-angle-right dropdown"></i>
        </a>
        <div class="sub-menu">
            <a href="Inventory.php" class="sub-item"><i class="fas fa-calendar-check"></i>Dashboard</a>
            <a href="" class="sub-item"><i class="fas fa-user-times"></i>Product List</a>
            <a href="" class="sub-item"><i class="fas fa-user-times"></i>Inventory History</a>
        </div>
        </div>

        <div class="item"><a class="sub-btn"><i class="fas fa-users"></i>Customer Record
         <!--dropdown-->
        <!--dropdown arrow-->
        <i class="fas fa-angle-right dropdown"></i>
        </a>
        <div class="sub-menu">
            <a href="" class="sub-item"><i class="fas fa-check-circle"></i>SAMPLE TEXT</a>
            <a href="" class="sub-item"><i class="fas fa-chart-bar"></i>SAMPLE TEXT</a>
        </div>
        </div>

        <div class="item"><a class="sub-btn"><i class="fas fa-user-tie"></i>Employee Sales
         <!--dropdown-->
        <!--dropdown arrow-->
        <i class="fas fa-angle-right dropdown"></i>
        </a>
        <div class="sub-menu">
            <a href="" class="sub-item"><i class="fas fa-wallet"></i>SAMPLE TEXT</a>
            <a href="" class="sub-item"><i class="fas fa-print"></i>SAMPLE TEXT</a>
            <a href="" class="sub-item"><i class="fas fa-hand-holding-usd"></i>SAMPLE TEXT</a>
        </div>
        </div>

        <!--log out button-->
        <div class="item"><a class="sub-btn"><i class="fas fa-sign-out-alt"></i>Log out</a></div>

    </div>
    
</div>
    <!--Jquery CDN link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>