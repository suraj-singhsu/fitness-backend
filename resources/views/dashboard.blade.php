<?php
	// require"secure.php";
	// require"connection.php";
	// $page_id="dashboard.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <title>Dashboard - Vikas Mobile Shop</title>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	    <meta name="Vikas Mobile Shop" content="yes">
	    <meta name="apple-touch-fullscreen" content="yes">
	    <meta name="description" content="Vikas Mobile Shop">
	    <meta name="author" content="Vikas Mobile Shop">

	    <link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'>
	    <link type="text/css" href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet"><!-- Font Awesome -->
	    <link type="text/css" href="fonts/themify-icons/themify-icons.css" rel="stylesheet"><!-- Themify Icons -->
	    <link type="text/css" href="css/styles.css" rel="stylesheet"><!-- Core CSS with all styles -->
	    <link type="text/css" href="plugins/codeprettifier/prettify.css" rel="stylesheet"><!-- Code Prettifier -->
	    <link type="text/css" href="plugins/iCheck/skins/minimal/blue.css" rel="stylesheet"><!-- iCheck -->
		<link type="text/css" href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet"><!-- FullCalendar -->
		<link type="text/css" href="plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"><!-- jVectorMap -->
		<link type="text/css" href="plugins/switchery/switchery.css" rel="stylesheet">
		@include("partials.head")
    </head>
    <body class="animated-content">  
        @include("partials.header")
        <div id="wrapper">
            <div id="layout-static">

            	<!-- Sidebar Include -->
				@include("partials.sidebar")
				<!-- Sidebar Include -->
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <div class="container-fluid mt-xs">
                            	<h2 class="text-center"><b>Welcome To Vikas Mobile Shop</b></h2>
                            	<?php //echo "<pre>".$_SESSION['login_id']."</pre>"; ?>
                            	<?php echo "--abcd--";
								
								
								if(DB::connection()->getPdo())
								{
									echo "Successfully connected to the database => "
												 .DB::connection()->getDatabaseName();
								}
							
								?>
                            	<div class="row">
									<div class="col-md-3">
										<div class="info-tile tile-orange">
											<?php
												// $select1="SELECT count(brand_id) FROM tbl_brand";
												// $res1=mysqli_query($con,$select1);
												// if($row1=mysqli_fetch_array($res1))
											?>
											<div class="tile-icon"><i class="ti ti-shopping-cart-full"></i></div>
											<div class="tile-heading"><span>Product Brand</span></div>
											<div class="tile-body"><span>0<?php //echo $row1[0]; ?></span></div>
											<div class="tile-footer"><span class="text-success">22.5% <i class="fa fa-level-up"></i></span></div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="info-tile tile-success">
											<?php
												// $select1="SELECT count(pc_id) FROM tbl_product_category";
												// $res1=mysqli_query($con,$select1);
												// if($row1=mysqli_fetch_array($res1))
											?>
											<div class="tile-icon"><i class="ti ti-bar-chart"></i></div>
											<div class="tile-heading"><span>Product Category</span></div>
											<div class="tile-body"><span>0<?php //echo $row1[0]; ?></span></div>
											<div class="tile-footer"><span class="text-danger">12.7% <i class="fa fa-level-down"></i></span></div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="info-tile tile-info">
											<?php
												// $select1="SELECT count(p_id) FROM tbl_product";
												// $res1=mysqli_query($con,$select1);
												// if($row1=mysqli_fetch_array($res1))
											?>
											<div class="tile-icon"><i class="ti ti-stats-up"></i></div>
											<div class="tile-heading"><span>Total Product</span></div>
											<div class="tile-body"><span>0<?php //echo $row1[0]; ?></span></div>
											<div class="tile-footer"><span class="text-success">5.2% <i class="fa fa-level-up"></i></span></div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="info-tile tile-danger">
											<?php
												// $select1="SELECT count(p_id) FROM tbl_product";
												// $res1=mysqli_query($con,$select1);
												// if($row1=mysqli_fetch_array($res1))
											?>
											<div class="tile-icon"><i class="ti ti-bar-chart-alt"></i></div>
											<div class="tile-heading"><span>Total user</span></div>
											<div class="tile-body"><span>0<?php// echo $row1[0]; ?></span></div>
											<div class="tile-footer"><span class="text-danger">10.5% <i class="fa fa-level-down"></i></span></div>
										</div>
									</div>
								</div>
							</div>
                    		<!-- Footer -->
		                    @include("partials.footer")
		                    <!-- Footer -->
							<script>
							  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
							  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');ga('create', 'UA-44426473-4', 'auto'); ga('send', 'pageview');
							</script>
                		</div>
            		</div>
        		</div>
        	</div>
        </div>
	    <!-- Switcher -->
		@include("partials.change_theme_color")
		<!-- /Switcher -->
    	<!-- Load site level scripts -->
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script><!-- Load jQuery -->
		<script type="text/javascript" src="js/jqueryui-1.10.3.min.js"></script><!-- Load jQueryUI -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Load Bootstrap -->
		<script type="text/javascript" src="js/enquire.min.js"></script><!-- Load Enquire -->
		<script type="text/javascript" src="plugins/velocityjs/velocity.min.js"></script><!-- Load Velocity for Animated Content -->
		<script type="text/javascript" src="plugins/velocityjs/velocity.ui.min.js"></script>
		<script type="text/javascript" src="plugins/wijets/wijets.js"></script><!-- Wijet -->
		<script type="text/javascript" src="plugins/codeprettifier/prettify.js"></script><!-- Code Prettifier  -->
		<script type="text/javascript" src="plugins/bootstrap-switch/bootstrap-switch.js"></script><!-- Swith/Toggle Button -->
		<script type="text/javascript" src="plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script><!-- Bootstrap Tabdrop -->
		<script type="text/javascript" src="plugins/iCheck/icheck.min.js"></script><!-- iCheck -->
		<script type="text/javascript" src="plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script><!-- nano scroller -->
		<script type="text/javascript" src="js/application.js"></script>
		<script type="text/javascript" src="demo/demo.js"></script>
		<script type="text/javascript" src="demo/demo-switcher.js"></script>
		<!-- End loading site level scripts -->
	    <!-- Load page level scripts-->
		<!-- Charts -->
		<script type="text/javascript" src="plugins/charts-flot/jquery.flot.min.js"></script><!-- Flot Main File -->
		<script type="text/javascript" src="plugins/charts-flot/jquery.flot.pie.min.js"></script><!-- Flot Pie Chart Plugin -->
		<script type="text/javascript" src="plugins/charts-flot/jquery.flot.stack.min.js"></script><!-- Flot Stacked Charts Plugin -->
		<script type="text/javascript" src="plugins/charts-flot/jquery.flot.orderBars.min.js"></script><!-- Flot Ordered Bars Plugin-->
		<script type="text/javascript" src="plugins/charts-flot/jquery.flot.resize.min.js"></script><!-- Flot Responsive -->
		<script type="text/javascript" src="plugins/charts-flot/jquery.flot.tooltip.min.js"></script><!-- Flot Tooltips -->
		<script type="text/javascript" src="plugins/charts-flot/jquery.flot.spline.js"></script><!-- Flot Curved Lines -->
		<script type="text/javascript" src="plugins/sparklines/jquery.sparklines.min.js"></script><!-- Sparkline -->
		<script type="text/javascript" src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script><!-- jVectorMap -->
		<script type="text/javascript" src="plugins/switchery/switchery.js"></script><!-- Switchery -->
		<script type="text/javascript" src="plugins/easypiechart/jquery.easypiechart.js"></script>
	    <!-- End loading page level scripts-->
    </body>
</html>