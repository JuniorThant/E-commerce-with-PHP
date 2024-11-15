<?php

include('connect.php');

$create = "Create Table Customer
(
	CustomerID int Not Null Primary Key AUTO_INCREMENT,
	CustomerName varchar(30),
	CustomerPhone varchar(15),
	CustomerEmail varchar(30),
	CustomerPassword varchar(15),
	CustomerAddress varchar(50),
	PostalCode varchar(10),
	ViewCount int
)";

$query = mysqli_query($connect, $create);

if ($query) {
	echo "<p>Customer Table Created Successfully!</p>";
}

$create = "Drop Table Order_Detail";

$query = mysqli_query($connect, $create);

if ($query) {
	echo "<p>Customer Table Created Successfully!</p>";
}


$create = "Create Table Workshop_Customer
(
	WCustomerID int Not Null Primary Key AUTO_INCREMENT,
	WCustomerName varchar(30),
	WCustomerEmail varchar(30),
	WCustomerPhone varchar(15),
	WCustomerAddress varchar(50)
)";

$query = mysqli_query($connect, $create);

if ($query) {
	echo "<p>Customer Table Created Successfully!</p>";
}

$create = "Create Table ProductType
(
	ProductTypeID int NOT NULL Primary Key
	AUTO_INCREMENT,
	Producttype varchar(30)
)";
$query = mysqli_query($connect, $create);

if ($query) {
	echo "<p> Create Table ProductType Successfully</p>";
}

$create = "Create Table Product
(
	ProductID int NOT NULL Primary Key
	AUTO_INCREMENT,
	ProductName varchar(50),
	Price int,
	Quantity int,
	Description varchar(50),
	Status varchar(20),
	Image1 text, 
	Image2 text,
	Image3 text,
	ProductTypeID int,
	Foreign Key(ProductTypeID) references ProductType(ProductTypeID)
)";
$query = mysqli_query($connect, $create);

if ($query) {
	echo "<p> Create Table Product Successfully</p>";
}

$create = "Create Table FCategory
(
	FCategoryID int NOT NULL Primary Key
	AUTO_INCREMENT,
	FCategory varchar(30)
)";
$query = mysqli_query($connect, $create);

if ($query) {
	echo "<p> Create Table FCategory Successfully</p>";
}

$create = "Create Table FProduct
(
	FProductID int NOT NULL Primary Key
	AUTO_INCREMENT,
	FProductName varchar(50),
	FPrice int,
	FQuantity int,
	Description varchar(50),
	Image1 text, 
	Image2 text,
	Image3 text,
	FCategoryID int,
	Foreign Key(FCategoryID) references FCategory(FCategoryID)
)";
$query = mysqli_query($connect, $create);

if ($query) {
	echo "<p> Create Table FProduct Successfully</p>";
}

$create = "Create Table FOrders
(
	OrderID varchar(30) NOT NULL Primary Key,
	OrderDate varchar(30),
	CustomerID int,
	Order_Total_Amount int,
	Tax int,
	All_Total int,
	Order_Quantity int,
	Remark varchar(30), 
	Payment_Type varchar(30),
	Order_Location varchar(50),
	Order_Phone int,
	Order_Status varchar(30),
	Foreign Key(CustomerID) references Customer(CustomerID)
)";
$query = mysqli_query($connect, $create);

if ($query) {
	echo "<p> Create Table Orders Successfully</p>";
}

$create = "Create Table Orders
(
	OrderID varchar(30) NOT NULL Primary Key,
	OrderDate varchar(30),
	CustomerID int,
	Order_Total_Amount int,
	Tax int,
	All_Total int,
	Order_Quantity int,
	Remark varchar(30), 
	Payment_Type varchar(30),
	Order_Location varchar(50),
	Order_Phone int,
	Order_Status varchar(30),
	Foreign Key(CustomerID) references Customer(CustomerID)
)";
$query = mysqli_query($connect, $create);

if ($query) {
	echo "<p> Create Table Orders Successfully</p>";
}

$create = "Create Table FOrder_Detail
(
	OrderID varchar(30) NOT NULL,
	FProductID int Not Null,
	Product_Price int,
	BuyQty int,
	Primary key(OrderID, FProductID),
	Foreign Key(OrderID) references FOrders(OrderID),
	Foreign Key(FProductID) references FProduct(FProductID)
)";
$query = mysqli_query($connect, $create);

if ($query) {
	echo "<p> Create Table Order_Detail Successfully</p>";
}

$create = "Create Table Order_Detail
(
	OrderID varchar(30) NOT NULL,
	ProductID int Not Null,
	Product_Price int,
	BuyQty int,
	Primary key(OrderID, ProductID),
	Foreign Key(OrderID) references Orders(OrderID),
	Foreign Key(ProductID) references Product(ProductID)
)";
$query = mysqli_query($connect, $create);

if ($query) {
	echo "<p> Create Table Order_Detail Successfully</p>";
}

?>