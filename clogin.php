<?php
session_start();
include('connect.php');
if (isset($_POST['btnLogin'])) {
    $email = $_POST['txtemail'];
    $password = $_POST['txtpassword'];

    $check = "SELECT * FROM Customer WHERE CustomerEmail='$email' AND CustomerPassword='$password'";
    $query = mysqli_query($connect, $check);
    $count = mysqli_num_rows($query);





    if ($count > 0) {
        $update = "UPDATE Customer SET ViewCount=ViewCount+1
        WHERE CustomerEmail='$email' AND CustomerPassword='$password'";
        mysqli_query($connect, $update);
        $row = mysqli_fetch_array($query);
        $cusid = $row['CustomerID'];
        $cusname = $row['CustomerName'];
        $_SESSION['cusid'] = $cusid;
        $_SESSION['cusname'] = $cusname;



        echo "<script>alert('Customer Login Successfully')</script>";
        echo "<script>window.location='home.php'</script>";
    } else {
        if (isset($_SESSION['loginError'])) {
            $countError = $_SESSION['loginError'];
            if ($countError == 1) {
                $_SESSION['loginError'] = 2;
                echo "<script>window.alert('Login failed! Please try again! Error Attempt 2')</script>";
            }
            if ($countError == 2) {
                echo "<script>window.alert('Login failed! Error Attempt 3! Account is locked for 10mins! Please try again later.')</script>";
                echo "<script>window.location='logintimer.php'</script>";
            }

        } else {
            $_SESSION['loginError'] = 1;
            echo "<script>window.alert('Login failed! Please try again! Error Attempt 1')</script>";
        }
    }

}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home Gym Equipment- Customer Login Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>homegymequipment@org.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+95932045783</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->



    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">HomeGym</span>Equipment</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a class="nav-item nav-link" href="index.php">Home</a>
                        <a class="nav-item nav-link">Information</a>
                        <a class="nav-item nav-link">Workshop</a>
                        <a class="nav-item nav-link">Wanted</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a class="dropdown-item">Gallery</a>
                                <a class="dropdown-item">Feature</a>
                                <a class="dropdown-item">Profile</a>

                            </div>
                        </div>
                        <a class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->



    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Login</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Login</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Login</h6>
                <h1>Customer Login</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="bg-white" style="padding: 30px;">
                        <div></div>
                        <form action="clogin.php" method="POST" enctype="multipart/form-data">
                            <div class="col-lg-12">
                                <div class="card border-0">
                                    <div class="card-body rounded-bottom bg-white p-5">
                                        <!-- <form action="clogin.php" method="POST"> -->
                                        <div class="form-group">
                                            <input type="email" name="txtemail" class="form-control p-4"
                                                placeholder="Your email" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="txtpassword" class="form-control p-4"
                                                placeholder="Your password" required="required" />
                                        </div>
                                        <div class="input-group-text">
                                            <label>
                                                <input type="checkbox" class="input-group-text"
                                                    onclick="$(this).attr('disabled','disabled');" required="required">
                                                I'm not a robot<img width="30px" height="30px"
                                                    src="https://forum.nox.tv/core/index.php?media/9-recaptcha-png/" /><b>
                                                    <span class="checkmark"><span>&nbsp;</span></span>
                                            </label>
                                        </div><a style="color: darkblue;" href="cregister.php">Do not have an account?
                                            Register First!</a><br><br>

                                        <div>
                                            <button class="btn btn-primary btn-block py-3" name="btnLogin"
                                                type="submit">Login</button>

                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">HomeGym</span>Equipment</h1>
                </a>
                <p>Are you finding equipment for your fitness? Then, contact us and buy competitive and reliable gym
                    equipment.</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>469 West Cooper Street, New York, USA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+95932045783</p>
                <p><i class="fa fa-envelope mr-2"></i>homegymequipment@org.com</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;"
                            placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
        style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">HomeGymEquipment</a>. All Rights Reserved.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50"><a href="https://htmlcodex.com"></a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>