<?php

$crdate = date("r");

if (strcmp($_POST['lastname'], "") != 0) {
	echo "<h1>=)</h1>";
	die;
}

$status = (strcmp($_POST['name'], "") != 0) && (strcmp($_POST['email'], "") != 0) && (strcmp($_POST['text'], "") != 0);

if ($status) {
	$email_s_name		= $_POST['name'];
	$email_s_email		= $_POST['email'];
	$email_s_message	= $_POST['text'];
	$email_s_ip			= $_SERVER['REMOTE_ADDR'];

	$email_to			= "Bruno Philipe <brunophilipe@zoho.com>";
	$email_subject		= "Message sent from Cakebrew contact form.";
	$email_from			= "From: Cakebrew Contact Form <mailme@cakebrew.com>\r\nContent-Type: text/html\r\nReply-To: $email_s_name <$email_s_email>\r\n";
	$email_message		=

	"<!DOCTYPE html><html><head><title>$email_subject</title>
	<style type='text/css'>
	div#message {font-family: \"Lucida Console\", Monaco, monospace;}
	body {font-family: \"Trebuchet MS\", Helvetica, sans-serif;}
	p#textarea {white-space: pre-line;}
	p#footer {font-size:9;}
	</style></head><body>
	<p>An user has contacted you trough the Cakebrew contact form.</p>
	<p>This message was created at $crdate.</p>
	<p>User information:</p>
	<ul>
		<li>Name: $email_s_name</li>
		<li>Email: $email_s_email</li>
		<li>IP: $email_s_ip</li>
	</ul>
	<div id='message'>
	<p>
	-------------------<br />
	User message begins<br />
	-------------------<br />
	</p>
	<p id='textarea'>
	$email_s_message
	</p>
	<p>
	-----------------<br />
	User message ends<br />
	-----------------<br />
	</p>
	</div>
	Best Regards.<br />
	<p id='footer'>MailMe Contact Form by Bruno Philipe</p>
	</body>
	</html>
	";

	$status = mail($email_to,$email_subject,$email_message,$email_from);
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Cakebrew - The Mac App for Homebrew">
	<meta name="author" content="Bruno Philipe - www.brunophilipe.com">
	<link rel="shortcut icon" href="assets/img/favicon.png">

	<title>Cakebrew - Contact</title>

	<!-- Bootstrap core CSS -->
	<link href="/assets/css/bootstrap.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="/assets/css/main.css" rel="stylesheet">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
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
			<a class="navbar-brand" href="#"><b>Cakebrew</b></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="/" class="smothscroll">Home</a></li>
			</ul>
		</div><!--/.nav-collapse -->
		</div>
	</div>

	<!-- FEATURES WRAP -->
	<div class="features">
		<div class="container">
			<div class="row">
				<h1 class="centered">Contact</h1>
				<br>
				<?php if ($status): ?>
				<p class="text-center"><big>Thanks for the message. If you are waiting for a reply, please be patient.</big></p>
				<?php else: ?>
				<p class="text-center"><big>There was an error sending the email. Please be sure you filled ALL the form fields. To try again click the Back button in your browser.<?php echo $status; ?></big></p>
				<?php endif; ?>
				<br>
				<p class="text-center">
					<a href="http://www.cakebrew.com/" class="btn btn-lg btn-primary">Go back to Homepage</a>
				</p>
			</div>
			<br>
		</div><!--/ .container -->
	</div><!--/ #features -->

	<div id="c">
		<div class="container">
			<div class="col-lg-7"><p>Cakebrew &copy; Bruno Philipe 2014<br><small>Licensed under GNU GPL v3 License - All Rights Reserved</small><br><span id="retina">This website is 100% compatible with Retina Screen Macs</span></p></div>
			<div class="col-lg-5 text-right"><p>Website Created by <a href="http://www.brunophilipe.com/">Bruno Philipe</a><br>Theme by <a href="http://www.blacktie.co">BLACKTIE.CO</a></p></div>
		</div>
	</div>


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/smooth-scroll.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
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
	<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
	</body>
</html>
