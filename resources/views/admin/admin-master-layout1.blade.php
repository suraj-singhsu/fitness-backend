<!DOCTYPE html>
<html lang="en" class="coming-soon">
	<head>
	    <meta charset="utf-8">
	    <title>SVIS Admin</title>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="apple-touch-fullscreen" content="yes">
	    <meta name="author" content="IMSs">
	    <meta name="csrf-token" content="{{ csrf_token() }}">
	    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600'>
    	
    	<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/iCheck/skins/minimal/blue.css')}}">
    	<link type="text/css" rel="stylesheet" href="{{asset('admin-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    	<link type="text/css" rel="stylesheet" href="{{asset('admin-assets/fonts/themify-icons/themify-icons.css')}}"><!-- Themify Icons -->
    	<link type="text/css" rel="stylesheet" href="{{asset('admin-assets/css/styles.css')}}">
	   	<!--CSS  Notification Plugin -->


        <link type="text/css" href="{{asset('admin-assets/plugins/pines-notify/pnotify.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('admin-assets/plugins/switchery/switchery.css')}}" rel="stylesheet">
        <!-- Switchery -->

        <script type="text/javascript" src="{{asset('admin-assets/js/jquery-1.10.2.min.js')}}"></script>

        <!--JS PNotify - - - - Notification Plugin -->
        <script type="text/javascript" src="{{asset('admin-assets/plugins/pines-notify/pnotify.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin-assets/js/custom-admin.js')}}"></script>
        <script>
            window.ParsleyConfig = {
                successClass: 'has-success'
                , errorClass: 'has-error'
                , errorElem: '<span></span>'
                , errorsWrapper: '<span class="help-block"></span>'
                , errorTemplate: "<div></div>"
                , classHandler: function(el) {
                    return el.$element.closest(".form-group");
                }
            };
        </script>
        <script type="text/javascript" src="{{asset('admin-assets/plugins/form-parsley/parsley.js')}}"></script>
        <!-- Validate Plugin / Parsley -->
        <script type="text/javascript" src="{{asset('admin-assets/demo/demo-formvalidation.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin-assets/demo/demo-formcomponents.js')}}"></script>
        <script type="text/javascript" rc="{{asset('admin-assets/plugins/switchery/switchery.js')}}"></script>
        <!-- Switchery -->
        <script type="text/javascript" src="{{asset('admin-assets/plugins/form-multiselect/js/jquery.multi-select.min.js')}}"></script>
        <!-- Multiselect Plugin -->
        <script type="text/javascript" src="{{asset('admin-assets/plugins/quicksearch/jquery.quicksearch.min.js')}}"></script>
        <!-- Quicksearch to go with Multisearch Plugin -->

    </head>
    <body class=" animated-content">
        @yield('before-login-section');
        @include("admin.layouts.theme-switcher")
    	<script type="text/javascript" src="{{asset('customjs.js')}}"></script>
		<!-- Load jQuery -->
		<script type="text/javascript" src="{{asset('admin-assets/js/jquery-1.10.2.min.js')}}"></script>

		<!-- Load jQueryUI -->
		<script type="text/javascript" src="{{asset('admin-assets/js/jqueryui-1.10.3.min.js')}}"></script>

		<!-- Load Bootstrap -->			
		<script type="text/javascript" src="{{asset('admin-assets/js/bootstrap.min.js')}}"></script>

		<!-- Load Enquire -->	
		<script type="text/javascript" src="{{asset('admin-assets/js/enquire.min.js')}}"></script> 									
		<!-- Load Velocity for Animated Content -->
		<script type="text/javascript" src="{{asset('admin-assets/plugins/velocityjs/velocity.min.js')}}"></script>

		<script type="text/javascript" src="{{asset('admin-assets/plugins/velocityjs/velocity.ui.min.js')}}"></script>

		<!-- Wijet -->
		<script type="text/javascript" src="{{asset('admin-assets/plugins/wijets/wijets.js')}}"></script>     						
		<!-- Code Prettifier  -->
		<script type="text/javascript" src="{{asset('admin-assets/plugins/codeprettifier/prettify.js')}}"></script>

		<!-- Swith/Toggle Button -->
		<script type="text/javascript" src="{{asset('admin-assets/plugins/bootstrap-switch/bootstrap-switch.js')}}"></script>
		<!-- Bootstrap Tabdrop -->
		<script type="text/javascript" src="{{asset('admin-assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js')}}"></script>  
		
		<!-- iCheck -->
		<script type="text/javascript" src="{{asset('admin-assets/plugins/iCheck/icheck.min.js')}}"></script>
		
		<!-- nano scroller -->
		<script type="text/javascript" src="{{asset('admin-assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js')}}"></script> 
		<script type="text/javascript" src="{{asset('admin-assets/js/application.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin-assets/demo/demo.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin-assets/demo/demo-switcher.js')}}"></script> 
    	<!-- End loading page level scripts-->
    </body>
</html>