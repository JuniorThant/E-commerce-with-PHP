<?php
include('connect.php');
include('Shopping_Cart_Functions.php');
include('AutoID_Functions.php');
session_start();
$cusid = $_SESSION['cusid'];
$select = "SELECT * FROM Customer WHERE CustomerID='$cusid'";
$ret = mysqli_query($connect, $select);
$count = mysqli_num_rows($ret);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GYMSTER - Gym HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.html"
                    class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase">Gymster</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-secondary d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <h6 class="mb-0">info@example.com</h6>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <h6 class="mb-0">+012 345 6789</h6>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">Gymster</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <a href="class.html" class="nav-item nav-link">Classes</a>
                            <a href="team.html" class="nav-item nav-link">Trainers</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                    <a href="detail.html" class="dropdown-item">Blog Detail</a>
                                    <a href="testimonial.html" class="dropdown-item active">Testimonial</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">Join Us</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Testimonial</h1>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="" class="btn btn-light py-md-3 px-md-5">Testimonial</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Testimonial Start -->

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

        echo $Orderquery = "INSERT INTO Orders
                            (OrderID,OrderDate,CustomerID,Order_Total_Amount,Tax,All_Total,Order_quantity,
                            Remark,Payment_Type,Order_Location,Order_Phone,Order_Status)
                        VALUES('$txtOrderID','$txtOrderDate','$CustomerID','$txtTotalamount','$txtVAT',
                                '$txtGrandTotal','$txtTotalQuantity','$txtRemark',' $rdoPaymentType',
                                '$Address','$Phone','$status')";
        $result = mysqli_query($connect, $Orderquery);
        $size = count($_SESSION['ShoppingCartFunctions']);
        for ($i = 0; $i < $size; $i++) {
            $ProductID = $_SESSION['ShoppingCartFunctions'][$i]['ProductID'];
            $BuyQty = $_SESSION['ShoppingCartFunctions'][$i]['BuyQty'];
            $Product_Amount = $_SESSION['ShoppingCartFunctions'][$i]['Price'];

        }
        $ODquery = "INSERT INTO order_detail
                        (OrderID,ProductID,Product_Price,BuyQty)
                    VALUES('$txtOrderID','$ProductID','$Product_Amount','$BuyQty')";
        $result = mysqli_query($connect, $ODquery);

        $update = "UPDATE Product set Quantity=Quantity-'$txtTotalQuantity'
                    WHERE ProductID='$ProductID'";
        $updateret = mysqli_query($connect, $update);
        if ($result) {
            unset($_SESSION['ShoppingCartFunctions']);
            echo "<script>window.alert('Payment Process Completed!')</script>";
            echo "<script>window.location='wanted.php'</script>";
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
                        <form action="payment.php" method="POST" enctype="multipart/form-data">

                            <fieldset>
                                <legend>
                                    <h4>Order Information</h4>
                                </legend>
                                <table>
                                    <tr>
                                        <td>Order No:</td>
                                        <td>
                                            <input type="text" name="txtOrderID"
                                                value="<?php echo AutoID('Orders', 'OrderID', 'ORD-', 6) ?>" readonly>
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
                            <form action="Shopping_Cart.php" method="GET" enctype="multipart/form-data">
                                <fieldset>

                                    <?php
                                    if (!isset($_SESSION['ShoppingCartFunctions'])) {
                                        echo "<p>Shopping Card is Empty</p>";
                                        echo "<a href='gallery.php'> Go Back To Product Gallery</a>";
                                    } else {
                                        ?>
                                        <div class="text-center">

                                            <?php

                                            $size = count($_SESSION['ShoppingCartFunctions']);
                                            for ($i = 0; $i < $size; $i++) {
                                                echo "
       

                            <div class='bg-white  text-center' style='padding: 10px;'>";

                                                $Image1 = $_SESSION['ShoppingCartFunctions'][$i]['Image1'];
                                                $ProductID = $_SESSION['ShoppingCartFunctions'][$i]['ProductID'];
                                                $ProductName = $_SESSION['ShoppingCartFunctions'][$i]['ProductName'];
                                                $Price = $_SESSION['ShoppingCartFunctions'][$i]['Price'];
                                                $BuyQty = $_SESSION['ShoppingCartFunctions'][$i]['BuyQty'];
                                                $subTotal = $_SESSION['ShoppingCartFunctions'][$i]['Price'] * $_SESSION['ShoppingCartFunctions'][$i]['BuyQty'];




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
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary px-5 mt-5">
        <div class="row gx-5">
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">123 Street, New York, USA</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">info@example.com</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Quick Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Class Schedule</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Our Trainers</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                            <a class="text-secondary" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Popular Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Class Schedule</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Our Trainers</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                            <a class="text-secondary" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div
                    class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-5">
                    <h4 class="text-uppercase text-white mb-4">Newsletter</h4>
                    <h6 class="text-uppercase text-white">Subscribe Our Newsletter</h6>
                    <p class="text-light">Amet justo diam dolor rebum lorem sit stet sea justo kasd</p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-dark">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 py-lg-0 px-5" style="background: #111111;">
        <div class="row gx-5">
            <div class="col-lg-8">
                <div class="py-lg-4 text-center">
                    <p class="text-secondary mb-0">&copy; <a class="text-light fw-bold" href="#">Your Site Name</a>. All
                        Rights Reserved.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="py-lg-4 text-center credit">
                    <p class="text-light mb-0">Designed by <a class="text-light fw-bold"
                            href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>