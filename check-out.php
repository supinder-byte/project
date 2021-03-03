<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="bootstrap.min.css">
<link href="style.css" rel="stylesheet" type="text/css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="wrapper">
    <header class="header">
      <div class="logo">
        <a href="store.php">Book Store</a>
      </div>
      <div class="navigation">
        <a href="store.php">Home</a>
        <a href="#">Contact Us</a>
      </div>
    </header>
    <main class="main">
      <div class="content">
      <?php
       session_start();
        require 'mysqli_connect.php';
		$id = $_GET['id'];
		$res = mysqli_query($dbc,"SELECT * FROM bookinventory WHERE inventory_id=".$id);
		$row = mysqli_fetch_array($res);
		$_SESSION['inventory_id'] = $id;
		$product = $row['product_name'];
        $_SESSION['product'] = $product;
		$quantity = $row['stock_status'];
		$_SESSION['quantity'] = $quantity;
		 echo "<div class= product>";
			  echo "<div class= product_info>";
			   $img = "images" .'/'. $row['product_image'];
                echo "<img src='$img' width = '250px' height = '300px'><br>";
              echo "<b>Product Name : </b> ".$product."<br>";
              echo "<b>Price : </b> $".$row['price']."<br>";
              echo "<b>Quantity : </b>".$quantity."<br></div>";

		$fnameErr = $lnameErr = "";
       $fname = $lname = $success= "";

      ?>
	 <div class="form">
		<form action="order.php" method="POST">
			<label for="fname">First Name</label>
			<span>
			<input type="text" id="fname" name="fname">
			</span><br>

			<label for="lname">Last Name</label>
			<span>
			<input type="text" id="lname" name="lname">
			</span><br>

			<label for="payment">Payment Option</label><br>
			<select name="payType">
			<option value="credit">Credit </option>
            <option value="debit">Debit </option>
            </select><br><br>


			<input type="Submit" name="submit" value="Submit" class = "button" >

		</form>

	</div>
    </div>

   </div>

    </main>

<section class="section">
	<div class="footer-content">
	<div class="footer-widgets">
  <div class="container">
    <div class="row">


        <div class="col-xs-12 col-sm-6 col-md-3 footer-col">
          <div class="footer-block footer-block-1">

            <h4>
              Book Store
            </h4>
            <div class="content">
              <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</div>
              <a class="learn-more" href="">Learn More About Us</a>
            </div>

          </div>
        </div>



      <div class="col-xs-12 col-sm-6 col-md-3 footer-col">
        <div class="footer-block footer-block-2">


            <h4>
              Our main office
            </h4>


          <div class="content">
            <div class="text">San Francisco, California, US
P.O. BOX: 553204
Phone: (+1) 998 3384
Mail: admin@bookshop.com</div>
          </div>

        </div>
      </div>



      <div class="col-xs-12 col-sm-6 col-md-3 footer-col">
          <div class="footer-block footer-block-3">


              <h4>
                <span class="icon"></span>
                Keep touch with us
              </h4>


            <div class="content">
              <ul class="widget-social-icon">


  <li>
    <a target="_blank" href="#" class="social-icon-inner facebook" title="Facebook">
      <i class="fa fa-facebook"></i><span>Facebook</span>
    </a>
  </li>



  <li>
    <a target="_blank" href="#" class="social-icon-inner twitter" title="Twitter">
      <i class="fa fa-twitter"></i><span>Twitter</span>
    </a>
  </li>



  <li>
    <a target="_blank" href="#" class="social-icon-inner google" title="Google Plus">
      <i class="fa fa-google-plus"></i><span>Google Plus</span>
    </a>
  </li>



  <li>
    <a target="_blank" href="#" class="social-icon-inner instagram" title="Instagram">
      <i class="fa fa-instagram"></i><span>Instagram</span>
    </a>
  </li>



</ul>
            </div>

        </div>
      </div>



      <div class="col-xs-12 col-sm-6 col-md-3 footer-col">
        <div class="footer-block footer-block-4">


            <h4>
              <span class="icon"></span>
              Information
            </h4>


          <div class="content">
            <ul class="footer-menu">


              <li><a href="">Cart</a></li>

              <li><a href="#products">Our Products</a></li>

              <li><a href="#our_customers">Our Customers</a></li>
              <li><a href="">Contact Us</a></li>


            </ul>
          </div>

        </div>
      </div>


    </div>
  </div>
</div>
	</div>
	<footer class="footer">
            All right reserved. &copy Book Store
        </footer>
</section>


</body>
</html>
