<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Cakebrew - The Mac App for Homebrew">
	<meta name="author" content="Bruno Philipe - www.brunophilipe.com">
	<link rel="shortcut icon" href="assets/img/favicon.png">

	<link rel="apple-touch-icon-precomposed" href="/assets/img/apple-touch-icon-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="/assets/img/apple-touch-icon-76x76-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="/assets/img/apple-touch-icon-120x120-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/img/apple-touch-icon-144x144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="/assets/img/apple-touch-icon-152x152-precomposed.png">

	<title>Cakebrew - Not Found</title>

	<!-- Bootstrap core CSS -->
	<link href="/assets/css/bootstrap.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="/assets/css/main.css" rel="stylesheet">

	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body data-spy="scroll" data-offset="0" data-target="#navigation">
	<!-- Fixed navbar -->
	<div id="navigation" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><b>Cakebrew</b></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="https://www.cakebrew.com">Home</a></li>
			</ul>
		</div><!--/.nav-collapse -->
		</div>
	</div>


	<section id="home"></section>
	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-12">
					<h1>Four <b>ohh</b> Four</h1>
					<h3>This is not the page you are looking for...</h3>
					<br>
				</div>
			</div>
		</div> <!--/ .container -->
	</div><!--/ #headerwrap -->


	<!-- INTRO WRAP -->
	<section id="desc"></section>
	<div id="intro">
		<div class="container">
			<div class="row centered">
				<h4>You should go back to the <a href="https://www.cakebrew.com">home page</a> and find your content from there.</h4>
				<br>
			</div>
		</div> <!--/ .container -->
	</div><!--/ #introwrap -->

	<div id="c" style="position:absolute; bottom:0; left:0; right: 0;">
		<div class="container">
			<div class="col-lg-7">
				<p>Cakebrew &copy; Bruno Philipe 2014<br>
					<small>Licensed under GNU GPL v3 License - All Rights Reserved<br>
						DOGE: DCfsmLprBMVVq66KPiA4psXh6DdfjtigkG
					</small><br>
				</p>
				<p id="retina">This website is 100% compatible with Retina Screen Macs :)</p>
			</div>
			<div class="col-lg-5 text-right"><p>Website Created by <a href="http://www.brunophilipe.com/">Bruno Philipe</a><br>Theme by <a href="http://www.blacktie.co" target="_blank">BLACKTIE.CO</a><br>App icons by pixel-mixer</p></div>
		</div>
	</div>


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/smooth-scroll.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
	<script src="/assets/js/jquery.mobile.min.js"></script>
	<script>
	$('.carousel').carousel({
		interval: 3500
	})

	smoothScroll.init({
		speed: 500, // Integer. How fast to complete the scroll in milliseconds
		easing: 'easeInOutCubic', // Easing pattern to use
		updateURL: false, // Boolean. Whether or not to update the URL with the anchor hash on scroll
		offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
		callbackBefore: function ( toggle, anchor ) {}, // Function to run before scrolling
		callbackAfter: function ( toggle, anchor ) {} // Function to run after scrolling
	});
	</script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-30675692-3', 'cakebrew.com');
	  ga('send', 'pageview');

	</script>
	<script>
	  $(document).ready(function() {
  		 $("#carousel-screenshots").swiperight(function() {
    		  $(this).carousel('prev');
	    	});
		   $("#carousel-screenshots").swipeleft(function() {
		      $(this).carousel('next');
		   });
		});
	</script>
	</body>
</html>
