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
    	
        <link href="{{asset('admin-assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    	<link href="{{asset('admin-assets/fonts/themify-icons/themify-icons.css')}}" rel="stylesheet" type="text/css" /><!-- Themify Icons -->
        <link href="{{asset('admin-assets/css/styles.css')}}" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
    	<link href="{{asset('admin-assets/plugins/codeprettifier/prettify.css')}}" rel="stylesheet" type="text/css"/>
    	<link href="{{asset('admin-assets/plugins/iCheck/skins/minimal/blue.css')}}" rel="stylesheet" type="text/css"/>
    	<link href="{{asset('admin-assets/plugins/iCheck/skins/minimal/_all.css')}}" rel="stylesheet" type="text/css"/>
    	<link href="{{asset('admin-assets/plugins/iCheck/skins/flat/_all.css')}}" rel="stylesheet" type="text/css"/>
    	<link href="{{asset('admin-assets/plugins/iCheck/skins/square/_all.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('admin-assets/plugins/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin-assets/plugins/datatables/dataTables.themify.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('admin-assets/plugins/pines-notify/pnotify.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin-assets/plugins/card/lib/css/card.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin-assets/plugins/switchery/switchery.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin-assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css" />
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

        <style>
            #api-msg{
                padding: 10px !important;
                margin-bottom: 20px !important;
            }
        </style>
    </head>
    <body class=" animated-content">
        @include("admin.layouts.header")
        <div id="wrapper">
            <div id="layout-static">
                @include("admin.layouts.sidemenu")
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            @yield('after-login-section')
                        </div>    
                    </div>
                </div>
            </div>
        </div>

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
        <script type="text/javascript" src="{{asset('admin-assets/plugins/datatables/jquery.dataTables.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin-assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>    
        <script type="text/javascript" src="{{asset('admin-assets/demo/demo-datatables.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin-assets/plugins/bootbox/bootbox.js')}}"></script>
        {{-- <script type="text/javascript" src="{{asset('admin-assets/plugins/jquery-chained/jquery.chained.min.js"')}}"></script> --}}
        <script type="text/javascript" src="{{asset('admin-assets/plugins/jquery-mousewheel/jquery.mousewheel.min.js')}}"></script>
        
        {{-- <script type="text/javascript" src="{{asset('admin-assets/demo/demo-modals.js')}}"></script> --}}
    </body>
</html>