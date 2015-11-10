<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Cian Mackle | Front-End Web Developer</title>
		<meta name="description" content="Hello, my name is Cian and I'm a front-end web developer from Drogheda, Ireland.">
		<meta name="keywords" content="web developer, front-end, Ireland, Victoria, BC, Canada, German, Spanish> 
		<link rel="icon" href="images/favicon.png" type="image/png">
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
			
			$key = include("recaptcha_config.php");
			// your secret key - hidden on GitHub
			$secret = $key;
 
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
			  <a id="brand_name" class="navbar-brand lobster" href="#">Cian Mackle</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav navbar-right text-center open_sans">
				<li><a href="#">About</a></li>
				<li role="separator" class="nav-divider"></li>
				<li><a href="#skills">Skills</a></li>
				<li role="separator" class="nav-divider"></li>
				<li><a href="#portfolio">Portfolio</a></li>
				<li role="separator" class="nav-divider"></li>
				<li><a href="#contact">Contact</a></li>
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
							<div class="row text-center">
								<div class="col-xs-4">
									<a href="mailto:cian@cianmackle.com">
										<img id="gmail" src="images/gmail.png" class="img-responsive" alt="Email">
									</a>
								</div>
								<div class="col-xs-4">
									<a href="https://ie.linkedin.com/in/CianMackle">
										<img src="images/linkedin.png" class="img-responsive" alt="LinkedIn">
									</a>
								</div>
								<div class="col-xs-4">
									<a href="https://github.com/CianM">
										<img src="images/github.png" class="img-responsive" alt="Github">
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
								<div class="col-xs-12 open_sans">
									<p class="text-center">
										<span id="isitmeyourelookingfor">Hello</span>, my name is Cian and I'm a front-end web developer from Drogheda, Ireland.
									</p>
									<br>
									<p class="text-center">
										For me the best feeling is creating something and seeing it being used by others. That's why I build intuitive, responsive sites that get things done. 
									</p>
									<br>
									<p class="text-center">
										If you have a project in mind or want to collaborate, feel free to get in touch using the <a href="#contact">contact form</a> below.
									</p>
								</div>
							</div>
						</div>
					</div><!-- /jumbotron -->
				</div><!-- /col -->
			</div><!-- /row -->
		</header><!-- /container -->
		
		<!-- Skills ========== -->
		<section id="skills" class="container">
			<div class="row text-center">
				<h2>Skills</h2>
			</div>
			
			<div class="row text-center">
				<div class=" col-md-offset-1 col-md-10 col-xs-12 skills_text open_sans">
					<p>
						Problem solving is fundamental to web development and each new project brings with it its own challenges. 
						I always strive to find the most efficient solutions to the task at hand.
					</p>
					<br>
					<p>
						I am eager to try out the latest technologies and incorporate new tools to improve my workflow, and ultimately the end product.
					</p>
					<br>
					<p>
						I have a solid understanding of key programming concepts and a firm grasp of core web technologies. 
						At the moment I find interactive applications very interesting and a result responsiveness has become a priority in order to 
						increase usability across devices.
					</p>
					<br>
				</div><!-- /col -->
			</div><!-- /row -->
			
			<!-- Strong skills ========== -->
			<div class="row">
				<div class="col-xs-12">
					<h3 class="text-center open_sans"><u>I frequently use...</u></h3>
				</div><!-- /col -->
				<div class="col-md-2 col-xs-4">
					<div class="thumbnail">
						<img src="images/strong/html5.png" class="img-responsive" alt="HTML5">
					</div>
				</div>
				<div class="col-md-2 col-xs-4">
					<div class="thumbnail">
						<img src="images/strong/css3.png" class="img-responsive" alt="CSS3">
					</div>
				</div>
				<div class="col-md-2 col-xs-4">
					<div class="thumbnail">
						<img src="images/strong/javascript.png" class="img-responsive" alt="Javascript">
					</div>
				</div><!-- /col -->
				
				<div class="col-md-2 col-xs-4">
					<div class="thumbnail">
						<img src="images/strong/jquery.png" class="img-responsive" alt="jQuery">
					</div>
				</div><!-- /col -->
				<div class="col-md-2 col-xs-4">
					<div class="thumbnail">
						<img src="images/strong/bootstrap.png" class="img-responsive" alt="Bootstrap">
					</div>
				</div><!-- /col -->
				<div class="col-md-2 col-xs-4">
					<div class="thumbnail">
						<img src="images/strong/git.png" class="img-responsive" alt="Git">
					</div>
				</div><!-- /col -->
				
				<div class="col-md-offset-3 col-md-2 col-xs-4">
					<div class="thumbnail">
						<img src="images/strong/german.png" class="img-responsive" alt="German">
					</div>
				</div><!-- /col -->
				<div class="col-md-2 col-xs-4">
					<div class="thumbnail">
						<img src="images/strong/spanish.png" class="img-responsive" alt="Spanish">
					</div>
				</div>
				<div class="col-md-2 col-xs-4">
					<div class="thumbnail">
						<img src="images/strong/ukulele.png" class="img-responsive" alt="Ukulele">
					</div>
				</div><!-- /col -->
			</div><!-- /row (Strong skills) -->
			
			<!-- Improving ========== -->
			<div class="row">
				<div class="col-xs-12">
					<h3 class="text-center open_sans"><u>I'm improving my knowledge of...</u></h3>	
				</div><!-- /col -->
				
				<div class="col-md-2 col-xs-4">
					<div class="thumbnail">
						<img src="images/improving/angular.png" class="img-responsive" alt="Angular.js">
					</div>
				</div>
				<div class="col-md-2 col-xs-4">
					<div class="thumbnail" style="height:100%; ">
						<img src="images/improving/sass.png" class="img-responsive" alt="SASS">
					</div>
				</div>
				<div class="col-md-2 col-xs-4">
					<div class="thumbnail">
						<img src="images/improving/android.png" class="img-responsive" alt="Android">
					</div>
				</div><!-- /col -->
				<div class="col-md-2 col-xs-4">
					<div class="thumbnail">
						<img src="images/improving/gimp.png" class="img-responsive" alt="GIMP">
					</div>
				</div>
				<div class="col-md-2 col-xs-4">
					<div class="thumbnail">
						<img src="images/improving/php.png" class="img-responsive" alt="PHP">
					</div>
				</div>
				<div class="col-md-2 col-xs-4">
					<div class="thumbnail">
						<img src="images/improving/mysql.png" class="img-responsive" alt="MySQL">
					</div>
				</div><!-- /col -->
				<div class="col-md-offset-5 col-md-2 col-xs-offset-4 col-xs-4">
					<div class="thumbnail">
						<img src="images/improving/gulp.png" class="img-responsive" alt="Gulp">
					</div>
				</div>
			</div><!-- /row (Improving) -->
			
			<!-- Future ========== -->
			<div class="row">
				<div class="col-xs-12">
					<h3 class="text-center open_sans"><u>In the future I would like to learn...</u></h3>
				</div><!-- /col -->
				<div class="col-md-offset-3 col-md-2 col-xs-4">
					<div class="thumbnail">
						<img src="images/future/rails.png" class="img-responsive" alt="Rails">
					</div>
				</div>
				<div class="col-md-2 col-xs-4">
					<div class="thumbnail">
						<img src="images/future/ios.png" class="img-responsive" alt="iOS">
					</div>
				</div><!-- /col -->
				<div class="col-md-2 col-xs-4">
					<div class="thumbnail">
						<img src="images/future/wordpress.png" class="img-responsive" alt="Wordpress">
					</div>
				</div>
			</div><!-- /row -->

			<!-- Side-Projects -->
			<div class="row">
				<div class="col-xs-12">
					<h3 class="text-center open_sans"><u>Side projects I'm working on...</u></h3>
				</div><!-- /col -->
				<div class="col-md-offset-5 col-md-2 col-xs-offset-4 col-xs-4">
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
			
			<div class="row">
				<div class="col-md-offset-2 col-md-2 col-xs-12 project">
					<a href="portfolio/current_project/index.php">
						<img src="images/portfolio/current_project.png" id="current_project" class="img-responsive" alt="Current Project">
					</a>
				</div><!-- /col -->
				<div class="col-md-offset-1 col-md-2 col-xs-12 project">
					<a href="portfolio/micro-vision/index.php">
						<img src="images/portfolio/micro_vision.png" id="micro_vision" class="img-responsive" alt="Micro-Vision">
					</a>
				</div><!-- /col -->
				<div class="col-md-offset-1 col-md-2 col-xs-12 project">
					<a href="portfolio/constructed_languages/index.php">
						<img src="images/portfolio/constructed_languages.png" id="constructed_languages" class="img-responsive" alt="Constructed Languages">
					</a>
				</div><!-- /col -->
			</div><!-- /row -->
		</section><!-- /portfolio -->
		
		<!-- Contact ======== -->
		<section id="contact" class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h2>Contact</h2>
				</div><!-- /col -->
			</div><!-- /row -->
			
			<div class="row">
				<div class="col-md-offset-3 col-md-6 col-xs-12">
				
					<?php
						$mail_to_send_to = "cian@cianmackle.com";
						$your_feedbackmail = "contact@cianmackle.com";
						

						$x = $_REQUEST['submit'];
						if ( $x == "Submit") {
							if($response != null && $response->success) {
								$name = $_REQUEST['name'];
								$email = str_replace("\r\n", '', $_REQUEST['email']);
								$subject = $_REQUEST['subject'];								
								$message = $_REQUEST['message'];
								
								$body = "From: $name\n Email: $email\n Subject: $subject\n $message";
								$headers = "From: $your_feedbackmail" . "\r\n" . "Reply-To: $email" . "\r\n" ;
								
								$a = mail( $mail_to_send_to, $subject, $body, $headers );
								if ($a) {
									echo "<p style='font-family:\"Open Sans\", sans-serif; color: green; font-size: 2em; text-align: center;'>
											Message Sent
										</p>";
								} 
								else {
									echo "<p style='font-family:\"Open Sans\", sans-serif; color: red; font-size: 2em; text-align: center;'>
											There was a problem sending the message.<br>
											Please try again or email me at <a href='mailto:cian@cianmackle.com'>cian@cianmackle.com</a>
										</p>";
								}
							}
							else {
								echo "<p style='font-family:\"Open Sans\", sans-serif; color: purple ; font-size: 2em; text-align: center;'>
										There was a problem with reCaptcha.<br>
										Make sure to click \"I'm not a robot\" and try again.
									</p>";
							}
						}
					?>
						
					
					<form method="POST" action="#contact" class="open_sans">
						<div class="form-group">
							<label for="form_name">Name</label>
							<input type="text" class="form-control" id="form_name" placeholder="Name" name="name" required>
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
							<div class="g-recaptcha pull-right" data-sitekey="6LfoPw4TAAAAAEGayOw9VUMjKCoNxG1r-51S2z0Q"></div> 
						</div>
						
						<div class="form-group">
							<button id="form_button" type="submit" class="btn btn-primary pull-right" name="submit" value="Submit">Submit</button>
						</div>
					</form>
				</div><!-- /col -->
			</div><!-- /row -->
		</section><!-- /contact -->
		
		
		<footer class="container-fluid">
			<nav class="row text-center">
				<div class="col-xs-3">
					<a href="#">About</a>
				</div>
				<div class="col-xs-3">
					<a href="#skills">Skills</a>
				</div>
				<div class="col-xs-3">
					<a href="#portfolio">Portfolio</a>
				</div>
				<div class="col-xs-3">
					<a href="#contact">Contact</a>
				</div>
			</nav><!-- /row -->
		</footer><!-- /container -->
		
		<!-- Scripts ========== -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<!-- reCAPTCHA ========== -->
		<script src='https://www.google.com/recaptcha/api.js?hl=en'></script>
	</body>
</html>