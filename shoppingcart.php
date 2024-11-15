<?php 
session_start();
include('connect.php');
include ('Shopping_Cart_Functions.php');

 if(isset($_GET['Buy']))
    {
        $txtProductID=$_GET['txtProductID'];
        $txtBuyQty=$_GET['txtBuyQty'];
        AddShoppingCart($txtProductID,$txtBuyQty);
    }


  if (isset($_REQUEST['Action']))
  {
    $Action=$_REQUEST['Action'];
    if($Action === "Remove")
    {
        $ProductID=$_REQUEST['ProductID'];
        RemoveShoppingCart($ProductID);
    }
    elseif ($Action === "Buy") 
    {
        $txtProductID=$_REQUEST['txtProductID'];
        $txtBuyQty=$_REQUEST['txtBuyQty'];
        AddShoppingCart($txtProductID,$txtBuyQty);
    }
    else
    {
        ClearShoppingCart();
    }
  }
  else
  {
    $Action="";
  }

?>

 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Gym Equipment- Shopping Cart Page</title>
 </head>
 <body>
    <form action="Shopping_Cart.php" method="GET" enctype="multipart/form-data">
        <fieldset>
            <legend>Here is Your Shopping Bag:</legend>
            <?php
            if (!isset($_SESSION['ShoppingCartFunctions']))
            {
                echo"<p>Shopping Card is Empty</p>";
                echo "<a href='gallery.php'> Go Back To Product Gallery</a>";
            }
            else
            {
                ?>
                <table border="1">
                    <tr>
                        <th>Image</th>
                        <th>ProductID</th>
                        <th>ProductName</th>
                        <th>Price</th>
                        <th>BuyQty</th>
                        <th>SubTotal</th>
                        <th>Action</th>
                    </tr>
                    <?php   

                        $size=count($_SESSION['ShoppingCartFunctions']);
                        for($i=0; $i <$size ; $i++)
                        {
                            $Image1=$_SESSION['ShoppingCartFunctions'][$i]['Image1'];
                            $ProductID=$_SESSION['ShoppingCartFunctions'][$i]['ProductID'];
                            $ProductName=$_SESSION['ShoppingCartFunctions'][$i]['ProductName'];
                            $Price=$_SESSION['ShoppingCartFunctions'][$i]['Price'];
                            $BuyQty=$_SESSION['ShoppingCartFunctions'][$i]['BuyQty'];
                            $subTotal=$_SESSION['ShoppingCartFunctions'][$i]['Price']*$_SESSION['ShoppingCartFunctions'][$i]['BuyQty'];
                            


                            echo"<tr>";
                                echo"<td><img src='ImageDW1/$Image1' width='100px' height='100px'/></td>";
                                echo"<td>$ProductID</td>";
                                echo"<td>$ProductName</td>";
                                echo"<td>$Price</td>";
                                echo"<td>$BuyQty</td>";
                                echo"<td>$subTotal</td>";
                                echo"<td><a href='Shopping_Cart.php?ProductID=$ProductID&Action=Remove'>Remove</a></td>";
                            
                            echo"</tr>";
                        }

                     ?>
                     <tr>
                        <td colspan="7" align="center">
                            Sub-Total: <b><?php echo CalculateTotalAmount() ?></b><br>
                            VAT (5%): <b><?php echo CalculateVAT() ?></b><br>
                            Grand Total: <b><?php  echo CalculateTotalAmount() + CalculateVAT() ?></b>
                            <hr/>

                            <a href="Shopping_Cart.php?Action=ClaerAll">ClearCart</a> 
                            <a href="gallery.php">Continue</a>
                            <a href="checkout.php">Make Payment</a>

                        </td>
                     </tr>
                      </table>
                <?php   



            }
             ?>
        </fieldset>
    </form>
 
 </body>
 </html>