<?php
include('connect.php');

if (isset($_POST['btnSave'])) {
	$txtproductname = $_POST['txtproductname'];
	$txtprice = $_POST['txtprice'];
	$txtquantity = $_POST['txtquantity'];
	$txtdes = $_POST['txtdes'];
	$txtstatus = $_POST['txtstatus'];
	$fileImage1 = $_FILES['fileImage1']['name'];
	$folder = "ImageDW1/";
	$filename1 = $folder . '_' . $fileImage1;
	$copy = copy($_FILES['fileImage1']['tmp_name'], $filename1);
	if (!$copy) {
		echo "<p>Cannot Copy Image</p>";
		exit();
	}
	$fileImage2 = $_FILES['fileImage2']['name'];
	$folder = "ImageDW1/";
	$filename2 = $folder . '_' . $fileImage2;
	$copy = copy($_FILES['fileImage2']['tmp_name'], $filename2);
	if (!$copy) {
		echo "<p>Cannot Copy Image</p>";
		exit();
	}
	$fileImage3 = $_FILES['fileImage3']['name'];
	$folder = "ImageDW1/";
	$filename3 = $folder . '_' . $fileImage3;
	$copy = copy($_FILES['fileImage3']['tmp_name'], $filename3);
	if (!$copy) {
		echo "<p>Cannot Copy Image</p>";
		exit();
	}
	$cbotype = $_POST['cbotype'];
	$select = "SELECT * FROM Product WHERE ProductName='$txtproductname'";
	$run = mysqli_query($connect, $select);
	$count = mysqli_num_rows($run);
	if ($count > 0) {
		echo "<script>window.alert('Product Name is already added!')</script>";
		echo "<script>window.location='Product_Entry.php'</script>";
		exit();
	} else {
		$insert = "INSERT INTO Product(ProductName,Price,Quantity,Description,Status,Image1,Image2,Image3,ProductTypeID)
		values('$txtproductname','$txtprice','$txtquantity','$txtdes','$txtstatus','$fileImage1','$fileImage2','$fileImage3','$cbotype')";
		$run = mysqli_query($connect, $insert);

		if ($run) {
			echo "<script>window.alert('Product Entry Successful')</script>";
			echo "<script>window.location=Product_Entry.php</script>";
		} else {
			echo "<script>window.alert('Error in Product Entry')</script>";
		}
	}


}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<body>
	<form action="Product_Entry.php" method="POST" enctype="multipart/form-data">
		<fieldset>
			<legend>Product Entry Form</legend>
			<table border="1px" align="center" cellpadding="20px">
				<tr>
					<td>Product Name</td>
					<td>
						<input type="text" name="txtproductname" placeholder="Enter Product Name">
					</td>
				</tr>
				<tr>
					<td>Price</td>
					<td>
						<input type="number" name="txtprice" placeholder="Enter Product Price">
					</td>
				</tr>
				<tr>
					<td>Quantity</td>
					<td>
						<input type="text" name="txtquantity" placeholder="Enter Product Quantity">
					</td>
				</tr>
				<tr>
					<td>Status</td>
					<td>
						<input type="text" name="txtstatus" placeholder="Enter Product Status">
					</td>
				</tr>
				<tr>
					<td>Description</td>
					<td>
						<input type="text" name="txtdes" placeholder="Enter Product Description">
					</td>
				</tr>
				<tr>
					<td>Image 1</td>
					<td>
						<input type="File" name="fileImage1">
					</td>
				</tr>
				<tr>
					<td>Image 2</td>
					<td>
						<input type="File" name="fileImage2">
					</td>
				</tr>
				<tr>
					<td>Image 3</td>
					<td>
						<input type="File" name="fileImage3">
					</td>
				</tr>
				<tr>
					<td>Choose Product Type</td>
					<td>
						<select name="cbotype">
							<option>Choose Type One</option>
							<?php
							$select = "SELECT * FROM ProductType";
							$query = mysqli_query($connect, $select);
							$count = mysqli_num_rows($query);
							for ($i = 0; $i < $count; $i++) {
								$row = mysqli_fetch_array($query);
								$typeid = $row['ProductTypeID'];
								$type = $row['Producttype'];

								echo "<option value='$typeid'>$typeid-$type</option>";
							}


							?>

						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="btnSave" value="Save" required>
						<input type="reset" value="Clear" required>
					</td>
				</tr>

			</table>
	</form>
	</fieldset>
</body>

</html>