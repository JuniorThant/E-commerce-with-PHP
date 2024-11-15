<?php
include('connect.php');
include('AutoID.php');

if (isset($_POST['btnSave'])) {
	$txtid = $_POST['txtid'];
	$txtname = $_POST['txtname'];
	$txtdaddress = $_POST['txtdaddress'];
	$txtdphone = $_POST['txtdphone'];
	$txtstatus = $_POST['txtstatus'];
	$cboetype = $_POST['cboetype'];
	$cbodtype = $_POST['cbodtype'];
	$select = "SELECT * FROM Certificate WHERE CertificateName='$txtname'";
	$run = mysqli_query($connect, $select);
	$count = mysqli_num_rows($run);
	if ($count > 0) {
		echo "<script>window.alert('Certificate Name is already added!')</script>";
		echo "<script>window.location='CertificateEntry.php'</script>";
		exit();
	} else {
		$insert = "INSERT INTO Certificate(CertificateID,CertificateName,EnrollmentID,DeliveryAddress,DeliveryPhone,DeliveryID,Status)
		values('$txtid','$txtname','$cboetype','$txtdaddress','$txtdphone','$cbodtype','$txtstatus')";
		$run = mysqli_query($connect, $insert);

		if ($run) {
			echo "<script>window.alert('Certificate Entry Successful')</script>";
			echo "<script>window.location=CertificateEntry.php</script>";
		} else {
			echo "<script>window.alert('Error in Certificate Entry')</script>";
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
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		header {
			background-color: #333;
			color: #fff;
			padding: 10px;
		}

		h1 {
			margin: 0;
			padding: 0;
		}

		nav {
			background-color: #ccc;
			padding: 10px;
		}

		nav ul {
			list-style: none;
			margin: 0;
			padding: 0;
		}

		nav ul li {
			display: inline-block;
			margin-right: 10px;
		}

		nav ul li a {
			color: #333;
			text-decoration: none;
			padding: 5px 10px;
			border-radius: 5px;
		}

		nav ul li a:hover {
			background-color: #333;
			color: #fff;
		}

		fieldset {
			border: 1px solid #ddd;
			margin-bottom: 20px;
		}

		legend {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 10px;
		}

		table.sform {
			border-collapse: collapse;
			width: 50%;
		}

		table.dform {
			border-collapse: collapse;
			width: 100%;
		}

		td,
		th {
			border: 1px solid #ddd;
			padding: 2px;
			text-align: left;
		}

		th {
			background-color: #f2f2f2;
		}

		input[type=text],
		select,
		input[type=date],
		input[type=string],
		input[type=number] {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
		}

		input[type=submit],
		input[type=reset] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover,
		input[type=reset]:hover {
			background-color: #45a049;
		}

		@media screen and (max-width: 600px) {

			input[type=submit],
			input[type=reset] {
				width: 100%;
			}
		}
	</style>
</head>

<body>
	<header>
		<h1>Admin Home</h1>
	</header>
	<nav>
		<ul>
			<li><a href="StaffRegister.php">Staff Registration</a></li>
			<li><a href="StaffData.php">Staff Data</a></li>
			<li><a href="TeacherRegister.php">Teacher Registration</a></li>
			<li><a href="TeacherData.php">Teacher Data</a></li>
			<li><a href="CertificateEntry.php" style="background-color: #333;
			color: #fff;">Certificate Registration</a></li>
			<li><a href="CertificateData.php">Certificate Data</a></li>
		</ul>
	</nav>
	<main>
		<form action="CertificateEntry.php" method="POST" enctype="multipart/form-data">
			<fieldset>
				<legend>Certificate Entry Form</legend>
				<table border="1px" align="center" cellpadding="20px" class="sform">
					<tr>
						<td>CertificateID</td>
						<td>
							<input type="text" name="txtid"
								value="<?php echo AutoID('Certificate', 'CertificateID', 'CR-', 6) ?>"
								placeholder="Enter Certificate Name" readonly />
						</td>
					</tr>
					<tr>
						<td>Certificate Name</td>
						<td>
							<input type="text" name="txtname" placeholder="Enter Certificate Name">
						</td>
					</tr>
					<tr>
						<td>EnrollmentID</td>
						<td>
							<select name="cboetype">
								<option>Choose Your Position</option>
								<?php
								$select = "SELECT * FROM Enrollment";
								$query = mysqli_query($connect, $select);
								$count = mysqli_num_rows($query);
								for ($i = 0; $i < $count; $i++) {
									$row = mysqli_fetch_array($query);
									$typeid = $row['EnrollmentID'];

									echo "<option value='$typeid'>$typeid</option>";
								}


								?>

							</select>
						</td>
					</tr>
					<tr>
						<td>DeliveryAddress</td>
						<td>
							<input type="text" name="txtdaddress" placeholder="Enter Certificate Description">
						</td>
					</tr>
					<tr>
						<td>DeliveryPhone</td>
						<td>
							<input type="text" name="txtdphone" placeholder="Enter Certificate Description">
						</td>
					</tr>
					<tr>
						<td>Status</td>
						<td>
							<input type="text" name="txtdstatus" placeholder="Enter Certificate Description">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="btnSave" value="Save" required>
							<input type="reset" value="Clear" required>
						</td>
					</tr>
		</form>
		<br>
		<br>



		</fieldset>
	</main>
</body>

</html>