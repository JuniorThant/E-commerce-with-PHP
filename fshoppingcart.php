<?php
session_start();
include('connect.php');
include('FShopping_Cart_Functions.php');
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





if (isset($_REQUEST['Action'])) {
    $Action = $_REQUEST['Action'];
    if ($Action === "Remove") {
        $FProductID = $_REQUEST['FProductID'];
        RemoveShoppingCart($FProductID);
    } elseif ($Action === "Buy") {
        $txtProductID = $_REQUEST['txtProductID'];
        $txtBuyQty = $_REQUEST['txtBuyQty'];
        AddShoppingCart($txtProductID, $txtBuyQty);
    } else {
        ClearShoppingCart();
    }
} else {
    $Action = "";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home Gym Equipment- Shopping Cart Page</title>
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
                        <a class="nav-item nav-link ">Home</a>
                        <a class="nav-item nav-link">Information</a>
                        <a class="nav-item nav-link">Workshop</a>
                        <a class="nav-item nav-link active">Wanted</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a class="dropdown-item">Gallery</a>
                                <a class="dropdown-item">Feature</a>
                                <a class="dropdown-item">My Profile</a>
                            </div>
                        </div>
                        <a class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->






    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">

                    <div class="pb-3">





                        <form action="fshoppingcart.php" method="GET" enctype="multipart/form-data">
                            <fieldset>
                                <legend>Here is Your Shopping Bag:</legend>
                                <?php
                                if (!isset($_SESSION['FShoppingCartFunctions'])) {
                                    echo "<p>Shopping Card is Empty</p>";
                                    echo "<a href='wanted.php'> Go Back To Product Gallery</a>";
                                } else {
                                    ?>
                                    <div class="text-center">

                                        <?php

                                        $size = count($_SESSION['FShoppingCartFunctions']);
                                        for ($i = 0; $i < $size; $i++) {
                                            echo "
        <div class='container py-3'>

                            <div class='bg-white mb-2 text-center' style='padding: 30px;'>";

                                            $Image1 = $_SESSION['FShoppingCartFunctions'][$i]['Image1'];
                                            $FProductID = $_SESSION['FShoppingCartFunctions'][$i]['FProductID'];
                                            $ProductName = $_SESSION['FShoppingCartFunctions'][$i]['FProductName'];
                                            $Price = $_SESSION['FShoppingCartFunctions'][$i]['FPrice'];
                                            $BuyQty = $_SESSION['FShoppingCartFunctions'][$i]['BuyQty'];
                                            $subTotal = $_SESSION['FShoppingCartFunctions'][$i]['FPrice'] * $_SESSION['FShoppingCartFunctions'][$i]['BuyQty'];




                                            echo "";
                                            echo "
                                <div class='row mb-4'>

                                <div class='col-lg-3 col-md-6 mb-4'>
                                <img src='ImageDW1/$Image1' width='200px' height='200px'/>
                                </div>
                        <div class='col-lg-6 col-md-6 mb-4'>
                                <p><h5>$ProductName</h5></p>
                            <p><small>$BuyQty pcs ordered from $Price $</small></p>
                               </div> 
                                <div class='col-lg-3 col-md-6 mb-4'>
                                <p><b>Total</b></p><p>$subTotal $</p>
                                <br>
                                <br>
                                <p><button class='btn btn-primary py-3 px-4'><a style='color:white;' href='fshoppingcart.php?FProductID=$FProductID&Action=Remove'>Remove</a></button></p>
                                </div>
                                </div>"

                                            ;

                                            echo "";
                                            echo "";
                                            echo "</div>
</div>

                            ";
                                        }

                                        ?>


                                    </div>
                                <?php



                                }


                                ?>

                    </div>
                </div>
                </fieldset>
                </form>


                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <p>Sub-Total: <b><?php echo CalculateTotalAmount() ?>$</b></p><br>
                        <p>VAT (5%): <b><?php echo CalculateVAT() ?>$</b></p><br>
                        <p>Grand Total: <b><?php echo CalculateTotalAmount() + CalculateVAT() ?>$</b></p>


                        <button class='btn btn-primary py-3 px-2'><a style="color: white;"
                                href="feature.php">Continue</a></button></p><br>
                        <p> &nbsp &nbsp<button class='btn btn-primary py-3 px-2'><a style="color: white;"
                                    href="fpayment.php">Make Payment</a></button>&nbsp &nbsp</p>
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
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
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