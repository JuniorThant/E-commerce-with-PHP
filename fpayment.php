<?php
include('connect.php');
include('FShopping_Cart_Functions.php');
include('FAutoID_Functions.php');
session_start();
$cusid = $_SESSION['cusid'];
$select = "SELECT * FROM Customer WHERE CustomerID='$cusid'";
$ret = mysqli_query($connect, $select);
$count = mysqli_num_rows($ret);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <script type="text/javascript">
        function showpaymentTable() {
            document.getElementById('PaymentTable').style.visibility = "visible";
        }
        function hidepaymentTable() {
            document.getElementById('PaymentTable').style.visibility = "hidden";
        }
        function showAddress() {
            document.getElementById('AddressTable').style.visibility = "visible";
        }
        function hideAddress() {
            document.getElementById('AddressTable').style.visibility = "hidden";
        }
    </script>
    <meta charset="utf-8">
    <title>Home Gym Equipment- Payment Page</title>
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
                                <a href="profile.php" class="dropdown-item">My Profile</a>
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
                <h3 class="display-4 text-white text-uppercase">Payment</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Wanted</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Payment</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <?php


    if (!isset($_SESSION['cusid'])) {
        echo "<script>window.alert('Please Login First!')</script>";
        echo "<script>window.location='Customerlogin.php'</script>";
        exit();
    } else {
        $CustomerID = $_SESSION['cusid'];
        $query = "SELECT * FROM Customer WHERE CustomerID='$CustomerID'";
        $run = mysqli_query($connect, $query);
        $array = mysqli_fetch_array($run);
    }
    if (isset($_POST['btnConfirm'])) {

        $rdoDeliveryType = $_POST['rdoDeliveryType'];
        if ($rdoDeliveryType == 1) {
            $Address = $_POST['txtaddress'];
            $Phone = $_POST['txtPhone'];
        } else {
            $CustomerID = $_SESSION['cusid'];
            $select = "SELECT * FROM Customer WHERE CustomerID='$CustomerID'";
            $query = mysqli_query($connect, $select);
            $data = mysqli_fetch_array($query);

            $Address = $data['Address'];
            $Phone = $data['Phone'];
        }


        $CustomerID = $_SESSION['cusid'];
        $status = "Pending";
        $txtOrderID = $_POST['txtOrderID'];
        $txtOrderDate = $_POST['txtOrderDate'];
        $txtTotalamount = $_POST['txtTotalamount'];
        $txtVAT = $_POST['txtVAT'];
        $txtGrandTotal = $_POST['txtGrandTotal'];
        $txtTotalQuantity = $_POST['txtTotalQuantity'];
        $txtRemark = $_POST['txtRemark'];
        $rdoPaymentType = $_POST['rdoPaymentType'];

        echo $Orderquery = "INSERT INTO FOrders
                            (OrderID,OrderDate,CustomerID,Order_Total_Amount,Tax,All_Total,Order_quantity,
                            Remark,Payment_Type,Order_Location,Order_Phone,Order_Status)
                        VALUES('$txtOrderID','$txtOrderDate','$CustomerID','$txtTotalamount','$txtVAT',
                                '$txtGrandTotal','$txtTotalQuantity','$txtRemark',' $rdoPaymentType',
                                '$Address','$Phone','$status')";
        $result = mysqli_query($connect, $Orderquery);
        $size = count($_SESSION['FShoppingCartFunctions']);
        for ($i = 0; $i < $size; $i++) {
            $FProductID = $_SESSION['FShoppingCartFunctions'][$i]['FProductID'];
            $BuyQty = $_SESSION['FShoppingCartFunctions'][$i]['BuyQty'];
            $Product_Amount = $_SESSION['FShoppingCartFunctions'][$i]['FPrice'];
            $ODquery = "INSERT INTO Forder_detail
                        (OrderID,FProductID,Product_Price,BuyQty)
                    VALUES('$txtOrderID','$FProductID','$Product_Amount','$BuyQty')";
            $result = mysqli_query($connect, $ODquery);

            $update = "UPDATE FProduct set FQuantity=FQuantity-'$BuyQty'
                    WHERE FProductID='$FProductID'";
            $updateret = mysqli_query($connect, $update);

        }

        if ($result) {
            unset($_SESSION['FShoppingCartFunctions']);
            echo "<script>window.alert('Payment Process Completed!')</script>";
            echo "<script>window.location='feature.php'</script>";
        } else {
            echo "<p>Something Went Wrong in Payment</p>";
        }

    }
    ?>


    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8 bg-white">

                    <div class="pb-3">
                        <form action="fpayment.php" method="POST" enctype="multipart/form-data">

                            <fieldset>
                                <legend>
                                    <h4>Order Information</h4>
                                </legend>
                                <table>
                                    <tr>
                                        <td>Order No:</td>
                                        <td>
                                            <input type="text" name="txtOrderID"
                                                value="<?php echo AutoID('Orders', 'OrderID', 'ORD-', 6) ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Order Date:</td>
                                        <td>
                                            <input type="text" name="txtOrderDate" value="<?php echo date('Y-m-d') ?>"
                                                readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Total Amount:</td>
                                        <td>
                                            <input type="number" name="txtTotalamount"
                                                value="<?php echo CalculateTotalAmount() ?>" readonly>USD
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tax:</td>
                                        <td>
                                            <input type="number" name="txtVAT" value="<?php echo CalculateVAT() ?>"
                                                readonly>USD
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Grand Total:</td>
                                        <td>
                                            <input type="number" name="txtGrandTotal"
                                                value="<?php echo CalculateTotalAmount() + CalculateVAT() ?>" readonly>USD
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Total Quantity:</td>
                                        <td>
                                            <input type="number" name="txtTotalQuantity"
                                                value="<?php echo CalculateTotalQuantity() ?>" readonly>Pcs
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Remark:</td>
                                        <td>
                                            <input type="text" name="txtRemark" placeholder="Enter your remark">
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                            <br>
                            <br>
                            <br>
                            <fieldset>
                                <legend>
                                    <h4>Payment Method</h4>
                                </legend>
                                <table>
                                    <tr>
                                        <td>Payment Type <br>
                                            <input type="radio" name="rdoPaymentType" value="MPU"
                                                onclick="showpaymentTable()" checkd />MPU
                                            <input type="radio" name="rdoPaymentType" value="VISA"
                                                onclick="showpaymentTable()" checkd />VISA
                                            <input type="radio" name="rdoPaymentType" value="COD"
                                                onclick="hidepaymentTable()" checkd />Cash on Delivery
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table id="PaymentTable" name="Payment Table">
                                                <tr>
                                                    <td>Name <small>(as it appearson your card)</small><br>
                                                        <input type="text" name="txtNameOnCard"
                                                            placeholder="Enter Your Name" /><br>
                                                        CardNumber <small>(no dashes or spaces)</small><br>
                                                        <input type="number" name="txtNameOnCard"
                                                            placeholder="Enter Your Card Number" min="16" /><br>
                                                        Expiration Date <small>(no dashes or spaces)</small>
                                                        <select name="cboMonth">
                                                            <option>Month</option>
                                                            <option>June</option>
                                                            <option>November</option>
                                                            <option>December</option>
                                                        </select>
                                                        <select name="cboYear">
                                                            <option>Year</option>
                                                            <option>2023</option>
                                                            <option>2024</option>
                                                            <option>2025</option>
                                                        </select><br>
                                                        Security Code <small>(3 or Back, Amex 4 on Front)</small><br>
                                                        <input type="number" name="txtsecuritycode"
                                                            placeholder="Enter Code Number">
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                            <br>
                            <br>
                            <br>
                            <fieldset>
                                <legend>
                                    <h4>Shipping Details</h4>
                                </legend>
                                <table>
                                    <tr>
                                        <td>Delivery Type</td>
                                        <input type="radio" name="rdoDeliveryType" value="1" onclick="showAddress"
                                            checked />Other Address
                                        <input type="radio" name="rdoDeliveryType" value="1"
                                            onclick="hideAddress" />Same Address
                                    </tr>
                                    <tr>
                                        <td>
                                            <table id=AddressTable name="AddressTable">
                                                <tr>
                                                    <td>DeliveryPhone: <br>
                                                        <input type="text" name="txtPhone"
                                                            placeholder="Enter your Current Phone"><br>
                                                        DeliveryAddress: <br>
                                                        <input type="text" name="txtaddress"
                                                            placeholder="Enter your Current Address"><br>

                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <hr>
                                            <button class="btn btn-primary btn-block py-3" name="btnConfirm"
                                                type="submit">Confirm Order</button>
                                            <a style="color: blue;" href="gallery.php">Conitue Shopping</a>
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>

                        </form>



                    </div>



                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">


                    <div class="mb-5">
                        <fieldset>
                            <legend>
                                <h4>Your Information</h4>
                            </legend>
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td>: <?php echo $array['CustomerName'] ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>: <?php echo $array['CustomerEmail'] ?></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>: <?php echo $array['CustomerPhone'] ?></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>: <?php echo $array['CustomerAddress'] ?></td>
                                </tr>
                            </table>
                        </fieldset>
                    </div>



                    <div class="mb-5">
                        <fieldset>
                            <legend>
                                <h4>Order Summary</h4>
                            </legend>
                            <form action="fshoppingcart.php" method="GET" enctype="multipart/form-data">
                                <fieldset>

                                    <?php
                                    if (!isset($_SESSION['FShoppingCartFunctions'])) {
                                        echo "<p>Shopping Card is Empty</p>";
                                        echo "<a href='feature.php'> Go Back To Product Feature</a>";
                                    } else {
                                        ?>
                                        <div class="text-center">

                                            <?php

                                            $size = count($_SESSION['FShoppingCartFunctions']);
                                            for ($i = 0; $i < $size; $i++) {
                                                echo "
       

                            <div class='bg-white  text-center' style='padding: 10px;'>";

                                                $Image1 = $_SESSION['FShoppingCartFunctions'][$i]['Image1'];
                                                $ProductID = $_SESSION['FShoppingCartFunctions'][$i]['FProductID'];
                                                $ProductName = $_SESSION['FShoppingCartFunctions'][$i]['FProductName'];
                                                $Price = $_SESSION['FShoppingCartFunctions'][$i]['FPrice'];
                                                $BuyQty = $_SESSION['FShoppingCartFunctions'][$i]['BuyQty'];
                                                $subTotal = $_SESSION['FShoppingCartFunctions'][$i]['FPrice'] * $_SESSION['FShoppingCartFunctions'][$i]['BuyQty'];




                                                echo "";
                                                echo "
                                <div class='row mb-4'>

                                <div class='col-lg-3 col-md-6 mb-4'>
                                <p><img src='ImageDW1/$Image1' width='100px' height='100px'/></p>
                                </div>
                        
                                <div class='col-lg-6 col-md-6 mb-4 text-lg-right'>
                                <br>
                                
                                <br>
                                <p><b>$subTotal $</b></p>
                                
                                
                                </div>
                                </div>"

                                                ;




                                            }

                                            ?>



                                        <?php



                                    }


                                    ?>





                                        <div class="col-lg-12 mt-5 mt-lg-0">
                                            <p>________________________</p>
                                        </div>

                                        <!-- Author Bio -->
                                        <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                                            <p><b>Total:</b>&nbsp &nbsp &nbsp &nbsp &nbsp
                                                <b><?php echo CalculateTotalAmount() ?>$</b></p><br>



                                        </div>
                                </fieldset>
                            </form>
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