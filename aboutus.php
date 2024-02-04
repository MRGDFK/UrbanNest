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
    <link rel="stylesheet" href="./assets/css/about.css">

    <!-- custom js link -->
    <script src="./assets/js/script.js" defer> </script>

    <!-- preload image -->

</head>

<body>
    <header class="header" data-header>
        <div class="container">
            <a href="#" class="logo">
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
                        <a href="#" class="navbar-link label-medium"> Sell </a>
                    </li>

                    <li>
                        <a href="agent.php" class="navbar-link label-medium active"> Agent </a>
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
    <?php
    if (!empty($_POST["send"])) {
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $userEmnail = $_POST["userEmail"];
        $mailSub = $_POST["subject"];
        $msg = $_POST["message"];
        $toEmail = $_POST["sharjil.cse.20210104108@aust.edu"];

        $mailHeaders = "Name: " . $name .
            "\r\n Email: " . $userEmnail .
            "\r\n Subject: " . $mailSub .
            "\r\n Phone: " . $phone .
            "\r\n Message: " . $msg . "\r\n";

        if (mail($toEmail, $name, $mailHeaders)) {
            $message = "Your Info is Received Successfully";
        }
    }
    ?>
    <main>
        <div class="body-container">
            <br>
        
            <div class="background-image">
                <br>
                <img src="./assets/images/bg2.png" alt="Background Image">
            </div>
            <h1 >Welcome to UrbanNest - Your Premier Real Estate Listing Platform</h1>
            <p style="color: white">Discover the perfect home with UrbanNest, your go-to destination for real estate listings. Whether you're buying, selling, or looking for an expert agent, we've got you covered.</p>
            <br>
            <br>
            <!-- Highlighted Features -->
            <div class="highlighted-features">
                <h2>Why Choose UrbanNest?</h2>
                <ul>
                    <li>Extensive Property Listings: Explore a diverse range of residential and commercial properties to find your dream space.</li>
                    <li>Expert Agents: Connect with experienced real estate agents who understand your needs and guide you through the entire process.</li>
                    <li>Effortless Buying and Selling: Simplify your real estate transactions with our user-friendly platform and streamlined processes.</li>
                    <li>Secure and Transparent: Trust in a secure and transparent platform that prioritizes your privacy and ensures a smooth experience.</li>
                </ul>
            </div>
            <br>
            <!-- Contact Form Section -->
            <h1 style="color: black";>Connect with us</h1>
            <p>We would love to<br>respond your querries!</p>
            <br>
            <div class="contact-box">
                <div class="contact-left">
                    <h3>Send your request</h3>
                    <form method="post">
                        <div class="input-row">
                            <div class="input-group">
                                <label>Name</label>
                                <input type="text" name="name" required>
                            </div>
                            <div class="input-group">
                                <label>Phone</label>
                                <input type="text" name="phone" required>
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-group">
                                <label>Email</label>
                                <input type="email" name="userEmail" required>
                            </div>
                            <div class="input-group">
                                <label>Subject</label>
                                <input type="text" name="subject">
                            </div>
                        </div>
                        <label>Messege</label>
                        <textarea rows="5" name="message"></textarea>
                        <button type="Submit" name="send" value="Submit">SUBMIT</button>
                    </form>
                </div>
                <div class="contact-right">
                    <h3>Reach Us</h3>
                    <table>
                        <tr>
                            <td>Email</td>
                            <td>urbannest@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>+880 1770 244 500</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>Dhaka, Bangladesh</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
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