<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Cian Mackle - Web Developer</title>
		<!-- <meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="icon" href="" type="image/png"> -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
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
			  <a class="navbar-brand lobster" href="index.php">Cian Mackle</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav navbar-right text-center">
				<li><a href="#">About</a></li>
				<li><a href="#">Portfolio</a></li>
				<li><a href="#">Contact</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->		  
		</nav>
	
	
		<!-- Intro ========== -->
		<header class="container-fluid">
			<div class="row">
				<!-- Me ========== -->
				<div class="col-md-4 col-xs-12 text-center">
					<div class="jumbotron">
						<img id="me" src="images/me.jpg" class="img-responsive center-block" alt="Me">
						<p id="name">Cian<br>Mackle</p>
						<div class="row">
							<div class="col-xs-4">
								<a href="mailto:cian@cianmackle.com">
									<img src="images/gmail.svg" class="img-responsive contact_images" alt="Email">
								</a>
							</div>
							<div class="col-xs-4">
								<a href="#">
									<img src="images/linkedin.png" class="img-responsive contact_images" alt="LinkedIn">
								</a>
							</div>
							<div class="col-xs-4">
								<a href="#">
									<img src="images/github.svg" class="img-responsive contact_images" alt="Github">
								</a>
							</div>
						</div><!-- /row -->  
					</div>
				</div><!-- /col -->
				
				<!-- About Me ========== -->
				<div class="col-md-8 col-xs-12">
					<div class="jumbotron">
						<p>
							Zombies reversus ab inferno, nam malum cerebro. De carne animata corpora quaeritis. Summus sit​​, morbo vel maleficia?
							De Apocalypsi undead dictum mauris. Hi mortuis soulless creaturas, imo monstra adventus vultus comedat cerebella viventium. 
						</p>
					</div><!-- /jumbotron -->
				</div><!-- /col -->
			</div><!-- /row -->
		</header>
		
		<!-- About ========== -->
		<section class="container">
			<div class="row text-center">
				<h2>Skills</h2>
			</div>
			
			<div class="row text-center">
				<!-- CV / Resume ========== -->
				<div class="col-xs-6">
					<a href="#">
						<img src="images/cv.svg" class="img-responsive" alt="Curriculum Vitae Link">
						<label>Curriculum Vitae</label>
					</a>
				</div><!-- /cv -->
				<div class="col-xs-6">
					<a href="#">
						<img src="images/cv.svg" class="img-responsive" alt="Resume Link">
						<label>R&#233;sum&#233;</label>
					</a>
				</div><!-- /col -->
			</div><!-- /row -->	
			
			<div class="row">
				<div class="col-xs-12">
					<p>
						Zombies reversus ab inferno, nam malum cerebro. De carne animata corpora quaeritis. Summus sit​​, morbo vel maleficia?
						De Apocalypsi undead dictum mauris. Hi mortuis soulless creaturas, imo monstra adventus vultus comedat cerebella viventium. 
					</p>
				</div><!-- /col -->
			</div><!-- /row -->
			
			<!-- Strong skills ========== -->
			<div class="row">
				<div class="col-xs-12">
					<h3 class="text-center">Strong</h3>
				</div><!-- /col -->
				<div class="row">
					<div class="col-xs-4">
						<div class="thumbnail">
							<img src="images/strong/html5.svg" alt="HTML5">
						</div>
					</div>
					<div class="col-xs-4">
						<div class="thumbnail">
							<img src="images/strong/css3.svg" alt="CSS3">
						</div>
					</div>
					<div class="col-xs-4">
						<div class="thumbnail">
							<img src="images/strong/javascript.svg" alt="Javascript">
						</div>
					</div>
				</div><!-- /row (Thumbnails) -->
				<div class="row">
					<div class="col-xs-4">
						<div class="thumbnail">
							<img src="images/strong/jquery.svg" alt="jQuery">
						</div>
					</div>
					<div class="col-xs-4">
						<div class="thumbnail">
							<img src="images/strong/git.svg" alt="Git">
						</div>
					</div>
					<div class="col-xs-4">
						<div class="thumbnail">
							<img src="images/strong/german.svg" alt="German">
						</div>
					</div>
				</div><!-- /row (Thumbnails) -->
				<div class="row">
					<div class="col-xs-4">
						<div class="thumbnail">
							<img src="images/strong/spanish.svg" alt="Spanish">
						</div>
					</div>
					<div class="col-xs-4">
						<div class="thumbnail">
							<img src="images/strong/ukulele.svg" alt="Ukulele">
						</div>
					</div>
				</div><!-- /row (Thumbnails) -->
			</div><!-- /row (Strong skills) -->
			
			<!-- Skills that I'm improving on ========== -->
			<div class="row">
				<div class="col-xs-12">
					<h3 class="text-center">Improving</h3>	
				</div><!-- /col -->
				
				<div class="row">
					<div class="col-xs-4">
						<div class="thumbnail">
							<img src="images/improving/angular.svg" alt="Angular.js">
						</div>
					</div>
					<div class="col-xs-4">
						<div class="thumbnail">
							<img src="images/improving/sass.svg" alt="SASS">
						</div>
					</div>
					<div class="col-xs-4">
						<div class="thumbnail">
							<img src="images/improving/android.svg" alt="Android">
						</div>
					</div>
				</div><!-- /row (Thumbnails) -->
				<div class="row">
					<div class="col-xs-4">
						<div class="thumbnail">
							<img src="images/improving/gimp.png" alt="GIMP">
						</div>
					</div>
					<div class="col-xs-4">
						<div class="thumbnail">
							<img src="images/improving/php.svg" alt="PHP">
						</div>
					</div>
					<div class="col-xs-4">
						<div class="thumbnail">
							<img src="images/improving/mysql.svg" alt="MySQL">
						</div>
					</div>
				</div><!-- /row (Thumbnails) -->
			</div><!-- /row (Improving) -->
			
			<!-- Skills I would like to learn in the future ========== -->
			<div class="row">
				<div class="col-xs-12">
					<h3 class="text-center">Future</h3>
				</div><!-- /col -->
				
				<div class="row">
					<div class="col-xs-4">
						<div class="thumbnail">
							<img src="images/future/rails.svg" alt="Rails">
						</div>
					</div>
					<div class="col-xs-4">
						<div class="thumbnail">
							<img src="images/future/ios.svg" alt="iOS">
						</div>
					</div>
				</div><!-- /row (Thumbnails) -->
			</div><!-- /row -->
			
			<!-- Side-Project Technologies -->
			<div class="row">
				<div class="col-xs-12">
					<h3 class="text-center">Side Projects</h3>
				</div><!-- /col -->
				<div class="row">
					<div class="col-xs-4">
						<div class="thumbnail">
							<img src="images/side_projects/raspberry_pi.svg" alt="Raspberry Pi">
						</div>
					</div>
				</div><!-- /row (Thumbnails) -->
			</div><!-- /row -->
		</section><!-- /about -->
		
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
						
					
					<form method="POST" action="index.php">
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
			<nav class="row text-center">
				<div class="col-xs-4">
					<a href="#">About</a>
				</div>
				<div class="col-xs-4">
					<a href="#">Portfolio</a>
				</div>
				<div class="col-xs-4">
					<a href="#">Contact</a>
				</div>
			</nav>
		</footer>
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<!-- reCAPTCHA ========== -->
		<script src='https://www.google.com/recaptcha/api.js?hl=en'></script>  
	</body>
</html>