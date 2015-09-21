<?php

error_reporting(E_ALL ^ E_NOTICE); ///// hide all notices from PHP

if(isset($_POST['submitted'])) {

    if(trim($_POST['yourName']) === '') {
        $nameError =  'Forgot your name!';
        $hasError = true;
    } else {
        $name = trim($_POST['yourName']);
    }


    if(trim($_POST['yourEmail']) === '')  {
        $emailError = 'Hey You Forgot to enter in your e-mail address!';
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['yourEmail']))) {
        $emailError = 'Ooops, You entered an invalid email address!';
        $hasError = true;
    } else {
        $email = trim($_POST['yourEmail']);
    }

    if(trim($_POST['message']) === '') {
        $commentError = 'Uhh ooo, You forgot to enter a message!';
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['message']));
        } else {
            $comments = trim($_POST['message']);
        }
    }

    if(!isset($hasError)) {

        $emailTo = 'obazechuck@gmail.com'; ///// YOUR email address /////
        $subject = 'Inquiry message from '.$name;
        $sendCopy = trim($_POST['sendCopy']);
        $body = "Name: $yourName \n\nEmail: $yourEmail \n\nMessage: $message";
        $headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        mail($emailTo, $subject, $body, $headers);

        ///// sets boolean value to TRUE /////
        $emailSent = true;
    }
}
?>



<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Graphic and Web Design Portfolio of Chuck Obaze. ">
		<meta name="keywords" content="Graphic Design, Web Design, Web Development, Logo Design, Brochures, Magazines">
		<title>Chuck Obaze Designs | Atlanta Graphic and Web Designer</title>
		<link rel="shortcut icon" href="imgs/chuckobaze-favicon16.png"/>
		<link rel="shortcut icon" href="imgs/chuckobaze-favicon32.png"/>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/coba.css"/>
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
		<link href='https://fonts.googleapis.com/css?family=Vast+Shadow|Londrina+Outline|Londrina+Shadow|Sonsie+One|Exo+2:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600italic,600,700,700italic,800italic,900,900italic,800' rel='stylesheet' type='text/css'>
		<script src="js/modernizr.js"></script>
	</head>
	<body class="main-body">
		<div id="main-container"> <!-- Start Main Container -->

			<header class="main-header"> <!-- Start Main Header -->

				<a class="logo-link" href="#home"><img src="imgs/chuckobaze.png" alt="Chuck Obaze Graphic and Web Design Logo"></a>

				<nav class="main-nav">
					<ul class="active-nav">
					<li class="home-nav">
					<a class="active-link-one" href="#home">HOME</a>
					</li>
					<li class="projects-nav">
					<a class="active-link-two" href="#projects">PROJECTS</a>
					</li>
					<li class="about-nav">
					<a class="active-link-three" href="#about">ABOUT</a>
					</li>
					<li class="resume-nav">
					<a class="active-link-four" href="#resume">RESUME</a>
					</li>
					<li class="contact-nav">
					<a class="active-link-five" href="#contact-me">CONTACT</a>
					</li>
					</ul>
				</nav>

			</header> <!-- End Main Header -->

			<section class="first-container"> <!-- Start first container -->
				<div id="home"> <!-- Start Section Home -->
					<div class="letters-holder">
						<h1>My Name is</h1>
						<img class="home-logo" src="imgs/chuck-obaze-logo-white.png" alt="Chuck Obaze Graphic and Web Design Logo">
						<!--<div class="letters" id="w">W</div>
						<div class="letters" id="e">E</div>
						<div class="letters" id="l">L</div>
						<div class="letters" id="c">C</div>
						<div class="letters" id="o">O</div>
						<div class="letters" id="m">M</div>
						<div class="letters" id="ee">E</div>-->
						<h1>I am a Designer that believes in Using Design for the Good of Humanity.</h1>
						<a class="dwn-btn" href="#projects"></a>
					</div>
				</div> <!-- End Section Home -->
			</section> <!-- End first container -->

			<section class="second-container"> <!-- Start second container -->

				<div id="projects"> <!-- Start projects -->
					<h2>PROJECTS</h2>
						<div class="port-item-last"></div>
						<div class="port-item"></div>
						<div class="port-item" id="margin-out"></div>
						<div class="port-item"></div>
						<div class="port-item-last"></div>
						<div class="port-item"></div>
						<div class="port-item" id="margin-outter"></div>
						<div class="port-item"></div>
				</div> <!-- End projects -->

			</section> <!-- End second container -->

			<section class="third-container"> <!-- Start second container -->

				<div id="about"> <!-- Start about -->

					<h2>WHO IS CHUCK OBAZE</h2>

					<p>I am a graphic and web designer currently working and living in Atlanta, GA. I graduated with a Bachelors of Fine Arts degree in Graphic and Web Design and i have a passion for clean and simple designs. I love writing code, i fell in love with it after taking a class in HTML as an elective while college and ever since, my focus has been not only designing websites but making them function dynamically. Besides design, i love doing <a href="http://www.5mediaphotos.com" target="_blank">photography</a>, <a href="https://vimeo.com/home/myvideos" target="_blank">videography</a>, watching soccer (BIG TOTTENHAM HOTSPUR F.C. FAN), attending concerts, and enjoying a cold draft Belgian white with friends.</p>

					<img class="about-chuck" src="imgs/about-chuckobaze.jpg" alt="Chuck Obaze"/>

					<div class="social"> <!-- Start Social -->
						<a href="https://www.linkedin.com/pub/chuck-obaze/5a/647/1a4" target="_blank"><img src="imgs/in.png" alt="Chuck Obaze Linkedin Profile"></a>
						<a href="https://www.pinterest.com/chuckobaze/" target="_blank"><img src="imgs/pin.png" alt="Chuck Obaze Pinterest Profile"></a>
						<a href="http://5mediaphotos.com/" target="_blank"><img src="imgs/rss.png" alt="Chuck Obaze RSS Feed for Blogs"></a>
					</div><!-- End Social -->
				</div> <!-- End About -->

			</section> <!-- End second container --> <!--<img src="imgs/about-chuck.jpg" alt="Chuck Obaze"/>-->

			<section id="fourth-container"> <!-- Start fourth-container -->

				<div id="resume"> <!-- Start resume -->

					<h2>MY RESUME</h2>
					<div class="dwn-pdf"> <!-- Start dwn-pdf -->

					</div> <!-- End dwn-pdf -->

				</div> <!-- End resume -->

			</section> <!-- End fourth-container -->

			<section id="fifth-container"> <!-- Start third-container -->

				<div id="contact-me"> <!-- Start contact -->

					<h2>GET IN TOUCH</h2>

					<?php if(isset($emailSent) && $emailSent == true) { ?>
					<div class="p1">Thank you for contacting me. Your email was sent successfully. I'll get back to you shortly.</div>
					<?php } else { ?>

					<?php if(isset($hasError) || isset($captchaError) ) { ?>
					<p class="alert">Ooops!! You missed Some thing. Please fix it, i want to hear from you.</p>
					<?php } ?>

					<div id="form-holder"> <!-- Start form holder -->

						<form action="<?php $_SERVER['PHP_SELF']?>" method="post" accept-charset="utf-8"> <!-- Start form -->

							<div class="entry-one"> <!-- Start entry one -->
								<input id="yourName" name="yourName" class="txt requiredField name" type="text" value="<?php if(isset($_POST['yourName'])) echo $_POST['yourName'];?>" tabindex="1" placeholder="Enter Your Name *">
								<?php if($nameError != '') { ?>
                                <br /><span class="error"><?php echo $nameError;?></span>
                            <?php } ?>
							</div> <!-- End entry-one -->

							<div class="entry-two"> <!-- Start entry two -->
								<input id="yourEmail" name="yourEmail" class="txt requiredField email" type="email"  value="<?php if(isset($_POST['yourEmail']))  echo $_POST['yourEmail'];?>" tabindex="2" placeholder="Enter Your E-Mail *">
								<?php if($emailError != '') { ?>
                                <br /><span class="error"><?php echo $emailError;?></span>
                            <?php } ?>
							</div> <!-- End entry-two -->

							<div class="entry-three"> <!-- Start entry three -->
								<textarea name="message" id="messageText" class="txtarea requiredField" rows="8" cols="50" placeholder="" maxlength="100" tabindex="4"><?php if(isset($_POST['message'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['message']); } else { echo $_POST['message']; } } ?></textarea>
								<?php if($commentError != '') { ?>
                                <br /><span class="error"><?php echo $commentError;?></span>
                            <?php } ?>
							</div> <!-- End entry-three -->

							<div> <!-- Start Submit -->
								<button name="submit" type="submit" class="subbutton">Submit</button>
								<input type="hidden" name="submitted" id="submitted" value="true" />
							</div> <!-- End Submit -->

						</form> <!-- End Form -->

					</div> <!-- End Form Holder -->

				</div> <!-- End Contact -->

			</section> <!-- end third container -->

		</div> <!-- END main-container -->

		<!-- Start jQuery Here -->
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/coba.js"></script>
	</body>
</html>