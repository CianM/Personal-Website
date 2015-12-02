<!DOCTYPE html>
<html>
	<head>
		<title>Portfolio | Micro-Vision Custom Computers</title>
		<meta name="description" content="An interactive site for viewing and customizing Micro-Vision\'s custom-built systems. ">
		<meta name="keywords" content="portfolio, Cian Mackle, Micro-Vision, custom, computers">
		<link rel="icon" href="../../images/favicon.png" type="image/png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/micro-vision_style.css">
	</head>
	<body>
	
		<nav class="navbar navbar-default navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a id="brand_name" class="navbar-brand lobster" href="../../index.php">Cian Mackle</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav navbar-right text-center open_sans">
				<li><a href="../../index.php#about">About</a></li>
				<li role="separator" class="nav-divider"></li>
				<li><a href="../../index.php#skills">Skills</a></li>
				<li role="separator" class="nav-divider"></li>
				<li><a href="../../index.php#portfolio">Portfolio</a></li>
				<li role="separator" class="nav-divider"></li>
				<li><a href="../../index.php#contact">Contact</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container -->		  
		</nav>
		
		<header class="container-fluid text-center">
			<h1>Micro-Vision Custom Computers</h1>
		</header>
		
		<section class="container">			
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-xs-12">
					<a href="site/index.php">
						<img class="img-responsive center-block" src="images/site_screenshot.png" alt="Site screenshot">
					</a>
					<h2 class="lobster text-center">Background</h2>
					<p class="text-justify">
						The goal of this project was to transition Micro-Vision's custom systems PDFs to an interactive web app. 
						The customer is able to customize their order based on the available options. Using the new site, the price and specifications 
						are updated automatically, giving a full overview of their choices. 
					</p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-xs-12 features">
					<div class="row">
						<div class="col-xs-6">
							<img class="img-responsive center-block" src="images/pdf_screenshot.png" alt="PDF screenshot">
						</div>
						<div class="col-xs-6">
							<img class="img-responsive center-block" src="images/converted_screenshot.jpeg" alt="Converted screenshot">
						</div>
						<div class="col-xs-12 text-center">
							<i>Original PDF and converted page</i>
						</div>
					</div>
					
					<h2 class="lobster text-center">Features</h2>
				
					<img class="img-responsive center-block" src="images/price_selection_screenshot.jpeg" alt="Price and selected options screenshot">
					<p class="text-center">When the pages open the base build is selected and the included components are highlighted.</p>
					<hr>
					
					<img class="img-responsive center-block" src="images/price_change_screenshot_highlights.jpg" alt="Price change screenshot">
					<p class="text-center">Changing the components with the radio buttons updates both the price and the spec list.</p>
					<hr>
					
					<img class="img-responsive center-block" src="images/other_options_screenshot.png" alt="Other options screenshot">
					<p class="text-center">Additional options can be added by selecting the checkboxes and they are then listed below the spec list.</p>
					<hr>
					
					<p class="text-center">Link to download original PDFs for convenience.</p>
					<hr>
					<p class="text-center">Future features: I plan to add the ability to email/print the current build. 
						This may be useful if, at a later date, the site adds e-commerce functionality.
					</p>
					<hr>
				</div> <!-- /col -->
			</div> <!-- /row -->
			
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-xs-12 text-center">
					<h2 class="lobster">What I learned</h2>
					<div class="row">
						<div class="col-xs-offset-2 col-xs-3">
							<img class="img-responsive center-block" src="images/bootstrap.png" alt="Bootstrap logo">
						</div>
						<div class="col-xs-offset-2 col-xs-3">
							<img class="img-responsive center-block" src="images/git.png" alt="Git logo">
						</div>
					</div>
					<p>
						On each new project I try to incorporate the learning of a new technology or technique. 
						Here I began using the Bootstrap front-end framework to quickly achieve a clean and responsive interface. 
						At the same time I looked deeper into the code to see how Bootstrap achieves it responsiveness 
						and I learned more about CSS3 Media Queries. 
					</p>
					<p>
						This was also my first time incorporating Git into my workflow and its usefulness became immediately apparent. 
						Although some of the more advanced features were not used in this project, I feel that I now have a solid grasp of the basics of 
						this version control software and will continue to use it.
					</p>
				</div> <!-- /col -->
			</div> <!-- /row -->
			
			<div class="row">
				<div class="col-md-offset-3 col-md-6 col-xs-offset-1 col-xs-10">
					<a class="btn btn-primary center-block visit_site_button lobster" href="site/index.php">Visit Site</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-3 col-md-6 col-xs-offset-1 col-xs-10">
					<a class="btn btn-info center-block visit_site_button lobster" href="https://github.com/CianM/Micro-Vision-Custom-Systems">
						View code on GitHub
					</a>
				</div>
			</div>
		</section>
		
		<footer class="container-fluid">
			<nav class="row text-center">
				<div class="col-xs-3">
					<a href="../../index.php#about">About</a>
				</div>
				<div class="col-xs-3">
					<a href="../../index.php#skills">Skills</a>
				</div>
				<div class="col-xs-3">
					<a href="../../index.php#portfolio">Portfolio</a>
				</div>
				<div class="col-xs-3">
					<a href="../../index.php#contact">Contact</a>
				</div>
			</nav><!-- /row -->
		</footer><!-- /container -->
	
	
		<!-- Scripts ========== -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	</body>
</html>