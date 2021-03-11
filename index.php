<?php

function ipVersion($txt = null)
{
	if ($txt === null) $txt = $_SERVER["REMOTE_ADDR"];
    return strpos($txt, ":") === false ? 4 : 6;
}

function isIPv6()
{
	return ipVersion() === 6;
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Cakebrew - The Mac App for Homebrew">
	<meta name="author" content="Bruno Philipe - www.brunophilipe.com">
	<link rel="shortcut icon" href="/assets/img/favicon.png">

	<link rel="apple-touch-icon-precomposed" href="/assets/img/apple-touch-icon-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="/assets/img/apple-touch-icon-76x76-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="/assets/img/apple-touch-icon-120x120-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/img/apple-touch-icon-144x144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="/assets/img/apple-touch-icon-152x152-precomposed.png">

	<title>Cakebrew</title>

	<!-- Bootstrap core CSS -->
	<link href="/assets/css/bootstrap.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="/assets/css/main.css" rel="stylesheet">

	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

	<style type="text/css">
	.crypto
	{
		font-size: 12px;
		line-height: 15px;
		margin: 0;
		display: inline-block;
		font-family: monospace;
	}
	</style>
</head>
<body data-spy="scroll" data-offset="0" data-target="#navigation">

	<a class="hidden-xs" href="https://github.com/brunophilipe/Cakebrew"><img style="position: fixed; top: 51px; left: 0; border: 0; width:141px; z-index:999;" src="assets/img/forkme.png" alt="Fork me on GitHub"></a>

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
			<li class="active"><a data-scroll href="#home" class="smothscroll">Home</a></li>
			<li><a data-scroll href="#desc" class="smothscroll">Description</a></li>
			<li><a data-scroll href="#download" class="smothScroll">Download</a></li>
			<li><a data-scroll href="#screenshots" class="smothScroll">Screenshots</a></li>
			<li><a data-scroll href="#contact" class="smothScroll">Contact</a></li>
			</ul>
		</div><!--/.nav-collapse -->
		</div>
	</div>


	<section id="home"></section>
	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-12">
					<h1 class="hidden-xs">Welcome to <b>Cakebrew</b><small>beta</small></h1>
					<h1 class="visible-xs">Welcome to <b>Cakebrew</b><small>beta</small></h1>
					<h3 class="hidden-xs">The Mac App for Homebrew.</h3>
					<h3 class="visible-xs">The Mac App for Homebrew.</h3>
					<br>
				</div>

				<div class="col-lg-2 col-md-3">
					<h5>Useful</h5>
					<p>Do most of the usual tasks you need of Homebrew. Including updating and finding problems with the Doctor!</p>
					<img class="hidden-xs hidden-sm arrow" src="assets/img/arrow1.png" alt="Arrow pointing right">
				</div>
				<div class="col-lg-8 col-md-6">
					<img class="img-responsive" id="main-screenshot" src="assets/img/app-bg.png" alt="">
				</div>
				<div class="col-lg-2 col-md-3">
					<br>
					<h5>Practical &amp; Easy</h5>
					<p>Afraid to use the terminal? Cakebrew supports <b>Homebrew/bundle</b>. Export and import formulae easily!</p>
					<img class="hidden-xs hidden-sm arrow" src="assets/img/arrow2.png" alt="Arrow pointing left">
				</div>
			</div>
		</div> <!--/ .container -->
	</div><!--/ #headerwrap -->


	<!-- INTRO WRAP -->
	<section id="desc"></section>
	<div id="intro">
		<div class="container">
			<div class="row centered">
				<iframe src="github-btn.html?user=brunophilipe&amp;repo=Cakebrew&amp;type=follow" width="162" height="20"></iframe>
				<iframe src="github-btn.html?user=brunophilipe&amp;repo=Cakebrew&amp;type=fork&amp;count=true" width="100" height="20"></iframe>
				<iframe src="github-btn.html?user=brunophilipe&amp;repo=Cakebrew&amp;type=watch&amp;count=true" width="100" height="20"></iframe>
				<br>
				<br>
				<h1>Designed To Be Awesome</h1>
				<br>
				<br>
				<div class="col-lg-4">
					<img src="assets/img/intro01.png" alt="" style="max-width: 141px; max-height: 128px;">
					<h3>Community Aware</h3>
					<p>Cakebrew is open-source! Sweep through the code, fork, and improve it as you wish!</p>
				</div>
				<div class="col-lg-4">
					<img src="assets/img/intro02.png" alt="" style="max-width: 128px; max-height: 128px;">
					<h3>Easy to Use</h3>
					<p>Cakebrew was designed with the user in mind. No complicated interfaces!</p>
				</div>
				<div class="col-lg-4">
					<img src="assets/img/intro03.png" alt="" style="max-width: 128px; max-height: 128px;">
					<h3>Mountain Lion</h3>
					<p>Cakebrew is compatible with all OS X versions back to OS X 10.8.</p>
				</div>
			</div>
			<hr>
			<div class="row centered">
				<h1>But.. What's Homebrew?</h1>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3><a href="http://brew.sh">Homebrew</a> is a package manager for OS X.</h3>
					<p>With Homebrew you can install thousands of command-line applications and libraries that would require manual compilation, which is not always very straight-forward.<br>Cakebrew brings this to a whole new level of simplicity. Install command-line tools from an App. Could it be easier?</p>
				</div>
			</div>
		</div> <!--/ .container -->
	</div><!--/ #introwrap -->

	<!-- FEATURES WRAP -->
	<section id="download"></section>
	<div class="info">
		<div class="container">
			<hr>
			<div class="col-lg-8 col-md-7">
				<div class="row">
					<h1 class="centered">Download</h1>
					<br>
					<p class="text-center"><span class="big">Download Cakebrew today and discover the wonderful world of Homebrew and its Formulae!</span><br>Current Version: 1.2.5 (Oct 22nd, 2017)</p>
					<br>
					<p class="text-center btns-download">
						<a href="https://cakebrew-377a.kxcdn.com/cakebrew-1.2.5.dmg" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-cloud-download"></span>Download Now <small>via KeyCDN</small></a>
						<a href="https://github.com/brunophilipe/Cakebrew/releases" class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-folder-open"></span>Get Source <small>on GitHub</small></a>
					</p>
					<p class="text-center">
						<a class="btn btn-sm btn-default" href="https://www.cakebrew.com/files/cakebrew-1.2.5.dmg">Direct Download</a>
					</p>
				</div>
				<hr>
				<div class="row">
					<h1 class="centered">...or install via Homebrew</h1>
					<p class="text-center">How recursive is that?</p>
					<br>
					<p class="text-center"><span class="big">Just run this command:</span><br><code>brew install --cask cakebrew</code></p>
				</div>
				<hr>
				<div class="row">
					<h1 class="centered">Installation Notice</h1>
					<br>
					<p class="text-center">
						<span class="big">It is important to note that Cakebrew doesn't install Homebrew for you. To install Homebrew, please visit their website.</span>
						<br>
						<small>Installing Homebrew though Cakebrew is currently in the To-Do List =)</small>
					</p>
					<br>
					<p class="text-center">
						<a href="http://brew.sh" class="btn btn-lg btn-success" target="_blank"><span class="glyphicon glyphicon-star-empty"></span>Homebrew Website</a>
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-lg-offset-1 col-md-offset-1 col-md-4 well">
				<div class="row">
					<h1 class="centered">Localizations</h1>
					<ul id="todo">
						<li><b>Cakebrew currently supports:</b>
							<ul>
								<li>English</li>
								<li>Portuguese</li>
								<li>German</li>
								<li>French</li>
								<li>Chinese (Simplified)</li>
							</ul>
						</li>
						<li><b>In the pipeline:</b>
							<ul>
								<li>Spanish</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<br>
		</div><!--/ .container -->
	</div><!--/ #features -->

	<section id="screenshots"></section>
	<div id="showcase">
		<div class="container">
			<div class="row">
				<h1 class="centered">More Screenshots</h1>
				<br>
				<div class="col-lg-12">
					<div id="carousel-screenshots" class="carousel slide">
						<!-- Indicators -->
						<ol class="carousel-indicators">
						<li data-target="#carousel-screenshots" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-screenshots" data-slide-to="1"></li>
						<li data-target="#carousel-screenshots" data-slide-to="2"></li>
						<li data-target="#carousel-screenshots" data-slide-to="3"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<img src="assets/img/item-01.png" alt="Search for formulae." data-retina-resize="false">
							</div>
							<div class="item">
								<img src="assets/img/item-02.png" alt="Run the Doctor!" data-retina-resize="false">
							</div>
							<div class="item">
								<img src="assets/img/item-03.png" alt="Complete formula information." data-retina-resize="false">
							</div>
							<div class="item">
								<img src="assets/img/item-04.png" alt="Homebrew/bundle support." data-retina-resize="false">
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>
		</div><!-- /container -->
	</div>

	<!-- FEATURES WRAP -->
	<div class="features">
		<div class="container">
			<div class="col-lg-12">
				<div class="row">
					<br>
					<h1></h1>
					<p class="text-center"><span class="big">Cakebrew has been featured on many different tech blogs and websites in different languages. Take a look!</span></p>
					<br>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<p>In English:</p>
						<ul>
							<li><a href="https://news.ycombinator.com/item?id=7668383" target="_blank">Hacker News</a></li>
							<li><a href="https://www.reddit.com/r/osx/comments/24b3al/cakebrew_the_mac_app_for_homebrew/" target="_blank">Reddit r/osx</a></li>
							<li><a href="https://www.reddit.com/r/macapps/comments/4mv8p7/cakebrew/" target="_blank">Reddit r/macapps</a></li>
							<li><a href="http://ios.devtools.me/bydate.php" target="_blank">iOS.DevTools.Me</a></li>
							<li><a href="http://brettterpstra.com/2014/04/29/web-excursions-for-april-29-2014/" target="_blank">brettterpstra.com</a></li>
							<li><a href="http://onethingwell.org/post/84527275991/cakebrew" target="_blank">onethingwell.org</a></li>
							<li><a href="http://npmawesome.com/posts/2014-05-06-links/" target="_blank">npmawesome.com</a></li>
							<li><a href="http://afreshcup.com/home/2014/5/1/double-shot-1346.html" target="_blank">afreshcup.com</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<p>In German:</p>
						<ul>
							<li><a href="http://t3n.de/news/cakebrew-mac-app-fuer-homebrew-542416/" target="_blank">t3n.de</a></li>
							<li><a href="http://www.ifun.de/cakebrew-ein-mac-oberflaeche-fuer-das-kommandozeilen-tool-brew-59199/" target="_blank">ifun.de</a></li>
							<li><a href="http://www.aptgetupdate.de/2014/04/30/cakebrew-·-a-homebrew-gui/" target="_blank">aptgetupdate.de</a></li>
							<li><a href="http://nerdkunde.de/nk027.html" target="_blank">nerdkunde.de</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<p>In Russian:</p>
						<ul>
							<li><a href="http://habrahabr.ru/post/228757/" target="_blank">habrahabr.ru</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<p>In Spanish:</p>
						<ul>
							<li><a href="http://bitelia.com/2014/05/cakebrew-interfaz-grafica-homebrew" target="_blank">Bitelia.com</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<p>In Japanese:</p>
						<ul>
							<li><a href="http://blog.jicoman.info/2014/05/cakebrew/" target="_blank">blog.jicoman.info</a></li>
							<li><a href="http://qiita.com/aRyoKajiwara/items/e654481f714da83bf76e" target="_blank">Qiita.com</a></li>
							<li><a href="http://blog.mah-lab.com/2014/04/30/homebrew-cakebrew/" target="_blank">mah-lab.com</a></li>
							<li><a href="http://applech2.com/archives/38560275.html" target="_blank">applech2.com</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<p>In French:</p>
						<ul>
							<li><a href="http://korben.info/cakebrew-interface-graphique-homebrew-osx.html" target="_blank">Korben.info</a></li>
							<li><a href="http://www.macg.co/logiciels/2014/05/cakebrew-une-interface-pour-utiliser-homebrew-sans-terminal-81747" target="_blank">macg.co</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<p>In Swedish:</p>
						<ul>
							<li><a href="http://www.macpro.se/2014/04/grafiskt-granssnitt-for-homebrew/" target="_blank">macpro.se</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div><!--/ .container -->
	</div><!--/ #features -->

	<section id="contact"></section>
	<div id="footerwrap">
		<div class="container">
			<div class="col-lg-8 col-md-7">
				<h3>Cakebrew Maintainer</h3>
				<p>
					<b>Bruno Philipe</b><br>
					<small>Berlin, Germany &mdash;
						<a href="http://bruno.ph/">Website</a> |
						<a href="https://github.com/brunophilipe">GitHub</a>
					</small>
				</p>
				<p>
					<b>Contributors</b>
				</p>
				<ul class="contributors">
<?php
					$contributors = array("bfontaine", "coderyi", "jeanetienne", "jojomi", "davidspiess", "nlap", "forcha", "tanB", "ed-george", "abrausch", "nudelfabrik", "supreet321", "pborreli", "maximgavrilov", "cldsnchz", "hexxellor", "xhruso00", "smokyonion", "vincentsaluzzo", "alistairmcmillan", "gui-dos", "romankl", "gvt", "podgib", "matthewgadd", "duffpod", "dusek", "thenovices");
					sort($contributors);
					foreach ($contributors as $user) {
						echo "					<li><a href=\"https://github.com/$user\">$user</a></li>\n";
					}
					?>
				</ul>
				<div class="clearfix"></div>

				<hr>
				<p><small><b>
					Cakebrew supports all versions of OS X back to version 10.8.
					<br>
					Cakebrew is written in Objective-C and compiled in Xcode 7.2.1 on OS 10.11.3.
				</b></small></p>
			</div>

			<div class="col-lg-4 col-md-5">
				<h3>Drop Us A Line</h3>
				<br>
				<form role="form" action="mailme.php" method="post">
					<div class="form-group">
						<label for="name1">Your Name</label>
						<input type="text" name="name" class="form-control" id="name1" placeholder="Your Name" required>
					</div>
					<div class="form-group" id="form-384637" style="height: 0px; overflow: hidden; margin: 0;">
						<label for="name2">Last Name</label>
						<input type="text" name="lastname" class="form-control" id="name2" placeholder="Last Name">
					</div>
					<div class="form-group">
						<label for="email1">Your Email</label>
						<input type="email" name="email" class="form-control" id="email1" placeholder="Enter email" required>
					</div>
					<div class="form-group">
						<label>Your Message</label>
						<textarea class="form-control" name="text" rows="3" placeholder="Please type your message here..." required></textarea>
					</div>
					<br>
					<button type="submit" class="btn btn-large btn-success">SUBMIT</button>
				</form>
			</div>
		</div>
	</div>
	<div id="c">
		<div class="container">
			<div class="footer-left">
				<p>Cakebrew &copy; Bruno Philipe 2014-<?= date('Y') ?><br>
					<small>Licensed under GNU GPLv3 License - All Rights Reserved</small><br>
				</p>
				<p id="retina">This website is IPv6 ready<?= isIPv6() ? ", and you're connected via IPv6!! Cool! 😎" : ", but you're connected via IPv4." ?></p>
			</div>
			<div class="footer-right">
				<p>Website Created by <a href="https://www.brunophilipe.com/">Bruno Philipe</a><br>Theme by <a href="http://www.blacktie.co" target="_blank">BLACKTIE.CO</a><br>Icons from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a><br>Server hosted by <a href="https://m.do.co/c/f71ace2f461f">DigitalOcean</a></p>
				<p>High-avaliability file hosting provided by:<br><a href="https://www.keycdn.com/?a=14202" target="_blank"><img src="assets/img/keycdn.png" alt="KeyCDN" height="40px"></a></p>
				
			</div>
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
