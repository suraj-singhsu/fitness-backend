<!DOCTYPE html>
<html lang="en" class="coming-soon">
	<head>
	    <meta charset="utf-8">
	    <title>Login Form</title>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="apple-touch-fullscreen" content="yes">
	    <meta name="author" content="IMSs">
	    
	    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600'>
    	
    	<link rel="stylesheet" type="text/css" href="plugins/iCheck/skins/minimal/blue.css">
    	<link type="text/css" rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    	<link type="text/css" rel="stylesheet" href="fonts/themify-icons/themify-icons.css"><!-- Themify Icons -->
    	<link type="text/css" rel="stylesheet" href="css/styles.css">
		<script type="text/javascript" src="js/customjs.js"></script>
    </head>
    <body class="focused-for animated-content pt-xl">
	@section('content')
		<div class="col-sm-4 col-sm-offset-4">
			<a href="index.php" class="login-logo text-center"><h2> <b>VIKAS MOBILE SHOP</b> </h2></a>
			<div class="panel panel-default">
				<div class="panel-heading"><h2>Login Form</h2></div>
				<div class="panel-body">
				<!--  -->
					<form onsubmit="return false" class="form-horizontal" id="validate-form">
						<div class="form-group mb-md">
	                        <div class="col-sm-12">
	                        	<label><b>Username Or Email ID:</b></label>
	                        	<div class="input-group">							
									<span class="input-group-addon"><i class="ti ti-user"></i></span>
									<input type="text" name="name" id="username" class="form-control" placeholder="Enter Username Or Email ID..">
								</div>
	                        </div>
						</div>
						<div class="form-group mb-xs">
	                        <div class="col-sm-12">
	                        	<label><b>Password:</b></label>
	                        	<div class="input-group">
									<span class="input-group-addon"><i class="ti ti-key"></i></span>
									<input type="password" name="description" id="password" class="form-control" placeholder="Enter Password Here..">
								</div>
	                        </div>
						</div>
						<div class="row mt mb">
							<div class="col-sm-12">
								<a href="forgotpassword.php" class="pull-left">Forgot password?</a>
							</div>
						</div>
						<center>
							
							<input type="submit" id="btn_submit" value="LOGIN" class="btn btn-green" onclick="check_login('validate-form','login_cod.php')">
							<input type="reset" value="Cancel" class="btn btn-default">
						</center>
					</form>
				</div>
			</div>
		</div>
			
		<!-- Load jQuery -->
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<!-- Load jQueryUI -->
		<script type="text/javascript" src="js/jqueryui-1.10.3.min.js"></script>
		<!-- Load Bootstrap -->			
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- Load Enquire -->	
		<script type="text/javascript" src="js/enquire.min.js"></script>
		<!-- Load Velocity for Animated Content -->
		<script type="text/javascript" src="plugins/velocityjs/velocity.min.js"></script>
		<script type="text/javascript" src="plugins/velocityjs/velocity.ui.min.js"></script>
		<!-- Wijet -->
		<script type="text/javascript" src="plugins/wijets/wijets.js"></script>     						
		<!-- Code Prettifier  -->
		<script type="text/javascript" src="plugins/codeprettifier/prettify.js"></script>
		<!-- Swith/Toggle Button -->
		<script type="text/javascript" src="plugins/bootstrap-switch/bootstrap-switch.js"></script>
		<!-- Bootstrap Tabdrop -->
		<script type="text/javascript" src="plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  
		<!-- iCheck -->
		<script type="text/javascript" src="plugins/iCheck/icheck.min.js"></script>
		<!-- nano scroller -->
		<script type="text/javascript" src="plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> 
		<script type="text/javascript" src="js/application.js"></script>
		<script type="text/javascript" src="demo/demo.js"></script>
		<script type="text/javascript" src="demo/demo-switcher.js"></script> 
    	<!-- End loading page level scripts-->
    </body>
</html>