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
    <!-- #header -->
    <header class="header" data-header>
        <div class="container">
            <a href="#" class="logo">
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
                            echo '<a href="#" class="btn btn-outline label-medium"> Ohayo, '.$_SESSION['user_username'].'</a>';
                        
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

    <main>
        <article>
            <!-- Main HERO -->
            <section class="hero">
                <div class="container">

                    <div class="hero-container">
                        <h1 class="headline-large hero-title"> Find a place where you can be yourself </h1>
                        <p class="body-large hero-text">
                            If you are looking for a place where you can be yourself, don't give up. Keep searching
                            until you find a place that feels like home.
                        </p>
                        <br>
                        <form action="" method="post" class="search-bar">

                            <label class="search-item">
                                <span class="label-medium label">Want to</span>
                                <select name="want-to" class="search-item-field body-medium">
                                    <option value="buy" selected> Buy </option>
                                    <option value="Sell"> Sell </option>
                                    <option value="Rent"> Rent </option>
                                </select>
                                <span class="material-symbols-rounded" aria-hidden="true">real_estate_agent</span>
                            </label>

                            <label class="search-item">
                                <span class="label-medium label"> Property Type </span>
                                <select name="property-type" class="search-item-field body-medium">
                                    <option value="any" selected> Any </option>
                                    <option value="houses"> Houses </option>
                                    <option value="apartments"> Flat </option>
                                    <option value="plot"> Plot </option>



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

            <section clss="search-results">
                <?php
                if (isset($_POST["submit"])) {
                    $loc = mysqli_real_escape_string($conn, $_POST['location']);
                    $loc = filter_var($loc, FILTER_SANITIZE_STRING);
                    
                    $want = mysqli_real_escape_string($conn, $_POST['want-to']);
                    $want = filter_var($want, FILTER_SANITIZE_STRING);

                    $type = mysqli_real_escape_string($conn, $_POST['property-type']);
                    $type = filter_var($type, FILTER_SANITIZE_STRING);

                    /*$type = mysqli_real_escape_string($conn, $_POST['property-type']);
                        $type = filter_var($loc, FILTER_SANITIZE_STRING);*/

                    $searchQuery = "SELECT * FROM property WHERE prop_location = '$loc' OR prop_status LIKE '%{$type}%' OR prop_status LIKE '%{$want}%'";
                    $searchResult =  mysqli_query($conn, $searchQuery);

                    if ($searchResult) {
                        echo '<div class="property-list">';
                        while ($row = mysqli_fetch_assoc($searchResult)) {
                            echo '<div class="card">';
                            echo '<div class="card-banner">';
                            echo '<figure class="img-holder" style="--width: 585; --height: 390;">';
                            echo '<img src="./assets/images/properties/' . $row['prop_image'] . '" width="585" height="390" alt="Property Image" class="img-cover">';
                            echo '</figure>';
                            echo '<button class="icon-btn fav-btn" aria-label="add to favourite" data-fav-toggle-btn>';
                            echo '<span class="material-symbols-rounded" aria-hidden="true">favorite</span>';
                            echo '</button>';
                            echo '</div>';

                            echo '<div class="card-content">';
                            echo '<span class="title-large">' . $row['prop_price'] . '৳</span>';
                            echo '<h3><a href="#" class="title-small card-title">' . $row['prop_status'] . '</a></h3>';
                            echo '<address class="body-medium card-text">' . $row['prop_location'] . '</address>';

                            echo '<div class="card-meta-list">';
                            echo '<div class="meta-item">';
                            echo '<span class="material-symbols-rounded meta-icon" aria-hidden="true">bed</span>';
                            echo '<span class="meta-text label-medium">' . $row['prop_bed'] . ' Bed</span>';
                            echo '</div>';

                            echo '<div class="meta-item">';
                            echo '<span class="material-symbols-rounded meta-icon" aria-hidden="true">bathtub</span>';
                            echo '<span class="meta-text label-medium">' . $row['prop_bath'] . ' Bath</span>';
                            echo '</div>';

                            echo '<div class="meta-item">';
                            echo '<span class="material-symbols-rounded meta-icon" aria-hidden="true">straighten</span>';
                            echo '<span class="meta-text label-medium">' . $row['prop_size'] . ' sqft</span>';
                            echo '</div>';

                            echo '</div>'; // .card-meta-list
                            echo '</div>'; // .card-content
                            echo '</div>'; // .card
                        }
                        echo '</div>';
                    } else {
                        echo "Error in search QUERY" . mysqli_errno($conn);
                    }
                }
                ?>

            </section>

            <!-- Property Section -->

            <section class="section property" aria-labelledby="property-label">
                <div class="container">
                    <div class="title-wrapper">
                        <div>
                            <h2 class="section-title headline-small">🏡 Discover Your Dream Home Nearby!</h2>
                            <p class="section-text body-large">
                                Explore a handpicked collection of properties that epitomize luxury,
                                comfort, and convenience. Whether you're seeking a modern urban retreat,
                                a charming suburban oasis, or a serene countryside escape, our comprehensive
                                listings showcase the best real estate options available around your chosen
                                area.
                            </p>
                        </div>

                        <a href="buy.php" class="btn btn-outline">
                            <span class="label-medium">Explore</span>
                            <span class="material-symbols-rounded" aria-hidden="true">arrow_outward</span>
                        </a>
                    </div>
                    <h2 class="section-title headline-small">⌛ Recent Properties </h2>
                    <br>
                    <div class="property-list">
                    

                    <?php
                        $recents = "SELECT * FROM property ORDER BY added_at DESC LIMIT 8";
                        $recents = mysqli_query($conn,$recents);
                        if ($recents->num_rows>0){
                            while($row = $recents->fetch_assoc()) {
                            echo '<div class="card">';
                            echo '<div class="card-banner">';
                            echo '<figure class="img-holder" style="--width: 585; --height: 390;">';
                            echo '<img src="./assets/images/properties/' . $row['prop_image'] . '" width="585" height="390" alt="Property Image" class="img-cover">';
                            echo '</figure>';
                            echo '<button class="icon-btn fav-btn" aria-label="add to favourite" data-fav-toggle-btn>';
                            echo '<span class="material-symbols-rounded" aria-hidden="true">favorite</span>';
                            echo '</button>';
                            echo '</div>';

                            echo '<div class="card-content">';
                            echo '<span class="title-large">' . $row['prop_price'] . '৳</span>';
                            echo '<h3><a href="#" class="title-small card-title">' . $row['prop_title'] . '</a></h3>';
                            echo '<address class="body-medium card-text">' . $row['prop_location'] . '</address>';

                            echo '<div class="card-meta-list">';
                            echo '<div class="meta-item">';
                            echo '<span class="material-symbols-rounded meta-icon" aria-hidden="true">bed</span>';
                            echo '<span class="meta-text label-medium">' . $row['prop_bed'] . ' Bed</span>';
                            echo '</div>';

                            echo '<div class="meta-item">';
                            echo '<span class="material-symbols-rounded meta-icon" aria-hidden="true">bathtub</span>';
                            echo '<span class="meta-text label-medium">' . $row['prop_bath'] . ' Bath</span>';
                            echo '</div>';

                            echo '<div class="meta-item">';
                            echo '<span class="material-symbols-rounded meta-icon" aria-hidden="true">straighten</span>';
                            echo '<span class="meta-text label-medium">' . $row['prop_size'] . '</span>';
                            echo '</div>';

                            echo '</div>'; // .card-meta-list
                            echo '</div>'; // .card-content
                            echo '</div>'; // .card
                            }
                        }
                    ?>

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
</body>

</html>

