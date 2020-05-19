<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Metronic | Dashboard
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Montserrat:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->  
        <!--begin::Page Vendors -->
		<link href="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors -->
        
		<link href="{{ asset('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/demo/demo3/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="{{asset('assets/demo/demo3/media/img/logo/favicon.ico')}}" />
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- BEGIN: Header -->
				@include('layouts.admin.header')
			<!-- END: Header -->		
		<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close m-aside-left-close--skin-dark" id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
					<!-- BEGIN: Aside Menu -->
					@include('layouts.admin.sidemenu')
					<!-- END: Aside Menu -->
				</div>	
				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					@include('layouts.admin.subheader')
					<!-- END: Subheader -->
					@yield('content')
@include('layouts.admin.footer')