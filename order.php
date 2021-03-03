<?php
session_start();
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   require "mysqli_connect.php";

   if((empty($_POST["fname"]) && empty($_POST["lname"]) )){
	   echo '<script type="text/javascript">';
     echo ' alert("Appologize FirstName and LastName both is required")';
     echo '</script>';
   }
   else if(empty($_POST["fname"])){
	   echo '<script type="text/javascript">';
      echo ' alert("FirstName is required")';
      echo '</script>';
   }
   else if(empty($_POST["lname"])) {
	   echo '<script type="text/javascript">';
       echo ' alert("LastName is required")';
       echo '</script>';
   }
   else{
	   $fname = filter_var($_POST["fname"], FILTER_SANITIZE_STRING);
	   $lname = filter_var($_POST["lname"], FILTER_SANITIZE_STRING);
	   $inventory_id = $_SESSION[inventory_id];
	   $product = $_SESSION["product"];
	   $quantity = $_SESSION['quantity'];
	   $payType= $_POST['payType'];
	   $sql = "INSERT INTO place_order (FirstName, LastName, Product,Order_Date, Payment_Type) VALUES ('$fname', '$lname', '$product',now(),'$payType')";
       if (mysqli_query($dbc, $sql))
	   {
		$sqlUpdate = "UPDATE bookinventory SET stock_status = stock_status-1  WHERE inventory_id=".$inventory_id;
        $UpdateInventory=@mysqli_query($dbc,$sqlUpdate);
	    header('location:done.php');
	   }
	   else
	   {
		   			    echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
		// header('location:error.php');
	   }
   }
 }
 ?>
