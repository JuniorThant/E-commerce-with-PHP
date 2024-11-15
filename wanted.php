<?php  
include ('connect.php');
session_start();
$cusid=$_SESSION['cusid'];
            $select="SELECT * FROM Customer WHERE CustomerID='$cusid'";
            $ret=mysqli_query($connect,$select);
            $count=mysqli_num_rows($ret);
                 for($i=0; $i < $count ; $i++ )
        {
            $row=mysqli_fetch_array($ret);
        }
        $CustomerID=$row['CustomerID'];
        $CustomerName=$row['CustomerName'];
        $Email=$row['CustomerEmail'];
        $Phone=$row['CustomerPhone'];
        $Address=$row['CustomerAddress'];


 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home Gym Equipment- Wanted Page</title>
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
                        <a href="wanted.php" class="nav-item nav-link active">Wanted</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="gallery.php" class="dropdown-item">Gallery</a>
                                <a href="feature.php" class="dropdown-item">Feature</a>
                                <?php  echo "<a href='customerprofile.php?CustomerID=$CustomerID' class='dropdown-item'>My Profile</a>";?>
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
                <h3 class="display-4 text-white text-uppercase">Wanted</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Wanted</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Booking Start -->
    <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <form action="wanted.php" method="POST">
                            <div iclass="mb-5">
                        <div class="bg-white" style="padding: 30px;">
                            <div class="input-group">
                                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp <input type="text" class="form-control p-4" placeholder="Search" name=" txtSearch">

                                <span class="input-group-text bg-primary border-primary text-white"><button name="btnSearch"><i
                                            class="fa fa-search"></i></button></span>
                            
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->




    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Products</h6>
                <h1>Second Hand Products</h1>
            </div>
            <div class="row">
                <?php 




if(isset($_POST['btnSearch']))
{
 $secondname=$_POST['txtSearch'];
 $query="SELECT * FROM Product WHERE Status='Second'
   AND ProductName LIKE '$secondname%'";
 $result=mysqli_query($connect,$query);
 $count=mysqli_num_rows($result);

 if($count>0)
 {
  

  for ($i=0; $i<$count ; $i+=5) 
  { 
   $query1="SELECT * FROM Product WHERE Status='Second'
   AND ProductName LIKE '$secondname%' LIMIT $i,5";
   $result1=mysqli_query($connect,$query1);
   $count1=mysqli_num_rows($result1);

   ;

   for ($j=0; $j<$count1 ; $j++) 
   { 
    $data=mysqli_fetch_array($result1);
    
    echo "<div class='col-lg-4 col-md-6 mb-4'>
                    <div class='package-item bg-white mb-2'>";
                    echo "<a href='productdetail.php?ProductID=".$data['ProductID']."'>";
                        echo "<img class='img-fluid' src='ImageDW1/".$data['Image1']."' alt=''>";
                       echo " <div class='p-4'>";
                            echo "<a class='h5 text-decoration-none' href=''>".$data['ProductName']."</a>";
                            echo "<div class='border-top mt-4 pt-4'>";
                                echo "<div class='d-flex justify-content-between'>";
                                    echo"<h5 class='m-0'>$".$data['Price']."</h5>";
                                echo"</div>
                            </div>
                        </div>
                    </div>
                </div>";
                
                 }
   ;

  }
;

 }

 else
 {
  echo "<h1>Search Record Not Found</h1>";
 }
}

else
{
 $query="SELECT * FROM Product WHERE Status='Second'
   ORDER BY ProductName";
 $result=mysqli_query($connect,$query);
 $count=mysqli_num_rows($result);

 if ($count>0) 
 {
  echo "<table align='center' width='70%'>";

  for ($i=0; $i <$count ; $i+=1) 
  { 
   $query1="SELECT * FROM Product WHERE Status='Second'
   ORDER BY ProductName LIMIT $i,1";
   $result1=mysqli_query($connect,$query1);
   $count1=mysqli_num_rows($result1);

   echo "<tr>";

   for ($j=0; $j <$count1 ; $j++)
    { 
    $arr=mysqli_fetch_array($result1);

    $Pid=$arr['ProductID'];
    $image=$arr['Image1'];
    $name=$arr['ProductName'];
    $price=$arr['Price'];

echo " <td>";
     echo "<div class='col-lg-4 col-md-6 mb-4'>";
                    echo "<div class='package-item bg-white mb-2'>";
                    echo "<a href='SDetails.php?ProductID=$Pid'>";
                       echo "<img class='img-fluid' src='ImageDW1/$image' alt=''>";
                        echo "<div class='p-4'>";
                            echo "<a class='h5 text-decoration-none' href=''>$name</a>";
                            echo "<div class='border-top mt-4 pt-4'>";
                                echo "<div class='d-flex justify-content-between'>";
                                    echo "<h5 class='m-0'>$price</h5>";
                                echo "</div>";
                            echo "</div>
                        </div>
                    </div>
                </div>";
                echo "</td>";

    }
    echo "</tr>";
  }
  echo "</table>";
 }


}


?>
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
                <p>Are you finding equipment for your fitness? Then, contact us and buy competitive and reliable gym equipment.</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a><br>
                    
                </div>
                You are at Wanted Page
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
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
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