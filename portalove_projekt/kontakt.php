
<?php
include_once "conn.php";
$db = $GLOBALS['db'];



$menuItems = $db->getMenu();

?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title>Concept HTML5 Layout</title>
    <meta name="keywords" content="" />
	<meta name="description" content="" />
<!-- 
Concept Template 
http://www.templatemo.com/tm-397-concept 
-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>

	<!-- CSS Bootstrap & Custom -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo_misc.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="css/templatemo_style.css">

	<!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">

</head>
<body>
	

	<div class="site-header">
		<div class="main-navigation">
			<div class="responsive_menu">
				<ul>
					<li><a class="show-1 templatemo_home" href="#">Gallery</a></li>
					<li><a class="show-2 templatemo_page2" href="#">Products</a></li>
					<li><a class="show-3 templatemo_page3" href="#">Services</a></li>
					<li><a class="show-4 templatemo_page4" href="#">About Us</a></li>
					<li><a class="show-5 templatemo_page5" href="#">Contact Us</a></li>
				</ul>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 responsive-menu">
						<a href="#" class="menu-toggle-btn">
				            <i class="fa fa-bars"></i>
				        </a>
					</div> <!-- /.col-md-12 -->
					<div class="col-md-12 main_menu">
						<ul>
								<?php 
 							foreach ($menuItems as $menuItems) {
 								echo '<li><a  href=" '.$menuItems["subor"].' ">'.$menuItems["nazov"].'</a></li>';
 							}
							?>
						<!--
					<li><a class="show-1 templatemo_home" href="#">Gallery</a></li>
					<li><a class="show-2 templatemo_page2" href="#">Products</a></li>
					<li><a class="show-3 templatemo_page3" href="#">Services</a></li>
					<li><a class="show-4 templatemo_page4" href="#">About Us</a></li>
					<li><a class="show-5 templatemo_page5" href="#">Contact Us</a></li>
				-->
				</ul>
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.main-navigation -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="#" class="templatemo_logo">
						
					</a> <!-- /.logo -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.site-header -->


	<div id="menu-container">
<div class="content homepage" id="menu-1">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="widget-content">
							<div class="page-title">Contact Us</div>
							<div class="contact-form">
								<fieldset>
									<input id="name" type="text" name="name" placeholder="Name" maxlength="40">
								</fieldset>
								<fieldset>
									<input type="email" name="email" id="email" placeholder="Email" maxlength="30">
								</fieldset>
								<fieldset>
									<input type="text" name="subject" id="subject" placeholder="Subject" maxlength="60">
								</fieldset>
								<fieldset>
									<textarea name="comments" id="comments" placeholder="Message"></textarea>
								</fieldset>
								<fieldset>
									<input type="submit" name="send" value="Send Message" id="submit" class="button">
								</fieldset>
							</div> <!-- /.contact-form -->
						</div> <!-- /.inner-content -->
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6">
						<div class="widget-content">
							<div class="page-title">Our Location</div>

							<div id="templatemo_map"></div>

                            <div class="contact-information">
                            	<div class="row">
                            		<div class="col-md-6 col-sm-6">
                            			<p>120 Digital Studio, Inya Lake, Yangon 10620, Myanmar</p>
                            		</div> <!-- /.col-md-6 -->
                            		<div class="col-md-6 col-sm-6 text-right">
                            			<ul>
                            				<li>Tel: 010-020-0340</li>
                            				<li>Email: info@company.com</li>
                            			</ul>
                            		</div> <!-- /.col-md-6 -->
                            	</div> <!-- /.row -->
                            </div> <!-- /.contact-information -->
						</div> <!-- /.inner-content -->
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.contact -->



		

		
	
	</div> <!-- /#menu-container -->

	<div id="templatemo_footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>Copyright &copy; 2084 Your Company Name</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.templatemo_footer -->

	<!-- Scripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/modernizr.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/tabs.js"></script>
	<script src="js/jquery.lightbox.js"></script>
	<script src="js/templatemo_custom.js"></script>
	<!-- 
    	Free Responsive Template by templatemo
    	http://www.templatemo.com
	-->
    <!-- templatemo 397 concept -->
</body>
</html>