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
$Password = $row['CustomerPassword'];
$Address = $row['CustomerAddress'];
$Phone = $row['CustomerPhone'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Visor Insurance- Customer Profile Page</title>
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
                        <p><i class="fa fa-envelope mr-2"></i>visorinsuranceuk@org.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>0193292944</p>
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
                    <h2 class="m-0 text-primary"><span class="text-dark">Visor</span>Insurance</h2>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="contact.php" class="nav-item nav-link active">My Profile</a>
                        <a href="home.php" class="nav-item nav-link">Home</a>
                        <a href="information.php" class="nav-item nav-link">About Us</a>
                        <a href="workshop.php" class="nav-item nav-link">Booking</a>
                        <a href="wanted.php" class="nav-item nav-link">Services</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link  dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="gallery.php" class="dropdown-item">Gallery</a>
                                <a href="feature.php" class="dropdown-item active">Feature</a>
                                <a href="profile.php" class="dropdown-item">My Profile</a>
                            </div>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <?php
    include('connect.php');
    ?>


    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">

                    <div class="pb-3">
                        <?php


                        if (isset($_GET['CustomerID'])) {
                            $cusid = $_REQUEST['CustomerID'];
                            $select = "SELECT * FROM Customer WHERE CustomerID='$cusid'";
                            $ret = mysqli_query($connect, $select);

                            $row = mysqli_fetch_array($ret);


                            $CustomerID = $row['CustomerID'];
                            $CustomerName = $row['CustomerName'];
                            $Email = $row['CustomerEmail'];
                            $Password = $row['CustomerPassword'];
                            $Address = $row['CustomerAddress'];
                            $Phone = $row['CustomerPhone'];

                        }

                        if (isset($_POST['btnupdate'])) {
                            $UCustomerID = $_POST['txtCustomerID'];
                            $UCustomerName = $_POST['txtCustomerName'];
                            $UEmail = $_POST['txtEmail'];
                            $UPassword = $_POST['txtPassword'];
                            $UAddress = $_POST['txtAddress'];
                            $UPhone = $_POST['txtPhone'];


                            echo $Update = "UPDATE Customer SET 
				CustomerName='$UCustomerName', 
				CustomerEmail='$UEmail', 
				CustomerPassword='$UPassword',
				CustomerAddress='$UAddress',
				CustomerPhone='$UPhone'
				Where CustomerID='$UCustomerID'";

                            $URET = mysqli_query($connect, $Update);

                            if ($URET) {
                                echo "<script>window.alert('Customer Update Successfully')</script>";
                                echo "<script>window.location='customerprofile.php'</script>";
                            }


                        }

                        if (isset($_POST['btnLogout'])) {
                            session_destroy();
                            echo "<script>window.alert('Customer Logout Successful')</script>";
                            echo "<script>window.location='index.php'</script>";
                        }

                        ?>
                        <div class="container-fluid py-5">
                            <div class='container py-3'>

                                <div class='bg-white mb-2 text-center' style='padding: 30px;'>";

                                    <form action="customerprofile.php" method="POST">
                                        <fieldset>
                                            <h4>Your Profile Overview</h4>
                                            <br>
                                            <br>

                                            <input type="hidden" name="txtCustomerID" value="<?php echo $cusid ?>">

                                            <div class="row">
                                                <div class="col-lg-3 bg-white">
                                                    <b>
                                                        <p>CustomerName</p>
                                                </div></b>
                                                <div class="col-lg-3 bg-white">
                                                    <p><input type="text" name="txtCustomerName"
                                                            value="<?php echo $CustomerName ?>" required /></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 bg-white">
                                                    <b>
                                                        <p>Email</p>
                                                </div></b>
                                                <div class="col-lg-3 bg-white">
                                                    <p><input type="text" name="txtEmail" value="<?php echo $Email ?>"
                                                            required /></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 bg-white">
                                                    <b>
                                                        <p>Password</p>
                                                </div></b>
                                                <div class="col-lg-3 bg-white">
                                                    <p><input type="text" name="txtPassword"
                                                            value="<?php echo $Password ?>" required /></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 bg-white">
                                                    <b>
                                                        <p>Address</p>
                                                </div></b>
                                                <div class="col-lg-3 bg-white">
                                                    <p><input type="text" name="txtAddress"
                                                            value="<?php echo $Address ?>" required /></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 bg-white">
                                                    <b>
                                                        <p>Phone</p>
                                                </div></b>
                                                <div class="col-lg-3 bg-white">
                                                    <p><input type="text" name="txtPhone" value="<?php echo $Phone ?>"
                                                            required /></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 bg-white">
                                                    <b>
                                                        <p>Last Login Date</p>
                                                </div></b>
                                                <div class="col-lg-3 bg-white">
                                                    <p>3/07/2022</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 bg-white">
                                                    <b>
                                                        <p>Insurance Policy</p>
                                                </div></b>
                                                <div class="col-lg-3 bg-white">
                                                    <p>Permanent Life Insurance</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 bg-white">
                                                </div>
                                                <div class="col-lg-5 bg-white">
                                                    <p><?php echo "<a href='customerprofile.php?CustomerID=$CustomerID'><input type='submit' name='btnupdate' value='Update' required/></a>"; ?>
                                                        <input type="reset" value="Clear"> <input type="submit"
                                                            name="btnLogout" value="Log Out" required />
                                                    </p>
                                                </div>
                                                <br>
                                                <br>
                                                <h5><b>Our Permanent Life Insurance Policy</b></h5>

                                                <ul>
                                                    <li>
                                                        <p>Permanent life insurance refers to coverage that never
                                                            expires, unlike term life insurance.</p>
                                                    </li>
                                                    <li>
                                                        <P>Most permanent life insurance combines a death benefit with a
                                                            savings component.</P>
                                                    </li>
                                                    <li>
                                                        <p>Whole life and universal life insurance are two primary types
                                                            of permanent life insurance.</p>
                                                    </li>
                                                    <li>
                                                        <p>Permanent life insurance policies enjoy favorable tax
                                                            treatment.</p>
                                                    </li>
                                                    <li>
                                                        <p>Permanent life insurance policies have much higher than term
                                                            life insurance polices, where there is no savings component
                                                            and the death benefit expires after a specific number of
                                                            years.</p>
                                                    </li>
                                                </ul>
                                            </div>










                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>












                <div class="col-lg-4 mt-5 mt-lg-0">

                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <h5>Notifications</h5>
                        <br>


                        <br>

                        <table border=2 style="background-color:lightgreen;">
                            <tr>
                                <td>
                                    <p>2/25/2022 (unread)</p>
                                    <b>Your Claim (ID- VIC0218920) is accepted.</b>

                    </div>
                    </td>
                    </tr>
                    </table>
                    <br>

                    <table border=2>
                        <tr>
                            <td>
                                <p>2/21/2022</p>
                                <b>Your Policy is active.</b>

                </div>
                </td>
                </tr>
                </table>
                <br>
                <table border=2>
                    <tr>
                        <td>
                            <p>2/03/2022</p>
                            <b>You have activate visor insurance accounts successfully. </b>

            </div>
            </td>
            </tr>
            </table>

            <br>
            <br>
            <p> <button class='btn btn-primary py-3 px-2'><a style="color: white;" href="payment.php">Clear
                        Notifications</a></button>&nbsp &nbsp<button class='btn btn-primary py-3 px-2'><a
                        style="color: white;" href="payment.php">Refresh</a></button></p>


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
                    <h1 class="text-primary"><span class="text-white">Visor</span>Insurance</h1>
                </a>

                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a><br>

                </div>

            </div>

            <div class="col-lg-3 col-md-6 mb-5">

            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Useful Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Booking</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Gallery</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Reviews</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Privacy & Policy</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>12 4th Corner Road, London, UK</p>
                <p><i class="fa fa-phone-alt mr-2"></i>0193292944</p>
                <p><i class="fa fa-envelope mr-2"></i>visorinsuranceuk@org.com</p>
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
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">VisorInsurance</a>. All Rights Reserved.</a>
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