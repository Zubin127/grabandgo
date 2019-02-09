<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>

  <meta charset="utf-8">
    <title>Submit Add for free</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
<body  style='background:url(assets/img/abcde.jpg)'>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-tumblr"></span></a>
				</div>
				<a class="active" href="index.php"> <span class="icon-home"></span> Home</a> 
				<a href="aboutus.php"><span class="icon-edit"></span> About Us </a> 
				<a href="contact.php"><span class="icon-envelope"></span> Contact us</a>
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
<div class="container"  style='width:1200px;'>
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href="registration.php"><span>Submit Addvertisment For Free</span> 
		<img src="assets/img/logo-bootstrap-shoping-cart.png" alt="bootstrap sexy shop">
	</a>
	</h1>
	</div>
	<div class="span4">
	<div class="offerNoteWrapper">
	<h1 class="dotmark">
	<i class="icon-cut"></i>
	<a href='registration.php'>Submit Addvertisment For Free</a>
	</h1>
	</div>
	</div>
	<div class="span4 alignR">
	<p><br> <strong> Support (24/7) :  (+91)99 8283	2466 </strong><br><br></p>
	<span class="btn btn-mini"><span class="icon-shopping-cart"></span></span>
	<span class="btn btn-warning btn-mini">$</span>
	<span class="btn btn-mini">&pound;</span>
	<span class="btn btn-mini">&euro;</span>
	</div>
</div>
</header>

<!--
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class="active"><a href="index.php">Home	</a></li>
	
			  <li class=""><a href="category_view.php">View Advertisement</a></li>
			  <li class=""><a href="inbox.php">Inbox</a></li>
			  <li class=""><a href="signup.php">Signup</a></li>
			  <li class=""><a href="contactus.php">Contact Us</a></li>
			</ul>
			
			<ul class="nav pull-right">
			<li class="dropdown">
			
				<?php
				
					if(isset($_SESSION["idd"]))
				echo '<a href="logout.php"><span class="icon-lock"></span> Logout <b class="caret"></b></a>';
				else
				echo '<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>';
				
				?>
			
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
<!-- 
Body Section 
-->
	<div class="row">
<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">
	<?php
	
		include('admin/comman.php');
		$r=mysql_query("select * from adminc");
		while($rows=mysql_fetch_array($r))
		{
	?>

	<li><a href="view_sub.php?a=<?php echo $rows[1]; ?>">
	<span class="icon-chevron-right"></span><?php  echo  $rows[1];  ?></a></li>
	
	<?php
	}
	
	?>

		<li style="border:0"> &nbsp;</li>
		<li> <a class="totalInCart" href="cart.html"><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;"></span></strong></a></li>
	</ul>
</div>

			  <div class="well well-small alert alert-warning cntr">
				  <h2>50% Discount</h2>
				  <p> 
					 only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
				  </p>
			  </div>
			  <div class="well well-small" ><a href="#"><img src="assets/img/paypal.jpg" alt="payment method paypal"></a></div>
			
			<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="admin/category_photo/petslogo.jpg" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h4><span class="pull-center"><img src="assets/img/rs.png">1.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="images/iphone6.jpg" alt="shopping cart">
				<div class="caption">
				  <h4><span class="pull-center"><img src="assets/img/rs.png">10.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span></a>
				<img src="images/santro.jpg" alt="bootstrap template">
				<div class="caption">
				  <h4>
				  <span class="pull-center"><img src="assets/img/rs.png">22.00</span></h4>
				</div>
			  </div>
			</li>
		  </ul>

	</div>
	<div class="span9" style='width:930px'>
	<div class="well np">
		<div id="myCarousel" class="carousel slide homCar">
            <div class="carousel-inner">
			  <div class="item">
                <img style="width:100%" src="assets/img/bike1.jpg" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4>Harley's shopping cart</h4>
                      <p><span>Very costly but simple to use</span></p>
                </div>
              </div>
			  <div class="item">
                <img style="width:100%" src="assets/img/kutte.jpg" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4>100% Pure Pet Breeds</h4>
                      <p><span>Highly seo friendly</span></p>
                </div>
              </div>
			  <div class="item active">
                <img style="width:100%" src="assets/img/abcd.jpg" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4>Feels Like Home</h4>
                      <p><span>Very cozy to sleep and rest.</span></p>
                </div>
              </div>
              <div class="item">
                <img style="width:100%" src="assets/img/applesss.jpg" alt="bootstrap templates">
                <div class="carousel-caption">
                      <h4>Not that affordable</h4>
                      <p><span>But you can use this second piece</span></p>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
        </div>
<!--
New Products
-->

		
	</div>
	<!--
	Featured Products
	-->
		<div class="well well-small">
		  <h3><a class="btn btn-mini pull-right" href="products.html" title="View more">VIew More<span class="icon-plus"></span></a> Featured Products  </h3>
		  <hr class="soften"/>
		  <div class="row-fluid">
		  
	