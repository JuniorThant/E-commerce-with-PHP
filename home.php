<?php
include('connect.php');
session_start();
$cusid = $_SESSION['cusid'];
$select = "SELECT * FROM Customer WHERE CustomerID='$cusid'";
$ret = mysqli_query($connect, $select);
$count = mysqli_num_rows($ret);
for ($i = 0; $i < $count; $i++) {
    $row = mysqli_fetch_array($ret);
}
$CustomerID = $row['CustomerID'];
$CustomerName = $row['CustomerName'];
$Email = $row['CustomerEmail'];
$Phone = $row['CustomerPhone'];
$Address = $row['CustomerAddress'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home Gym Equipment- Home Page</title>
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
                <div class="col-lg-3 text-center text-lg-right">
                    <div class="input-group">
                        <input type="text" class="form-control p-4" placeholder="Search">
                        <div class="input-group-append">
                            <span class="input-group-text bg-primary border-primary text-white"><a class="text-white"
                                    href="home.php"><i class="fa fa-search"></i></a></span>
                        </div>
                    </div>

                </div>

                <div class="col-lg-1 text-center text-lg-right">
                    <?php

                    if (!isset($_SESSION['cusid'])) {
                        echo "<script>alert(Please Login)</script>";
                    } else {
                        $cusid = $_SESSION['cusid'];
                        $output = "SELECT * FROM Customer WHERE CustomerID='$cusid'";
                        $query = mysqli_query($connect, $output);
                        $count = mysqli_num_rows($query);
                        if ($count > 0) {
                            $data = mysqli_fetch_array($query);
                            $view = $data['ViewCount'];
                            echo "<a href='#'><img src='img/vc.jpg' width='20px' height='20px'></a>" . $view;
                        }
                    }
                    ?>
                </div>
                <div class="col-lg-1 text-center text-lg-right">

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
                    <h2 class="m-0 text-primary"><span class="text-dark">HomeGym</span>Equipment</h2>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="home.php" class="nav-item nav-link active">Home</a>
                        <a href="information.php" class="nav-item nav-link">Information</a>
                        <a href="workshop.php" class="nav-item nav-link">Workshop</a>
                        <a href="wanted.php" class="nav-item nav-link">Wanted</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="gallery.php" class="dropdown-item">Gallery</a>
                                <a href="feature.php" class="dropdown-item">Feature</a>
                                <?php echo "<a href='customerprofile.php?CustomerID=$CustomerID' class='dropdown-item'>My Profile</a>"; ?>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->





    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Gym Equipment Sales</h4>
                            <h1 class="display-3 text-white mb-md-4">For Your Fitness & Health</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Gym Equipment Sales</h4>
                            <h1 class="display-3 text-white mb-md-4">For Your Beauty</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>






    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/Gym1.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase spacing">Information</h6>
                        <h6 class="mb-3">
                            <p> When it comes to gym equipment, there are a ton of different brands, types, and styles
                                of equipment; it can get a little overwhelming. From treadmills and rowing machines to
                                adjustable dumbbells and kettlebells, a fitness business often requires a lot of
                                different types of equipment to create the very best member experience.</p> <br>

                            <p> The ever-expanding gym equipment market and increasing demand for fitness mean there is
                                a wide range of fitness equipment available on the market. Interest in home gym
                                equipment continues to rise and the demand for Bluetooth-connected, smart, and
                                high-quality gym equipment is clear. It’s not just businesses that are buying gym
                                equipment but home users too. </p>
                            <div class="row mb-4">
                                <div class="col-6">
                                    <img class="img-fluid" src="img/Gym2.jpg" alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="img/Gym3.jpg" alt="">
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                            style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Competitive Pricing</h5>
                            <p class="m-0">We sell the home gym equipment with suitable price.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3 servicespace"
                            style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Best Services</h5>
                            <p class="m-0">We offer the best services such as repairing,besides selling equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                            style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Best Qualities</h5>
                            <p class="m-0">We gurantee that our equipment has the best qualities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="text-center">
        <video width="400px" controls="">
            <source src="img/gvideo.mp4" type="video/webm">
        </video>
        <video width="400px" controls="">
            <source src="img/gvideo1.mp4" type="video/webm">
        </video>
    </div>

    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"></h6>
                <h1>Our Products</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/GL1.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">

                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/GL2.png" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">

                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/GL6.png" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">

                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/GL4.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">

                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/GL9.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">

                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/GL8.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">

                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">

                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="wanted.php"><button class="btn btn-primary btn-block py-3" name="btnShopNow" type="submit">
                            <h3 class="text-white">Shop Now >></h3>
                        </button>
                </div></a>


                <div class="container-fluid py-5">
                    <div class="container pt-5 pb-3">
                        <div class="text-center mb-3 pb-3">
                            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"></h6>
                            <h1>Our Repair Service</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-6 mb-4">
                                Fitness equipment repair and maintenance of treadmills, ellipticals, stationary bikes,
                                steppers rowers, and strength equipment; Gym Tech does it all!

                                Keep your equipment operating in pristine condition by choosing Gym Tech for all your
                                fitness equipment repair and maintenance needs.

                                With over 15 years of experience in the industry, you can rest assured that Gym Tech can
                                tackle any needed repairs on all your fitness equipment.

                                Our technicians are highly trained in the field and factory certified by the fitness
                                equipment manufacturers.

                                Gym Tech has worked with large institutions such as Condo & Co-op fitness facilities,
                                large gyms (chains & private), hospitals, and schools.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mb-3 pb-3">
                    <p><iframe width="800" height="600" src="https://www.youtube.com/embed/Dk3HQOQt7xg"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></p>
                </div>


                <div class="container-fluid py-5">
                    <div class="container pt-5 pb-3">
                        <div class="text-center mb-3 pb-3">
                            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"></h6>
                            <h1>Our Repairers</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                                <div class="team-item bg-white mb-4">
                                    <div class="team-img position-relative overflow-hidden">
                                        <img class="img-fluid w-100" src="img/Rpr2.jpeg" alt="">
                                        <div class="team-social">
                                            <a class="btn btn-outline-primary btn-square" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-outline-primary btn-square" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-outline-primary btn-square" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-outline-primary btn-square" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-center py-4">
                                        <h5 class="text-truncate">James George</h5>
                                        <p class="m-0">This technician has really strong experiences in repairing
                                            machines.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                                <div class="team-item bg-white mb-4">
                                    <div class="team-img position-relative overflow-hidden">
                                        <img class="img-fluid w-100" src="img/Rpr4.jpg" alt="">
                                        <div class="team-social">
                                            <a class="btn btn-outline-primary btn-square" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-outline-primary btn-square" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-outline-primary btn-square" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-outline-primary btn-square" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-center py-4">
                                        <h5 class="text-truncate">Zan Cook</h5>
                                        <p class="m-0">This is 10 years experienced technician.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                                <div class="team-item bg-white mb-4">
                                    <div class="team-img position-relative overflow-hidden">
                                        <img class="img-fluid w-100" src="img/Rpr5.jpg" alt="">
                                        <div class="team-social">
                                            <a class="btn btn-outline-primary btn-square" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-outline-primary btn-square" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-outline-primary btn-square" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-outline-primary btn-square" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-center py-4">
                                        <h5 class="text-truncate">Gregory</h5>
                                        <p class="m-0">He can repair all the equipment with specifications.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                                <div class="team-item bg-white mb-4">
                                    <div class="team-img position-relative overflow-hidden">
                                        <img class="img-fluid w-100" src="img/Rpr3.jpg" alt="">
                                        <div class="team-social">
                                            <a class="btn btn-outline-primary btn-square" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-outline-primary btn-square" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-outline-primary btn-square" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-outline-primary btn-square" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-center py-4">
                                        <h5 class="text-truncate">Mozart</h5>
                                        <p class="m-0">He gets good reviews in repairing and he is 15 years experienced.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






                </a>
                </a>
                </p>
            </div>
        </div>
    </div>
    </div>

    <div class="text-center">
        <h2>Our Fitness Store Location</h2>
        <p>&nbsp</p>
        <p>&nbsp</p>
        <p><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d679.7775936914833!2d-117.1566033988869!3d32.8332006405072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dbff9a29a8117d%3A0xea03b6613ef640d!2sFitness%20Warehouse%20USA%20-%20Home%20Gym%20-%20Exercise%20Equipment%20San%20diego!5e0!3m2!1sen!2smm!4v1662051782927!5m2!1sen!2smm"
                width="1200" height="600" style="border:100;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe></p>
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
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a><br>

                </div>
                You are at Home Page
            </div>

            <div class="col-lg-3 col-md-6 mb-5">

            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Useful Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Information</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Products</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Workshop</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Gallery</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Feature</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Privacy & Policy</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>7586 Clairemont Mesa Blvd, San Diego, CA 92111, USA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+95932045783</p>
                <p><i class="fa fa-envelope mr-2"></i>homegymequipment@org.com</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;"
                            placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Send</button>
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




    <!-- JavaScript Libraries -->
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