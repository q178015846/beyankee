<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>连连卖</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	

	  <!-- Loading Bootstrap -->
    <link href="{{ asset("assets/dist/css/vendor/bootstrap.min.css") }}" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="{{ asset("assets/dist/css/flat-ui.min.css") }}" rel="stylesheet">


</head>
<body>
	@yield('body')
	<!-- Scripts -->
	


    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="{{ asset("assets/dist/js/vendor/jquery.min.js") }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset("assets/dist/js/vendor/video.js") }}"></script>
    <script src="{{ asset("assets/dist/js/flat-ui.min.js") }}"></script>
	

</body>
</html>