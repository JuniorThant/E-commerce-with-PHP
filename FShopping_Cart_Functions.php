<?php

function AddShoppingCart($FProductID, $BuyQty)
{
	include('connect.php');
	$query = "SELECT * FROM FProduct WHERE FProductID='$FProductID'";
	$result = mysqli_query($connect, $query);
	$count = mysqli_num_rows($result);

	if ($count < 1) {
		echo "<p>Product ID not found.</p>";
		exit();
	}
	$row = mysqli_fetch_array($result);
	$Product_Name = $row['FProductName'];
	$Product_Amount = $row['FPrice'];
	$Product_Image_1 = $row['Image1'];

	if ($BuyQty < 1) {
		echo "<script>window.alert('Purchase Quantity Cannot be Zero (0)')</script>";
		echo "<script>window.location='fshoppingcart.php'</script>";
		exit();
	}

	if (isset($_SESSION['FShoppingCartFunctions'])) {
		$Index = IndexOf($FProductID);

		if ($Index == -1) {
			$size = count($_SESSION['FShoppingCartFunctions']);

			$_SESSION['FShoppingCartFunctions'][$size]['FProductID'] = $FProductID;
			$_SESSION['FShoppingCartFunctions'][$size]['FProductName'] = $Product_Name;
			$_SESSION['FShoppingCartFunctions'][$size]['FPrice'] = $Product_Amount;
			$_SESSION['FShoppingCartFunctions'][$size]['BuyQty'] = $BuyQty;
			$_SESSION['FShoppingCartFunctions'][$size]['Image1'] = $Product_Image_1;
		} else {
			$_SESSION['FShoppingCartFunctions'][$Index]['BuyQty'] += $BuyQty;
		}
	} else {
		$_SESSION['FShoppingCartFunctions'] = array(); //Create Session Array

		$_SESSION['FShoppingCartFunctions'][0]['FProductID'] = $FProductID;
		$_SESSION['FShoppingCartFunctions'][0]['FProductName'] = $Product_Name;
		$_SESSION['FShoppingCartFunctions'][0]['FPrice'] = $Product_Amount;
		$_SESSION['FShoppingCartFunctions'][0]['BuyQty'] = $BuyQty;
		$_SESSION['FShoppingCartFunctions'][0]['Image1'] = $Product_Image_1;
	}
	echo "<script>window.location='fshoppingcart.php'</script>";
}

function RemoveShoppingCart($FProductID)
{
	$Index = IndexOf($FProductID);
	unset($_SESSION['FShoppingCartFunctions'][$Index]);
	$_SESSION['FShoppingCartFunctions'] = array_values($_SESSION['FShoppingCartFunctions']);

	echo "<script>window.location='fshoppingcart.php'</script>";
}

function ClearShoppingCart()
{

	unset($_SESSION['FShoppingCartFunctions']);
	echo "<script>window.location='fshoppingcart.php'</script>";
}

function CalculateTotalAmount()
{
	$TotalAmount = 0;

	$size = count($_SESSION['FShoppingCartFunctions']);

	for ($i = 0; $i < $size; $i++) {
		$Product_Amount = $_SESSION['FShoppingCartFunctions'][$i]['FPrice'];
		$BuyQty = $_SESSION['FShoppingCartFunctions'][$i]['BuyQty'];
		$TotalAmount += ($Product_Amount * $BuyQty);
	}
	return $TotalAmount;
}

function CalculateVAT()
{
	$VAT = 0;
	$VAT = CalculateTotalAmount() * 0.05;

	return $VAT;
}
function CalculateTotalQuantity()
{
	$TotalQuantity = 0;
	$size = count($_SESSION['FShoppingCartFunctions']);

	for ($i = 0; $i < $size; $i++) {
		$BuyQty = $_SESSION['FShoppingCartFunctions'][$i]['BuyQty'];
		$TotalQuantity += $BuyQty;
	}
	return $TotalQuantity;
}

function IndexOf($FProductID)
{
	if (!isset($_SESSION['FShoppingCartFunctions'])) {
		return -1;
	}

	$size = count($_SESSION['FShoppingCartFunctions']);

	if ($size < 1) {
		return -1;
	}

	for ($i = 0; $i < $size; $i++) {
		if ($FProductID == $_SESSION['FShoppingCartFunctions'][$i]['FProductID']) {
			return $i;
		}
	}
	return -1;
}

?>