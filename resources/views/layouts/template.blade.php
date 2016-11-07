<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8"/>
	<title>Example</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta content="Tran Dang Khoa" name="author"/>
	@yield('meta')
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,600,700,900' rel='stylesheet' type='text/css'>
	<link href="{{url('/css/bootstrap.min.css')}}" type='text/css' rel="stylesheet"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	@yield('style')
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="{{{ url('favicon.ico') }}}"/>
</head>
<body class="customize-background">
	<div class="common-background">
		@include('includes.header')

		<div class="clearfix"></div>

		@yield('content')
	</div>

	<div class="clearfix"></div>

	@include('includes.footer')

<!-- 	<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a> -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{url('/js/jquery.min.js')}}"></script>
	<script src="{{url('/js/bootstrap.min.js')}}"></script>

	@yield('script')
</body>
