<?php include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    <!-- #header -->
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
                        <a href="#" class="navbar-link label-medium"> Buy </a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link label-medium"> Sell </a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link label-medium"> Agent </a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link label-medium"> About </a>
                    </li>

                </ul>
                <div class="navbar-wrapper">
                    <?php
                    if ($_SESSION['valid']) {

                        echo '<a href="logout.php" class="btn-link label-medium"> Logout </a>';
                        echo '<a href="#" class="btn btn-outline label-medium"> Ohayo, ' . $_SESSION['user_username'] . '</a>';
                    } else {
                        echo '<a href="login.php" class="btn-link label-medium"> Login </a>
                            <a href="signup.php" class="btn btn-outline label-medium"> Get Started </a>';
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
    <!-- #MAIN -->

    <main>
        <article>

            <!-- Main HERO -->
            <section class="hero">
                <div class="container">

                <div class="hero-container">
                        <h1 class="headline-large hero-title"> Best properties in Bangladesh </h1>
                        <p class="body-large hero-text">
                            If you are looking for a place where you can be yourself, don't give up. Keep searching
                            until you find a place that feels like home.
                        </p>
                        <br>
                        <form action="./" method="form" class="search-bar">

                            <label class="search-item">
                                <span class="label-medium label">Want to</span>
                                <select name="want-to" class="search-item-field body-medium">
                                    <option value="buy" selected> Buy </option>
                                    <option value="Rent"> Rent </option>
                                </select>
                                <span class="material-symbols-rounded" aria-hidden="true">real_estate_agent</span>
                            </label>

                            <label class="search-item">
                                <span class="label-medium label"> Property Type </span>
                                <select name="property-type" class="search-item-field body-medium">
                                    <option value="any" selected> Any </option>

                                    <optgroup label = "Residential">
                                        <option value="apartment" selected> Apartment </option>
                                        <option value="Room"> Room </option>
                                        <option value="flat"> Flat </option>
                                        <option value="plot"> Plot </option>
                                    </optgroup>
                                    
                                    <optgroup label="Commercial">
                                        <option value="office"> Office </option>
                                        <option value="floor"> Floor </option>
                                    </optgroup>
                                    
                                </select>
                                <span class="material-symbols-rounded" aria-hidden="true">gite</span>
                            </label>
                            
                            <label class="search-item">
                                <span class="label-medium label"> Location </span>
                                <input type="text" name="location" placeholder="Street, City, Zip ..." class="search-item-field body-medium">
                                <span class="material-symbols-rounded" aria-hidden="true">location_on</span>
                            </label>

                            <button type="submit" name="submit" class="search-btn">
                                <span class="material-symbols-rounded" aria-hidden="true">search</span>

                                <span class="label-medium">Search</span>
                            </button>

                        </form>
                    </div>
                    
                    <img src="./assets/images/hero.png" width="816" height="659" role="presentation" class="hero-banner">

                    <img src="./assets/images/bg-pattern.png" width="1240" height="840" role="presentation" class="bg-pattern">

                </div>
            </section>


            <!-- Property Section -->

            <section class="section property" aria-labelledby="property-label">
                <div class="container">

                    <div class="property-list">
                        <div class="card">
                            <div class="card-banner">
                                <figure class="img-holder" style="--width: 585; --height: 390;">
                                    <img src="./assets/images/property-1.jpg" width="585" height="390" alt="COVA Home Realty" class="img-cover">
                                </figure>

                                <span class="badge label-medium">New</span>
                                <button class="icon-btn fav-btn" aria-label="add to favourite" data-fav-toggle-btn>
                                    <span class="material-symbols-rounded" aria-hidden="true">favorite</span>
                                </button>
                            </div>

                            <div class="card-content">
                                <span class="title-large">75,000৳</span>
                                <h3>
                                    <a href="#" class="title-small card-title">Dummy Test 2</a>
                                </h3>
                                <address class="body-medium card-text">
                                    47/1/A, R.K Mission Road, Gopibag, Dhaka- 1203
                                </address>

                                <div class="card-meta-list">
                                    <div class="meta-item">
                                        <span class="material-symbols-rounded meta-icon" aria-hidden="true">bed</span>
                                        <span class="meta-text label-medium">5 Bed</span>
                                    </div>

                                    <div class="meta-item">
                                        <span class="material-symbols-rounded meta-icon" aria-hidden="true">bathtub</span>
                                        <span class="meta-text label-medium">4 Bath</span>
                                    </div>

                                    <div class="meta-item">
                                        <span class="material-symbols-rounded meta-icon" aria-hidden="true">straighten</span>
                                        <span class="meta-text label-medium">2200 sqft</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-banner">
                                <figure class="img-holder" style="--width: 585; --height: 390;">
                                    <img src="./assets/images/property-1.jpg" width="585" height="390" alt="COVA Home Realty" class="img-cover">
                                </figure>

                                <span class="badge label-medium">New</span>
                                <button class="icon-btn fav-btn" aria-label="add to favourite" data-fav-toggle-btn>
                                    <span class="material-symbols-rounded" aria-hidden="true">favorite</span>
                                </button>
                            </div>

                            <div class="card-content">
                                <span class="title-large">75,000৳</span>
                                <h3>
                                    <a href="#" class="title-small card-title">Dummy Test 1</a>
                                </h3>
                                <address class="body-medium card-text">
                                    47/1/A, R.K Mission Road, Gopibag, Dhaka- 1203
                                </address>

                                <div class="card-meta-list">
                                    <div class="meta-item">
                                        <span class="material-symbols-rounded meta-icon" aria-hidden="true">bed</span>
                                        <span class="meta-text label-medium">5 Bed</span>
                                    </div>

                                    <div class="meta-item">
                                        <span class="material-symbols-rounded meta-icon" aria-hidden="true">bathtub</span>
                                        <span class="meta-text label-medium">4 Bath</span>
                                    </div>

                                    <div class="meta-item">
                                        <span class="material-symbols-rounded meta-icon" aria-hidden="true">straighten</span>
                                        <span class="meta-text label-medium">2200 sqft</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <?php
                                $result = mysqli_query($conn, "SELECT * FROM property WHERE prop_id='1'") or die("Select Error");
                                $row = mysqli_fetch_assoc($result);
                                $_SESSION['valid'] = null;
                                $_SESSION['id'] = null;
                                if (is_array($row) && !empty($row)) {
                                    $_SESSION['valid'] = true;
                                    $_SESSION['prop_location'] = $row['prop_location'];
                                    $_SESSION['prop_size'] = $row['prop_size'];
                                    $_SESSION['prop_description'] = $row['prop_description'];
                                    
                                }
                                echo '<div class="card-banner">
                                <figure class="img-holder" style="--width: 585; --height: 390;">
                                    <img src="./assets/images/properties/'.$_SESSION['prop_description'].'" width="585" height="390" alt="COVA Home Realty" class="img-cover">
                                </figure>

                                <span class="badge label-medium">New</span>
                                <button class="icon-btn fav-btn" aria-label="add to favourite" data-fav-toggle-btn>
                                    <span class="material-symbols-rounded" aria-hidden="true">favorite</span>
                                </button>
                            </div>
                            

                            <div class="card-content">
                                <span class="title-large">3,75,000৳</span>
                                <h3>
                                    <a href="#" class="title-small card-title">Dream Home 101</a>
                                </h3>
                                <address class="body-medium card-text">
                                    '.$_SESSION['prop_location'].'
                                </address>

                                <div class="card-meta-list">
                                    <div class="meta-item">
                                        <span class="material-symbols-rounded meta-icon" aria-hidden="true">bed</span>
                                        <span class="meta-text label-medium">5 Bed</span>
                                    </div>

                                    <div class="meta-item">
                                        <span class="material-symbols-rounded meta-icon" aria-hidden="true">bathtub</span>
                                        <span class="meta-text label-medium">4 Bath</span>
                                    </div>

                                    <div class="meta-item">
                                        <span class="material-symbols-rounded meta-icon" aria-hidden="true">straighten</span>
                                        <span class="meta-text label-medium">'.$_SESSION['prop_size'].' sqft</span>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        ?>
                        <div class="card">
                            <div class="card-banner">
                                <figure class="img-holder" style="--width: 585; --height: 390;">
                                    <img src="./assets/images/property-1.jpg" width="585" height="390" alt="COVA Home Realty" class="img-cover">
                                </figure>

                                <span class="badge label-medium">New</span>
                                <button class="icon-btn fav-btn" aria-label="add to favourite" data-fav-toggle-btn>
                                    <span class="material-symbols-rounded" aria-hidden="true">favorite</span>
                                </button>
                            </div>

                            <div class="card-content">
                                <span class="title-large">75,000৳</span>
                                <h3>
                                    <a href="#" class="title-small card-title">Dummy Test 4</a>
                                </h3>
                                <address class="body-medium card-text">
                                    47/1/A, R.K Mission Road, Gopibag, Dhaka- 1203
                                </address>

                                <div class="card-meta-list">
                                    <div class="meta-item">
                                        <span class="material-symbols-rounded meta-icon" aria-hidden="true">bed</span>
                                        <span class="meta-text label-medium">5 Bed</span>
                                    </div>

                                    <div class="meta-item">
                                        <span class="material-symbols-rounded meta-icon" aria-hidden="true">bathtub</span>
                                        <span class="meta-text label-medium">4 Bath</span>
                                    </div>

                                    <div class="meta-item">
                                        <span class="material-symbols-rounded meta-icon" aria-hidden="true">straighten</span>
                                        <span class="meta-text label-medium">2200 sqft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </article>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-brand">
                    <a href="#" class="logo">
                        <img src="./assets/images/urbanNest.png" width="190" height="28" alt="UrbanNest">
                    </a>
                </div>

                <nav class="footer-nav" aria-labelledby="nav-label-1">
                    <p class="title-small footer-list-title" id="nav-label-1">Quick Link</p>
                    <ul class="footer-list">
                        <li>
                            <a href="#" class="body-medium footer-link">Home</a>
                        </li>
                        <li>
                            <a href="#" class="body-medium footer-link">Buy</a>
                        </li>
                        <li>
                            <a href="#" class="body-medium footer-link">Sell</a>
                        </li>
                        <li>
                            <a href="#" class="body-medium footer-link">Agent</a>
                        </li>
                    </ul>
                </nav>

                <nav class="footer-nav" aria-labelledby="nav-label-2">
                    <p class="title-small footer-list-title" id="nav-label-2">Support</p>
                    <ul class="footer-list">
                        <li>
                            <a href="#" class="body-medium footer-link">About us</a>
                        </li>
                        <li>
                            <a href="#" class="body-medium footer-link">Contact us</a>
                        </li>
                        <li>
                            <a href="#" class="body-medium footer-link">Privacy and Policy</a>
                        </li>
                        <li>
                            <a href="#" class="body-medium footer-link">Terms and Condition</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
        <div class="footer-bottom">
            <div class="comtainer">
                <p class="copyright body-medium">
                    Copyright 2024 SHAFT.EXE
                </p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

<?php
    if (isset($_POST["submit"])){
        $str = $_POST["location"];
        $sth = $conn -> prepare("SELECT * FROM 'property' WHERE prop_location = '$str'");
        $sth -> setfetchMode(PDO:: FETCH_OBJ);
        $sth -> execute();
        
        if ($row = $sth-> fetch()){
            ?>
            <br> <br> <br>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Bed</th>
                    <th>Bath</th>
                </tr>
                <tr>
                    <td><? php echo $row-> prop_name; ?></td>
                    <td><? php echo $row-> prop_bed ?></td>
                    <td><? php echo $row-> prop_bath ?></td>
                </tr>
            </table>
        }
    }

