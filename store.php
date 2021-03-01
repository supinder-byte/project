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
        <a href="shop.php">Book Store</a>
      </div>
      <div class="navigation">
        <a href="store.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a>
        <a href="#">Contact Us</a>
      </div>
    </header>

    <main class="main">
		<div class="content">
		<div class="banner">
			<img src="images/banner.png" alt="Banner" />
		</div>


        <h2> Welcome to our store </h2>
        <?php
          session_start();
          require 'mysqli_connect.php';
          $sql = "select * from bookinventory";
	        $r=@mysqli_query($dbc,$sql);
	        $result = $dbc->query($sql);

          If ($result->num_rows > 0) {
              echo "<ul class=products id='products'>";
              while ($row = $result->fetch_assoc()) {
                    echo "<li>";
                    $img = "images" .'/'. $row['product_image'];
                    echo '<img src="'.$img.'"class=product-image width="200" height="270" margin-top = "2px"">';
                    echo "<div class=product-name>".$row['product_name']."</div>";
                    echo "<div class=product-price> $".$row['price']."</div>";
        ?>
                    <button class="button"><a href="check-out.php?id=<?php echo $row['inventory_id']; ?>">Buy Now</a></button>

        <?php
                    echo "</li>";
              }
          }
        $dbc->close();
        ?>
      </div>

		<div class="home-statistic" id="our_customers">
			<div class="container">
			<h2 style="margin-bottom:20px;"> About Us </h2>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="statistic-item">
							<div class="statistic-img">
								<img src="images/customer.png" alt="">
							</div>
							<div class="text" style="color: #1b8bcc;">
							  <div class="title">138,098</div>
							  <div class="caption">Happy Customers</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="statistic-item">
							<div class="statistic-img">
								<img src="images/books.png" alt="">
							</div>
							<div class="text" style="color: #1b8bcc;">
							  <div class="title">30,000K</div>
							  <div class="caption">Book Collections</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="statistic-item">
							<div class="statistic-img">
								<img src="images/map.png" alt="">
							</div>
							<div class="text" style="color: #1b8bcc;">
							  <div class="title">1,269</div>
							  <div class="caption">Our Store Around the World</div>
							</div>
						</div>
					</div>
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

  </div>

</body>
</html>
