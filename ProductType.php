<?php
include('connect.php');
if (isset($_POST['btnRegister'])) {
	$producttype = $_POST['txtproducttype'];

	$insert = "INSERT INTO ProductType(producttype)
		values('$producttype')";
	$query = mysqli_query($connect, $insert);

	if ($query) {
		echo "<script>alert('Product Type Successful')</script>";
		echo "<script>window.location=ProductType.php</script>";
	} else {
		echo "<p>Error In Type Error</p>";
	}


}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Product Type</title>
</head>

<body>
	<h1>Customer Registration Form</h1>
	<form action="ProductType.php" method="POST">
		<table border="1" align="center" width="500px">
			<tr>
				<td colspan="2" align="center">
					<h1>Product Type Form</h1>
				</td>
			</tr>
			<tr>
				<td>Product Type</td>
				<td>
					<input type="text" name="txtproducttype">
				</td>
			</tr>

			<tr>
				<td></td>
				<td>
					<input type="submit" name="btnRegister" value="Register" required>
					<input type="reset" value="Cancel" required>
				</td>
			</tr>
		</table>

	</form>
</body>

</html>