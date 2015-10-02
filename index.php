<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Cian Mackle | Front-End Web Developer</title>
		<!-- <meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="icon" href="" type="image/png"> -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/index_style.css">
	</head>
	<body>
		
		
		<?php
			// grab recaptcha library
			require_once "recaptchalib.php";
			
			// your secret key
			$secret = "6Lfw9g0TAAAAAPE1QXkUCkdogmXP3ZKFvmFo-4-i";
 
			// empty response
			$response = null;
 
			// check secret key
			$reCaptcha = new ReCaptcha($secret);
			
			// if submitted check response
			if ($_POST["g-recaptcha-response"]) {
				$response = $reCaptcha->verifyResponse(
					$_SERVER["REMOTE_ADDR"],
					$_POST["g-recaptcha-response"]
				);
			} 
		?>
		
		
		<nav class="navbar navbar-default navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a id="brand_name" class="navbar-brand lobster" href="index.php">Cian Mackle</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav navbar-right text-center open_sans">
				<li><a href="#">About</a></li>
				<li role="separator" class="nav-divider"></li>
				<li><a href="#">Portfolio</a></li>
				<li role="separator" class="nav-divider"></li>
				<li><a href="#">Contact</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container -->		  
		</nav>
	
	
		<!-- Intro ========== -->
		<header class="container-fluid">
			<div class="row">
				<!-- Me ========== -->
				<div class="col-md-4 col-xs-12 text-center">
					<div class="jumbotron">
						<img id="me" src="images/me.jpg" class="img-responsive center-block" alt="Me">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 text-center open_sans">
									<p id="name">Cian Mackle</p>
									<p>Front-End Web Developer</p>
								</div>
							</div><!-- /row -->
							<div class="row">
								<div class="col-xs-12 text-center open_sans">
									<p><span class="glyphicon glyphicon-map-marker"></span> Victoria, BC</p>
								</div>
							</div><!-- /row -->
							<div class="row">
								<div class="col-xs-4">
									<a href="mailto:cian@cianmackle.com">
										<img id="gmail" src="images/gmail.svg" class="img-responsive" alt="Email">
									</a>
								</div>
								<div class="col-xs-4">
									<a href="ie.linkedin.com/in/CianMackle">
										<img src="images/linkedin.png" class="img-responsive" alt="LinkedIn">
									</a>
								</div>
								<div class="col-xs-4">
									<a href="https://github.com/CianM">
										<img src="images/github.svg" class="img-responsive" alt="Github">
									</a>
								</div>
							</div><!-- /row -->
						</div><!--/container -->
					</div><!-- /jumbotron -->
				</div><!-- /col -->
				
				<!-- About Me ========== -->
				<div class="col-md-8 col-xs-12">
					<div class="jumbotron">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<p class="open_sans text-justify">
										Zombies reversus ab inferno, nam malum cerebro. De carne animata corpora quaeritis. Summus sit​​, morbo vel maleficia?
										De Apocalypsi undead dictum mauris. Hi mortuis soulless creaturas, imo monstra adventus vultus comedat cerebella viventium. 
									</p>
								</div>
							</div>
						</div>
					</div><!-- /jumbotron -->
				</div><!-- /col -->
			</div><!-- /row -->
		</header><!-- /container -->
		
		<!-- About ========== -->
		<section class="container">
			<div class="row text-center">
				<h2>Skills</h2>
			</div>
			
			<div class="row text-center">
				<!-- CV / Resume ========== -->
				<div class="col-xs-6">
					<a href="#">
						<div class="thumbnail">
							<img src="images/cv.svg" class="img-responsive" alt="Curriculum Vitae Link">
							<div class="caption">
								<label>Curriculum Vitae</label>
							</div>
						</div>
					</a>
				</div><!-- /col -->
				<div class="col-xs-6">
					<a href="#">
						<div class="thumbnail">
							<img src="images/cv.svg" class="img-responsive" alt="Resume Link">
							<div class="caption">
								<label>R&#233;sum&#233;</label>
							</div>
						</div>
					</a>
				</div><!-- /col -->
			</div><!-- /row -->	
			
			<div class="row">
				<div class="col-xs-12">
					<p class="open_sans text-center">
						Zombies reversus ab inferno, nam malum cerebro. De carne animata corpora quaeritis. Summus sit​​, morbo vel maleficia?
						De Apocalypsi undead dictum mauris. Hi mortuis soulless creaturas, imo monstra adventus vultus comedat cerebella viventium. 
					</p>
				</div><!-- /col -->
			</div><!-- /row -->
			
			<!-- Strong skills ========== -->
			<div class="row">
				<div class="col-xs-12">
					<h3 class="text-center open_sans"><u>Strong</u></h3>
				</div><!-- /col -->
				<div class="col-xs-4">
					<div class="thumbnail">
						<img src="images/strong/html5.png" class="img-responsive" alt="HTML5">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="thumbnail">
						<img src="images/strong/css3.png" class="img-responsive" alt="CSS3">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="thumbnail">
						<img src="images/strong/javascript.png" class="img-responsive" alt="Javascript">
					</div>
				</div><!-- /col -->
				
				<div class="col-xs-4">
					<div class="thumbnail">
						<img src="images/strong/jquery.png" class="img-responsive" alt="jQuery">
					</div>
				</div><!-- /col -->
				<div class="col-xs-4">
					<div class="thumbnail">
						<img src="images/strong/bootstrap.png" class="img-responsive" alt="Bootstrap">
					</div>
				</div><!-- /col -->
				<div class="col-xs-4">
					<div class="thumbnail">
						<img src="images/strong/git.png" class="img-responsive" alt="Git">
					</div>
				</div><!-- /col -->
				
				<div class="col-xs-4">
					<div class="thumbnail">
						<img src="images/strong/german.png" class="img-responsive" alt="German">
					</div>
				</div><!-- /col -->
				<div class="col-xs-4">
					<div class="thumbnail">
						<img src="images/strong/spanish.png" class="img-responsive" alt="Spanish">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="thumbnail">
						<img src="images/strong/ukulele.png" class="img-responsive" alt="Ukulele">
					</div>
				</div><!-- /col -->
			</div><!-- /row (Strong skills) -->
			
			<!-- Improving ========== -->
			<div class="row">
				<div class="col-xs-12">
					<h3 class="text-center open_sans"><u>Improving</u></h3>	
				</div><!-- /col -->
				
				<div class="col-xs-4">
					<div class="thumbnail">
						<img src="images/improving/angular.png" class="img-responsive" alt="Angular.js">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="thumbnail" style="height:100%; ">
						<img src="images/improving/sass.png" class="img-responsive" alt="SASS">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="thumbnail">
						<img src="images/improving/android.png" class="img-responsive" alt="Android">
					</div>
				</div><!-- /col -->
				<div class="col-xs-4">
					<div class="thumbnail">
						<img src="images/improving/gimp.png" class="img-responsive" alt="GIMP">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="thumbnail">
						<img src="images/improving/php.png" class="img-responsive" alt="PHP">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="thumbnail">
						<img src="images/improving/mysql.png" class="img-responsive" alt="MySQL">
					</div>
				</div><!-- /col -->
			</div><!-- /row (Improving) -->
			
			<!-- Future ========== -->
			<div class="row">
				<div class="col-xs-12">
					<h3 class="text-center open_sans"><u>Future</u></h3>
				</div><!-- /col -->
				<div class="col-xs-offset-2 col-xs-4">
					<div class="thumbnail">
						<img src="images/future/rails.png" class="img-responsive" alt="Rails">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="thumbnail">
						<img src="images/future/ios.png" class="img-responsive" alt="iOS">
					</div>
				</div><!-- /col -->
			</div><!-- /row -->

			<!-- Side-Projects -->
			<div class="row">
				<div class="col-xs-12">
					<h3 class="text-center open_sans"><u>Side Projects</u></h3>
				</div><!-- /col -->
				<div class="col-xs-offset-4 col-xs-4">
					<div class="thumbnail">
						<img src="images/side_projects/raspberry_pi.png" class="img-responsive" alt="Raspberry Pi">
					</div>
				</div><!-- /col -->
			</div><!-- /row -->
		</section><!-- /container -->
		
		<!-- Portfolio ========== -->
		<section id="portfolio" class="container-fluid">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h2>Portfolio</h2>
				</div><!-- /col -->
			</div><!-- /row -->
		</section><!-- /portfolio -->
		
		<!-- Contact ======== -->
		<section class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h2>Contact</h2>
				</div><!-- /col -->
			</div><!-- /row -->
			
			<div class="row">
				<div class="col-xs-12">
				
					<?php
						$me = "cian@cianmackle.com";
						$feedbackmail = "contact@cianmackle.com";

						if ( isset($_POST['submit'] ))
						{
								$name = $_POST['name'];
								$email = $_POST['email'];
								$subject = $_POST['subject'];
								$message = $_POST['message'];
								
								$headers = "From: $feedbackmail" . "\r\n" . "Reply-To: $email" . "\r\n";
								$details = "Name: $name" . "\r\n" . "Email: $email" . "\r\n" . "Subject: $subject" . "\r\n" . "\r\n" . $message;
								
								
								$a = mail( $me, $subject, $details, $headers );
								if ($a) 
								{
									 print("Message was sent, you can send another one");
								} else {
									 print("Message wasn't sent, please check that you have changed emails in the bottom");
								}
						}
					?>
						
					
					<form method="POST" action="index.php" class="open_sans">
						<div class="form-group">
							<label for="form_name">Name</label>
							<input type="text" class="form-control" id="form_name" placeholder="Name" name="name" require>
						</div>
						
						<div class="form-group">
							<label for="form_email">Email</label>
							<input type="email" class="form-control" id="form_email" placeholder="Email" name="email" required>
						</div>
						
						<div class="form-group">
							<label for="form_subject">Subject</label>
							<input type="text" class="form-control" id="form_subject" placeholder="Subject" name="subject" required>
						</div>
						
						<div class="form-group">
							<label for="form_text">Message</label>
							<textarea class="form-control" rows="5" id="form_message" placeholder="Message" name="message"></textarea>
						</div>
						
						<!-- reCAPTCHA ========== -->
						<div class="form-group">
							<div class="g-recaptcha pull-right" data-sitekey="6Lfw9g0TAAAAAMIDJc2LRkK0DY5WZPsPHPUuYrQX"></div> 
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary pull-right" name="submit">Submit</button>
						</div>
					</form>
					
				</div><!-- /col -->
			</div><!-- /row -->
		</section><!-- /contact -->
		
		
		<footer class="container-fluid">
			<nav class="row text-center open_sans">
				<div class="col-xs-4">
					<a href="#">About</a>
				</div>
				<div class="col-xs-4">
					<a href="#">Portfolio</a>
				</div>
				<div class="col-xs-4">
					<a href="#">Contact</a>
				</div>
			</nav><!-- /row -->
		</footer><!-- /container -->
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<!-- reCAPTCHA ========== -->
		<script src='https://www.google.com/recaptcha/api.js?hl=en'></script>  
	</body>
</html>