<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UrbanNest</title>
    <meta name="title" content="Wealthome">
    <meta name="description" content="This is a realstate listing property">

    <!--  favicon  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!----------------Custom CSS-------------------------->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="assets/css/profile.css" />

        <!-- custom js link -->
        <script src="./assets/js/script.js" defer> </script>

    <!-----------Sweet Alert-------------------->
    <script src="/asset/js/sweetalert.js"></script>
    <!-- google icon link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0..1,0" />

    <!-----------Favicon---------------->
    <link rel="shortcut icon" href="asset/images/favicon.ico" type="image/x-icon" />

    <!-------------------BootStrap CSS------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!---------------------Owl Carousel Cdn----------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Font Awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'nav.php'; ?>
    <?php
    include 'connection.php';
    ?>
    <?php
    if (isset($_SESSION['id'])) {
        $result = mysqli_query($conn, "SELECT * FROM user WHERE user_id='$_SESSION[id]'") or die("Select Error");
        $row = mysqli_fetch_assoc($result);

        
        echo '
        <main class="main">
            <div class="container">
            <br>
                <div class="background-image">
                <br>
                <img src="./assets/images/bg2.png" alt="Background Image">
                </div>
                <div class="container">
                <h1 class="greet">Welcome, ' . $row['user_name'] . '</h1>
                <div class="profileDiv ">
                    <div class="left ">
                        <div class="user-profile">
                            <div class="avatar">
                                <img src="/asset/images/user.png" alt="" width="100px">
                            </div>
                            <div class="info">
                                <p><b>Name</b>: ' . $row['user_name'] . '</p>
                                <p><b>Email</b>: ' . $row['user_email'] . '</p>
                                <p><b>Number</b>: ' . $row['user_contact'] . '</p>
                                <address><strong>Address</strong>: ' . $row['user_address'] . '</address>
                            </div>
                        </div>
                        <div class="profileBtns">
                            <ul class="btnList">
                                <li id="accountBtn">Account</li>
                            </ul>
                        </div>
                    </div>
                    <div class="profile-details" id="accountDetails" style="display: none;">
                        <div class="det">
                            <form action="" class="profile__form" method="post">
                                <h2 class="login__title">Update Information</h2>

                                <div class="login__group">
                                    <div>
                                        <input type="text" placeholder="Write your name" id="fname" class="login__input" name="Name" value="' . $row['user_name'] . '" />
                                    </div>
                                    <div>
                                        <input type="tel" id="phone" name="phone" placeholder="Enter your telephone number" class="login__input" value="' . $row['user_contact'] . '" pattern="[0-9]{11}">
                                    </div>
                                    <div>
                                        <input type="text" placeholder="Write your Address" id="phone" class="login__input" value="' . $row['user_address'] . '" name="Address"/>
                                    </div>
                                    <div>
                                        <input type="email" placeholder="Write your email" id="email" class="login__input" value="' . $row['user_email'] . '" name="email"/>
                                    </div>
                
                                    <div>
                                        <input type="text" placeholder="Enter your password" id="password" class="login__input" value="' . $row['user_password'] . '"  name="password"/>
                                    </div>
                                </div>
                
                                <div>
                                    <button type="submit" class="login__button profile_update" name="update">Update</button>
                                </div>
                            </form>
                        </div>
                        <div class="det" id="orders"></div>
                    </div>
                </div>
            </div>
                </div>
        </main>';

        echo "
        <script>
            document.getElementById('accountBtn').addEventListener('click', function() {
                document.getElementById('accountDetails').style.display = 'block';
            });
        </script>";
    

    
        //Code for updating data
        if (isset($_POST['update'])) {
            $user_email = null;
            $username = $_POST['Name'];
            $phoneNo = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $address = $_POST['Address'];
            $user_email = $row['user_email'];
            $verify_query1 = mysqli_query($conn, "SELECT user_email FROM user WHERE user_email = '$email' ");

            if (mysqli_num_rows($verify_query1) < 1 || $user_email == $email) {
                
                mysqli_query($conn, "UPDATE user SET user_name ='$username', user_contact='$phoneNo', user_email='$email', user_password='$password', user_address='$address' WHERE user_id='$_SESSION[id]'");
                echo '
                <script>
                    swal({
                        title: "Profile Updated!",
                        text: "Refresh the Page to view updated Info",
                        icon: "success",
                        button: "Ok!",
                    });
                </script>
                ';
            } else {
                echo '
                <script>
                    swal({
                        title: "Email Alreday in Use!",
                        text: "Try again with another email",
                        icon: "error",
                        button: "Ok!",
                    });
                </script>
                ';
            }
        }
    } else {
        echo '
                <script>
                    swal({
                        title: "Login First!",
                        text: "Please Login to view your Profile",
                        icon: "error",
                        button: "Ok!",
                    });
                </script>
                ';
    }
    ?>
    
    <script src="/asset/js/profile.js"></script>
    <script src="/asset/js/script.js"></script>

    <?php include 'footer.php'; ?>
</body>

</html>