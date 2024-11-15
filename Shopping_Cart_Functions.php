<?php  

function AddShoppingCart($ProductID,$BuyQty)
{
	include('connect.php');
	$query="SELECT * FROM Product WHERE ProductID='$ProductID'";
	$result=mysqli_query($connect,$query);
	$count=mysqli_num_rows($result);

	if($count < 1) 
	{
		echo "<p>Product ID not found.</p>";
		exit();
	}
	$row=mysqli_fetch_array($result);
	$Product_Name=$row['ProductName'];
	$Product_Amount=$row['Price'];
	$Product_Image_1=$row['Image1'];

	if($BuyQty < 1) 
	{
		echo "<script>window.alert('Purchase Quantity Cannot be Zero (0)')</script>";
		echo "<script>window.location='Shopping_Cart.php'</script>";
		exit();
	}

	if(isset($_SESSION['ShoppingCartFunctions'])) 
	{
		$Index=IndexOf($ProductID);
		
		if($Index == -1) 
		{
			$size=count($_SESSION['ShoppingCartFunctions']);

			$_SESSION['ShoppingCartFunctions'][$size]['ProductID']=$ProductID;
			$_SESSION['ShoppingCartFunctions'][$size]['ProductName']=$Product_Name;
			$_SESSION['ShoppingCartFunctions'][$size]['Price']=$Product_Amount;
			$_SESSION['ShoppingCartFunctions'][$size]['BuyQty']=$BuyQty;
			$_SESSION['ShoppingCartFunctions'][$size]['Image1']=$Product_Image_1;
		}
		else
		{
			$_SESSION['ShoppingCartFunctions'][$Index]['BuyQty']+=$BuyQty;
		}
	}
	else
	{
		$_SESSION['ShoppingCartFunctions']=array(); //Create Session Array

		$_SESSION['ShoppingCartFunctions'][0]['ProductID']=$ProductID;
		$_SESSION['ShoppingCartFunctions'][0]['ProductName']=$Product_Name;
		$_SESSION['ShoppingCartFunctions'][0]['Price']=$Product_Amount;
		$_SESSION['ShoppingCartFunctions'][0]['BuyQty']=$BuyQty;
		$_SESSION['ShoppingCartFunctions'][0]['Image1']=$Product_Image_1;
	}
	echo "<script>window.location='Shopping_Cart.php'</script>";
}

function RemoveShoppingCart($ProductID)
{
	$Index=IndexOf($ProductID);
	unset($_SESSION['ShoppingCartFunctions'][$Index]);
	$_SESSION['ShoppingCartFunctions']=array_values($_SESSION['ShoppingCartFunctions']);

	echo "<script>window.location='Shopping_Cart.php'</script>";
}

function ClearShoppingCart()
{	
	
 unset($_SESSION['ShoppingCartFunctions']);
	echo "<script>window.location='Shopping_Cart.php'</script>";
}

function CalculateTotalAmount()
{
	$TotalAmount=0;

	$size=count($_SESSION['ShoppingCartFunctions']);

	for($i=0;$i<$size;$i++) 
	{ 
		$Product_Amount=$_SESSION['ShoppingCartFunctions'][$i]['Price'];
		$BuyQty=$_SESSION['ShoppingCartFunctions'][$i]['BuyQty'];
		$TotalAmount+=($Product_Amount * $BuyQty);
	}
	return $TotalAmount;
}

function CalculateVAT()
{
	$VAT=0;
	$VAT=CalculateTotalAmount() * 0.05;

	return $VAT;
}
function CalculateTotalQuantity()
{
	$TotalQuantity=0;
	$size=count($_SESSION['ShoppingCartFunctions']);

	for ($i=0; $i <$size ; $i++) 
	{ 
		$BuyQty=$_SESSION['ShoppingCartFunctions'][$i]['BuyQty'];
		$TotalQuantity+=$BuyQty;
	}
	return $TotalQuantity;
}

function IndexOf($ProductID)
{
	if (!isset($_SESSION['ShoppingCartFunctions'])) 
	{
		return -1;
	}

	$size=count($_SESSION['ShoppingCartFunctions']);

	if ($size < 1) 
	{
		return -1;
	}

	for ($i=0;$i<$size;$i++) 
	{ 
		if($ProductID == $_SESSION['ShoppingCartFunctions'][$i]['ProductID']) 
		{
			return $i;
		}
	}
	return -1;
}

?>