<?php include("connection.php");
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
    <link rel="stylesheet" href="./assets/css/form.css">

    <!-- custom js link -->
    <script src="./assets/js/script.js" defer> </script>


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
                        <a href="index.php" class="navbar-link label-medium"> Home </a>
                    </li>

                    <li>
                        <a href="buy.php" class="navbar-link label-medium"> Buy </a>
                    </li>

                    <li>
                        <a href="sell2.php" class="navbar-link label-medium active"> Sell </a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link label-medium"> Agent </a>
                    </li>

                    <li>
                        <a href="aboutus.php" class="navbar-link label-medium"> About </a>
                    </li>

                </ul>

                <div class="navbar-wrapper">
                    <a href="login.php" class="btn-link label-medium"> Login </a>
                    <a href="#" class="btn btn-outline label-medium"> Get Started </a>
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
            <section class="hero">
                <div class="container">

                    <div class="hero-container">

                        <h1 class="headline-large hero-title"> Property Info </h1>
                        <br>
                        <div class="box form-box">
                            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                                <div class="field input">
                                    <label for="email" style="color: #0D3166;">Property Title</label>
                                    <input type="text" name="title" id="email" autocomplete="off" required>
                                </div>

                                <div class="field input">
                                    <label for="email" style="color: #0D3166;">Property Location</label>
                                    <input type="text" name="location" id="email" autocomplete="off" required>
                                </div>

                                <div class="field input">
                                    <label for="email" style="color: #0D3166;">Price</label>
                                    <input type="text" name="price" id="email" autocomplete="off" required>
                                </div>

                                <div class="field input">
                                    <label for="email" style="color: #0D3166;">📏 Area</label>
                                    <input type="text" name="area" id="email" autocomplete="off" required>
                                </div>

                                <div class="field input">
                                    <label for="email" style="color: #0D3166;">🛏️ Bed</label>
                                    <input type="text" name="bed" id="email" autocomplete="off" required>
                                </div>

                                <div class="field input">
                                    <label for="email" style="color: #0D3166;">🛁 Bath</label>
                                    <input type="text" name="bath" id="email" autocomplete="off" required>
                                </div>

                                <div class="field input">
                                    <label for="email" style="color: #0D3166;">Description (optional) </label>
                                    <input type="text" name="desc" id="email" autocomplete="off" required>
                                </div>

                                <div class="flex">
                                    <div class="box">
                                        <p style="color: black;">Image 01 *</p>
                                        <input type="file" name="image_01" class="input" accept="image/*">
                                </div>


                                <div class="field">

                                    <input type="submit" class="btn-f" name="submit" value="Post" required>
                                </div>
                            </form>
                        </div>
                    </div>

                    <img src="./assets/images/hero.png" width="816" height="659" role="presentation" class="hero-banner">

                    <img src="./assets/images/bg-pattern.png" width="1240" height="840" role="presentation" class="bg-pattern">

                </div>
            </section>
        </article>
    </main>

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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_SPECIAL_CHARS);
    $location = filter_input(INPUT_POST, "location", FILTER_SANITIZE_SPECIAL_CHARS);
    $price = filter_input(INPUT_POST, "price", FILTER_SANITIZE_SPECIAL_CHARS);
    $area = filter_input(INPUT_POST, "area", FILTER_SANITIZE_SPECIAL_CHARS);
    $bed = filter_input(INPUT_POST, "bed", FILTER_SANITIZE_SPECIAL_CHARS);
    $bath = filter_input(INPUT_POST, "bath", FILTER_SANITIZE_SPECIAL_CHARS);
    $desc = filter_input(INPUT_POST, "desc", FILTER_SANITIZE_SPECIAL_CHARS);
    $image_01 = filter_input(INPUT_POST, "image_01", FILTER_SANITIZE_SPECIAL_CHARS);

    //$file_name = $_FILES['image_01']['name'];

   

    if (empty($title)) {
        echo "Please ENter a username";
    } elseif (empty($price)) {
        echo "Please ENter a name";
    } elseif (empty($area)) {

        echo "Please ENter a email";
    } elseif (empty($location)) {

        echo "Please ENter a password";
    } else {

        $sql = "INSERT INTO property ( seller_id, prop_title, prop_location, prop_price, prop_size, prop_bed, prop_bath, prop_description, prop_image) 
                    VALUES ( 1111, '$title', '$location', '$price', '$area', '$bed', '$bath', '$desc', '$image_01' )";
                    move_uploaded_file($image_01_tmp_name, $file_name);
        echo '<script>window.location="index.php"</script>';
        mysqli_query($conn, $sql);
    }
}

?>