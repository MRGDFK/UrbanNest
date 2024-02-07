<?php include 'connection.php'; 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UrbanNest</title>
    <meta name="title" content="Wealthome">
    <meta name="description" content="This is a realstate listing property">

    <!--  favicon  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- google icon link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0..1,0" />

    <!-- custom css color -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- custom js link -->
    <script src="./assets/js/script.js" defer> </script>

    <!-- preload image -->

</head>

<body>
    <header class="header" data-header>
        <div class="container">
            <a href="index.php" class="logo">
                <img src="./assets/images/urbanNest.png" width="190" height="28" alt="UrbanNest">
            </a>
            <nav class="navbar" data-navbar>
                <ul class="navbar-list">
                    <li>
                        <a href="index.php" class="navbar-link label-medium active"> Home </a>
                    </li>

                    <li>
                        <a href="buy.php" class="navbar-link label-medium"> Buy </a>
                    </li>

                    <li>
                        <a href="sell2.php" class="navbar-link label-medium"> Sell </a>
                    </li>

                    <li>
                        <a href="agent.php" class="navbar-link label-medium"> Agent </a>
                    </li>

                    <li>
                        <a href="aboutus.php" class="navbar-link label-medium"> About </a>
                    </li>

                </ul>

                <div class="navbar-wrapper">
                    <?php 
                        if($_SESSION['valid']){

                            echo '<a href="logout.php" class="btn-link label-medium"> Logout </a>';
                            echo '<a href="#" class="btn btn-outline label-medium"> Hello, '.$_SESSION['user_username'].' '.$_SESSION['agent_username'].'</a>';
                        
                        }
                        else{
                            echo '<a href="login.php" class="btn-link label-medium"> Login </a>
                            <a href="signup.php" class="btn btn-outline label-medium"> Get Started </a>;
                            <a href="agent_signup.php" class="btn btn-outline label-medium"> Reg a AGENT </a>';
                        }
                    ?>
                    

                </div>
            </nav>

            <button class="nav-toggle-btn icon-btn" aria-label="toggle navbar" data-nav-toggler>
                <span class="material-symbols-rounded open" aria-hidden="true">menu</span>

                <span class="material-symbols-rounded close" aria hidden="true">close </span>
            </button>
        </div>
    </header>

</body>

</html>

