<?php 
session_start();
include('connect.php');
if (!isset($_SESSION['cusid'])) {
	echo "<script>alert(Please Login)</script>";
}
else
{
	$cusid=$_SESSION['cid'];
	$output="SELECT * FROM Customer WHERE CustomerID='$cusid'";
	 $query=mysqli_query($connect,$output);
    $count=mysqli_num_rows($query);
    if ($count>0) 
    {
    	$data=mysqli_fetch_array($query);
    	$view=$data['ViewCount'];
    	echo "ViewCount: " . $view;
    }
}
 ?>
