<?php
include('connect.php');
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
    <title>Home Gym Equipment- Privacy and Policy Page</title>
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
                        <a href="home.php" class="nav-item nav-link ">Home</a>
                        <a href="information.php" class="nav-item nav-link">Information</a>
                        <a href="workshop.php" class="nav-item nav-link">Workshop</a>
                        <a href="wanted.php" class="nav-item nav-link">Wanted</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="gallery.php" class="dropdown-item">Gallery</a>
                                <a href="feature.php" class="dropdown-item">Feature</a>
                                <a href="customerprofile.php" class="dropdown-item">My Profile</a>
                                <a href="logout.php" class="dropdown-item">Log Out</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link active">Contact</a>
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
                <h3 class="display-4 text-white text-uppercase">Privacy & Policy</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Contact</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Privacy & Policy</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->



    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Privacy & Policy</h6>
                <h1>Our Privacy and Policy</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-6 mb-4">

                    <p>



                        HGE I/O, Inc. (“HGE”, “us”, “we”, “our”, and “ours”) is committed to protecting your privacy.
                        The Privacy Policy (the “Privacy Policy”) applies to data collected by us from you (“you”,
                        “your”, “yours”, and “Client”) through our proprietary software (the “Software”), content and
                        related documentation and information (collectively with the Software, the “Services”) and
                        through our website (https://homegymequipment/, the “Site”) including all content and
                        functionality available through the Site. By registering for an account and accessing or using
                        any of our Services, you acknowledge that you accept the practices and policies outlined in this
                        Privacy Policy. Terms not defined herein shall have the meaning as provided in HGE’s Terms of
                        Service and incorporated herein.

                        WE MAY MODIFY THIS PRIVACY POLICY AT ANY TIME, IN OUR SOLE DISCRETION, AND SUCH MODIFICATION
                        SHALL BE EFFECTIVE IMMEDIATELY UPON EITHER POSTING OF THE MODIFIED PRIVACY POLICY ON THE SITE OR
                        NOTIFYING YOU. Use of information we collect now is subject to the Privacy Policy in effect at
                        the time such information is collected. YOU AGREE TO REVIEW THIS PRIVACY POLICY PERIODICALLY TO
                        ENSURE THAT YOU ARE AWARE OF ANY MODIFICATIONS. YOUR CONTINUED ACCESS OR USE OF THE SITE
                        SERVICES AND/OR SOFTWARE SHALL BE DEEMED YOUR CONCLUSIVE ACCEPTANCE OF THE MODIFIED PRIVACY
                        POLICY.<br>

                    <h3>Information Covered in This Privacy Policy</h3>

                    This Privacy Policy covers HGE's treatment of Personal Information (as defined herein) that HGE
                    gathers when you access the Site and when you use any part of the Service. This Privacy Policy also
                    covers HGE's treatment of any Personal Information that HGE's business partners share with HGE. This
                    Privacy Policy does not apply to the practices of companies that HGE does not own or control, or to
                    individuals that HGE does not employ or manage.<br><br>

                    <h3>Collection of Your Information</h3>

                    In order to access the Service, a HGE account (an “Account”) will be created for you. In order to
                    create an Account, you must provide certain personally identifiable information such as, your name,
                    e-mail address, addresses, and telephone number. Any information that can readily identify a person
                    is considered “Personal Information” and includes any personally sensitive information as well such
                    as political opinions and religious or philosophical beliefs. It is your responsibility to give us
                    current, complete, truthful and accurate information, including Personal Information, and to keep
                    such information up to date.

                    HGE will not be responsible for any problems or liability related to inaccurate or incomplete
                    Personal Information, whether due to your failure to update such Personal Information or otherwise.

                    In addition to the Personal Information, we may collect the following information you provide
                    (collectively with Personal Information, the “Information”): certain standard browser information,
                    such as your browser type and IP address, and pages of the Site visited and access times.

                    In using and/or accessing the Services or the Software, you expressly authorize us to collect and
                    use your Information in connection with the Services. You further acknowledge and agree that HGE
                    may, but is not obligated to, maintain copies of your Information indefinitely, or delete any or all
                    Information, at our sole discretion. When you receive promotional e-mails or newsletters from HGE,
                    if any, we may use customized links or similar technologies to determine whether such newsletters or
                    e-mail has been opened and which links you click. This information is used to provide you more
                    focused e-mail communications and/or other information.<br><br>

                    <h3>Use of Your Personal Information</h3>

                    HGE collects and uses your Information to operate and improve the Site and better deliver the
                    Services. These uses may include performing analysis aimed at improving the Service and making the
                    Site or Services more user friendly by reducing the need for you to repeatedly enter the same
                    information. HGE may also use your Information to communicate with you, such as providing you with
                    mandatory notices or discretionary notices about the Service. From time to time, HGE may also send
                    you surveys or promotional mailings to inform you of other products or services available from HGE
                    and its affiliates.

                    HGE may support the Site and the Service by selling non-Personal Information (e.g. data that does
                    not personally identify you, such as demographic data such as ZIP code or aggregated data, or
                    Personal Information, such as an email address, that has been processed through a “hash” function
                    which reformats the data into an irreversible non-Personal Information form) to third parties. HGE
                    is headquartered in the United States of America. Information may be accessed by us or transferred
                    to us in the United States or to our affiliates, business partners, or service providers elsewhere
                    in the world. By providing us with Information, you consent to this transfer. We will protect the
                    privacy and security of Information according to our Privacy Policy, regardless of where it is
                    processed or stored.<br><br>


                    <h3>Security of Your Personal Information<.< /h3>

                            The Personal Information HGE collects is securely stored within our web servers and database
                            (including those hosted on third party servers on behalf of HGE), and we use standard,
                            industry-wide practices such as firewalls, encryption, and (in certain areas) Secure Socket
                            Layers (“SSL”) for protecting your information. However, as effective as encryption
                            technology is, keep in mind that no security system is impenetrable. It may be possible for
                            third parties to intercept or access Personal Information in spite of these measures. HGE
                            cannot guarantee the security of Personal Information and cannot be held responsible for
                            unauthorized access to such Personal Information.<br><br>

                            <h3>Information Collected Automatically</h3>

                            We may receive and store certain types of information whenever you interact with the Site
                            and/or Service. We may choose to automatically receive and record information on our server
                            logs from your browser including your IP address, cookie information, and the page you
                            requested. HGE uses "cookies" to collect non-personal data and information. Cookies are
                            small text files a Site uses to recognize repeat users, and is typically placed on your hard
                            disk by a web page server. Cookies contain information that can later be read by a web
                            server in the domain that issued the cookie to you. The way cookies function is by assigning
                            a number to the user that has no meaning outside of the assigning Site. You should be aware
                            that HGE cannot control the use of cookies (or the resulting information) by HGE's
                            third-party partners. You have the ability to accept or decline cookies. Most web browsers
                            automatically accept cookies, but you can usually modify your browser setting to decline
                            cookies if you prefer. If you choose to decline cookies, you may not be able to sign in or
                            use other interactive features of the Site and Service that depend on cookies.

                            Collection and Use of Children's Personal Information.

                            The Site is intended for general audiences and HGE does not knowingly collect any Personal
                            Information from children.<br><br>

                            <h3>E-mail Communications.</h3>

                            In using the Site and providing us with your email address, we may send you daily or weekly
                            e-mails. If you do not want to receive e-mail or other mail from us, please notify us by
                            e-mail at privacy@narrative.io and include sufficient information for us to identify your
                            Account, including your name, email address and the specifics of your request. However,
                            after you unsubscribe to cease receiving e-mails, HGE may still contact you via e-mail for
                            administrative or informational purposes, including messages regarding the administration of
                            your account and/or any services or events to which you have registered.<br><br>

                            <h3>Questions or Comments Regarding this Privacy Policy. </h3>

                            HGE welcomes any questions or comments you may have regarding this Privacy Policy or if you
                            do not understand any information about how we collect, maintain, use, or share Information.
                            Any such questions or comments should be submitted via email to homegymequipment@org.com We
                            will make every effort to resolve or answer your concern.<br></p>

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