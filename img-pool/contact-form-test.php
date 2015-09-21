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
