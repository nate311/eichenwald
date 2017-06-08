<!DOCTYPE html>
<!-- ================================================================
This copyright notice must remain untouched at all times.
Copyright (C) 2013-2016 Nathan Fazakerly. All rights reserved.
Do not copy without written permission of Nathan Fazakerly.
==================================================================-->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
		<!-- favicons -->
		<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/android-chrome-manifest.json">
		<meta name="msapplication-TileColor" content="#2b5797">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
		<title>A Smoothie Recipe Generator - Smoothie Mixer</title>
        <meta name="description" content="A smoothie generator web app that generates a random smoothie recipe based on flavor.">
		<meta name="keywords" content="smoothie generator, smoothie recipe generator, generate a random smoothie, paleo smoothies, paleo smoothie recipes, generate smoothie">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- facebook share properties -->
		<meta property="og:url" content="http://smoothiegenerator.net"/>		
		<meta property="og:title" content="Smoothie Mixer - a Smoothie Generator"/>
		<meta property="og:type" content="website"/>
		<meta property="og:image" content="http://smoothiegenerator.net/img/logo.png"/>
		<meta property="og:image:type" content="image/png" />
		
		<!-- stylesheets -->
		<link rel="image_src" href="http://www.smoothiegenerator.net/img/logo.png"/>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/mfglabs_iconset.css">
    </head>
    <body>
        <!--[if lt IE 9]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div id="wrapper" class="clearfix">
			<header class="clearfix">
				<a href="http://www.smoothiegenerator.net"><img src="img/logo.svg" alt="" class="logo" /></a>
				<h1>Pick a flavor to generate a random smoothie recipe!</h1>
			<nav>
				<ul>
				<li id="sweet"><a class="nav-left" title="sweet smoothies">sweet</a></li>
				<li id="savory"><a class="nav-mid" title="savory smoothies">savory</a></li>
				<li id="sweetSavory"><a class="nav-mid" title="sweet &amp; savory smoothies">sweet &amp; savory</a></li>
				<li id="random"><a class="nav-right" title="totally random smoothie">random</a></li>
				</ul>
			</nav>
			</header>
			<div id="container" class="clearfix">
				<div id="flavors">	
					<div class="sweet" style="display:none;">
					</div>
					<div class="savory" style="display:none;">
					</div>
					<div class="sweetSavory" style="display:none;">
					</div>
					<div class="random" style="display:none;">
					</div>
					<div class="keyword" style="display:none;">
					</div>
					<div class="listAll" style="display:none;">
					</div>
				</div>
				<div id="ingredients"></div>
				<div id="directions"></div>
			</div>
			
			<div id="keywordSearch" class="clearfix">
				<h4>Search by ingredient to show specific recipes!</h4>
				<form id="keyword-form" name="input">
					<div id="keyword-text">Search ingredient:</div>
					<div id="center" class="clearfix">
						<div id="search-left">
						<input type="text" id="keywords" autocomplete="off" placeholder="e.g. bananas or paleo"></input>
						</div>
						<div id="search-right">
							<input type="submit" title="search by keyword" class="button" value="search" id="search"></input>
						</div>
					</div>
				</form>
				<div id="tip">
					<p>Tip: search "simple" (no quotes) to show a recipe with five or less ingredients.</p>
				</div>
				<div id="list" class="clearfix">
					<a href="#" class="list">List all smoothies</a>
				</div>
			</div>
			
			<footer>
				<p><strong>Smoothie Mixer&reg;</strong> - A <strong>Smoothie Generator</strong> created by <a rel="author" href="https://plus.google.com/u/0/105013884643014555630?rel=author"></a><a href="http://www.natefaz.com" class="button">Nate Fazakerly</a></p>
			<p>Questions or comments? <a href="mailto:nate@natefaz.com" class="button">Email me</a></p>
			<p>&copy; <?php echo date("Y"); ?>&nbsp;Nate Fazakerly</p>
			</footer>
			
		<div id="fb-container">
			<div class="fb-like" data-href="http://www.smoothiegenerator.net" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
			</div>
		</div>
		<a href="#" class="top uarr" id="top"></a>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-54091861-1', 'auto');
		  ga('send', 'pageview');
		</script>
		<!-- facebook share script -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1453218794973455";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div id="fb-root"></div>
    </body>
</html>
