
   
<!DOCTYPE html>
<!-- Make PHP show PHP errors on the HTML page, instead of failing silently. -->
<?php ini_set('display_startup_errors',1); ?>
<?php ini_set('display_errors',1); ?>
<?php error_reporting(-1); ?>

<html>
	<head>
		<title>Contact us</title>
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
				<li><a href="index.html">Home</a></li>
				<li><a href="policies.html">Policies</a></li>
				<li><a href="schedule.html">Schedule</a></li>
				<li><a href="registrationForm.php">Register</a></li>
				<li><a href="contactusForm.php">Contact Us</a></li>
			</ul>
		</nav>
	<body>

 	<h1>Leave your message here</h1>
 	<p>We really want to know your thought! Please feel free to leave any comment</p>
 	
 	<form action="contactUsFormHandle.php" method="POST" enctype="multipart/form-data">

 		<fieldset><legend>How would you like to be addressed?</legend>
 	
		<label for="firstname">Given name:*</label><input type="text" name="firstname" required><br>
		<label for="lastname">Surname:*</label><input type="text" name="lastname" required><br>
		<label for="pronouns">Pronouns:</label><input type="text" name="pronouns">
		</fieldset>
		
 		<fieldset><legend>Your contact info</legend>
 		<label for="email">Email address:* </label><input type="email" name="email" required><br>
 		<label for="phone">Preferred phone number: </label><input type="text" name="phone">
 		</fieldset>

		<fieldset><legend>Your comment:</legend>
		<input type="text" name="comment" required><br>
		
	
		</fieldset>
		
	

		<input name="submit" type="submit" value="Sign up">
	</form>
	


	</body>
</html>