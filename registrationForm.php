<!DOCTYPE html>
<!-- Make PHP show PHP errors on the HTML page, instead of failing silently. -->
<?php ini_set('display_startup_errors',1); ?>
<?php ini_set('display_errors',1); ?>
<?php error_reporting(-1); ?>

<html>
	<head>
		<title>Sign Up for Canva workshop</title>
		<style type="text/css">
			body { font-family: Candara, Helvetica, "Helvetica Neue," sans-serif }
			label, input[type='text'], input[type='email'] { display: inline-block; margin: .5em 0; }
			label { width: 10em; padding-left: 1em }
			input[type='text'], input[type='email'] { width: 10em; margin: 0 10em 0 4% }
			fieldset { max-width: 50% }
		</style>
	</head>
    <nav>
        <ul>
            <li><a href="index500.html">Home</a></li>
            <li><a href="policies.html">Policies</a></li>
            <li><a href="schedule.html">Schedule</a></li>
            <li><a href="registrationForm.html">Register</a></li>
            <li><a href="contactusForm.html">Contact Us</a></li>
        </ul>
    </nav>
	<body>

 	<h1>Sign up for the Canva workshop to start your design!</h1>
 	<p>We'll use your responses as we plan; we want the workshop to be enjoyable as well as useful!</p>
 	
 	<form action="signPeopleUp.php" method="POST" enctype="multipart/form-data">

 		<fieldset><legend>How do we address you respectfully?</legend>
 	
		<label for="firstname">Given name:*</label><input type="text" name="firstname" required><br>
		<label for="lastname">Surname:*</label><input type="text" name="lastname" required><br>
		<label for="pronouns">Pronouns:</label><input type="text" name="pronouns">
		</fieldset>
		
 		<fieldset><legend>Your contact info</legend>
 		<label for="email">Email address:* </label><input type="email" name="email" required><br>
 		<label for="phone">Preferred phone number: </label><input type="text" name="phone">
 		</fieldset>

		<fieldset><legend>How did you hear this workshop:</legend>
		<input type="checkbox" name="days[]" id="social media" value="social media"><label for="social media">social media</label><br>
		<input type="checkbox" name="days[]" id="news" value="news"><label for="news">news</label><br>
		<input type="checkbox" name="days[]" id="website" value="website"><label for="website">our website</label><br>
		<input type="checkbox" name="days[]" id="friend" value="friend"><label for="friend">friend or other person's recommendation</label><br>
		<input type="checkbox" name="days[]" id="other" value="other"><label for="other">other</label><br>
		
		</fieldset>
		
		<fieldset><legend>Do you want to receive information on future events:</legend>
		<input type="radio" name="food" id="yes" value="yes"><label for="yes">yes</label><br>
		<input type="radio" name="food" id="no" value="no"><label for="vegan">no</label><br>
		</fieldset>

		<input name="submit" type="submit" value="Sign up">
	</form>
	


	</body>
</html>