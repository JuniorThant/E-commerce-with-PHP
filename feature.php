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
    <title>Home Gym Equipment- Feature Page</title>
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
                    <h2 class="m-0 text-primary"><span class="text-dark">HomeGym</span>Equipment</h2>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="home.php" class="nav-item nav-link">Home</a>
                        <a href="information.php" class="nav-item nav-link">Information</a>
                        <a href="workshop.php" class="nav-item nav-link">Workshop</a>
                        <a href="wanted.php" class="nav-item nav-link">Wanted</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link active dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="gallery.php" class="dropdown-item">Gallery</a>
                                <a href="feature.php" class="dropdown-item active">Feature</a>
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

    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Feature</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Feature</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <?php
    include('connect.php');
    ?>


    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">

                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="ImageDW1/wt12.jpg" alt="">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">01</h6>
                                    <small class="text-white text-uppercase">Jan</small>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <a class="text-primary text-uppercase text-decoration-none" href="">HGE</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Technolgies</a>
                            </div>
                            <h2 class="mb-3">Wearable Technologies</h2>
                            <p>It seems like everything nowadays is a “smart” device; Smart toasters. Smart dog collars.
                                Smart homes. In the age of “smart”, there is nothing more intelligent or more innovative
                                than the devices being produced by the wearables industry. These devices help collect
                                and analyze real-time personal data that informs us on everything from our health to our
                                workouts. They’ve become extremely popular tools to help us stay informed and in-touch
                                with ourselves to the point that one in every three people in the US now sport a
                                wearable device.

                                What exactly is a wearable? Wearables are electronic devices that are worn on a person
                                (usually close to the skin) in order to accurately relay important medical, biological
                                and exercise data to a database. Wearables have made the IoT industry the
                                nearly-trillion dollar behemoth it is today. Your Apple Watch and Fitbit are classic
                                examples of wearable technology, but those aren’t the only devices being developed
                                today. In addition to smart watches, VR and AR technology, smart jackets and a wide
                                variety of other gadgets are leading us towards a better-connected lifestyle. Each
                                device’s main job is to collect millions of data points that range from how many steps
                                you take to your heart rate. And it’s a booming industry. In fact, the wearables
                                industry is expected to balloon to a whopping $77 billion by 2025.
                            <h4 class="mb-3">Smart Watch, EVERSHOP 1.5 INCHES
                            </h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="ImageDW1/<?php $select = "SELECT * FROM FProduct Where FProductID=1";
                            $run = mysqli_query($connect, $select);
                            $count = mysqli_num_rows($run);
                            $data = mysqli_fetch_array($run);
                            $FProductID = $data['FProductID'];
                            $Image1 = $data['Image1'];
                            echo $Image1 ?>">
                            <p>You’ve probably seen the new fancy-schmancy watches that some people wear and wonder to
                                yourself, “What’s so special about them?” Smartwatches like these are considered
                                wearable technology and are typically meant to perform the various functions of a
                                smartphone, minus the phone. Some devices are even used to monitor the body’s physical
                                activity with health apps. They might seem useful now, but what’s the endgame for
                                wearable technology?</p>
                            <h4 class="mb-3">Sony Smart Eye Glass
                                </h5>
                                <img class="img-fluid w-50 float-right ml-4 mb-2" src="ImageDW1/<?php $select = "SELECT * FROM FProduct Where FProductID=2";
                                $run = mysqli_query($connect, $select);
                                $count = mysqli_num_rows($run);
                                $data = mysqli_fetch_array($run);
                                $FProductID = $data['FProductID'];
                                $Image1 = $data['Image1'];
                                echo $Image1 ?>">
                                <p>Second to Google, who provides a relevant success in functionality, Sony Smart
                                    Eyeglass has the ugliest design. A thick frame makes it unpleasant to the eyes.
                                    Another thing is that it only provides a black and green display projecting the
                                    image along the lenses.

                                    Sony Smart eyeglass requires a wire to connect to its external component making it
                                    unattractive but it can also be controlled by a voice command. The touch pad serves
                                    as a control pad for the glass.

                                    Sony like Google has offers many apps and it includes a navigational app, tourism
                                    apps, facial recognition apps and a speech translation apps. Sony Smart Eyeglass
                                    also provides game application like AR shooting game.
                                </p>
                                <h4 class="mb-3">Samsung HMD Odyssey
                                    </h5>
                                    <img class="img-fluid w-50 float-left ml-4 mb-2" src="ImageDW1/<?php $select = "SELECT * FROM FProduct Where FProductID=3";
                                    $run = mysqli_query($connect, $select);
                                    $count = mysqli_num_rows($run);
                                    $data = mysqli_fetch_array($run);
                                    $FProductID = $data['FProductID'];
                                    $Image1 = $data['Image1'];
                                    echo $Image1 ?>">
                                    <p>A few years back did you ever think of a shoe that can efficiently track your
                                        movements, and also evaluate the footsteps? As well as a shoe is evaluating your
                                        walking patterns and loads of other health metrics just while you are wearing it
                                        and performing your day to day activities?
                                        A smart shoe has a tracker in it which helps you to evaluate how many steps you
                                        have taken, which one is the most touched-down area in your feet, how many
                                        calories did you burn, how much more you should burn in a day. Also, a smart
                                        shoe has features like changing its color with LED strip lights, auto-tightening
                                        the shoelaces and more.

                                        A smart shoe is pretty much capable of providing you all the needful health
                                        metrics so that you can keep a tab and improve your health. It’s very impressive
                                        how technology is actually helping the mass to improve their health, in a world
                                        where it is debatable whether this rapid evolution of technology is beneficial
                                        or not.
                                    </p>

                        </div>

                    </div>



                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">






                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <?php $select = "SELECT * FROM FProduct Where FProductID=1";
                                    $run = mysqli_query($connect, $select);
                                    $count = mysqli_num_rows($run);
                                    $data = mysqli_fetch_array($run);
                                    $FProductID = $data['FProductID'];
                                    echo "<a href='fproductdetails.php?FProductID=" . $data['FProductID'] . "'><i class='fa fa-angle-right text-primary mr-2'></i>Smart Watch</a>"; ?>
                                    <span class="badge badge-primary badge-pill">150</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <?php $select = "SELECT * FROM FProduct Where FProductID=2";
                                    $run = mysqli_query($connect, $select);
                                    $count = mysqli_num_rows($run);
                                    $data = mysqli_fetch_array($run);
                                    $FProductID = $data['FProductID'];
                                    echo "<a href='fproductdetails.php?FProductID=" . $data['FProductID'] . "'><i class='fa fa-angle-right text-primary mr-2'></i>Smart Glasses</a>"; ?>
                                    <span class="badge badge-primary badge-pill">131</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <?php $select = "SELECT * FROM FProduct Where FProductID=3";
                                    $run = mysqli_query($connect, $select);
                                    $count = mysqli_num_rows($run);
                                    $data = mysqli_fetch_array($run);
                                    $FProductID = $data['FProductID'];
                                    echo "<a href='fproductdetails.php?FProductID=" . $data['FProductID'] . "'><i class='fa fa-angle-right text-primary mr-2'></i>VR Headset</a>"; ?>
                                    <span class="badge badge-primary badge-pill">78</span>
                                </li>
                            </ul>
                        </div>
                    </div>




                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h4>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-light m-1">Technologies</a>
                            <a href="" class="btn btn-light m-1">AI</a>
                            <a href="" class="btn btn-light m-1">Smart</a>
                            <a href="" class="btn btn-light m-1">Wearable</a>
                            <a href="" class="btn btn-light m-1">Information</a>
                            <a href="" class="btn btn-light m-1">Features</a>
                        </div>
                    </div>
                </div>
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
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a><br>

                </div>
                You are at Feature Page
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