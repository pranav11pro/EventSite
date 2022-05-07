<!DOCTYPE html>
<!-- Make PHP show PHP errors on the HTML page, instead of failing silently. -->
<?php ini_set('display_startup_errors',1); ?>
<?php ini_set('display_errors',1); ?>
<?php error_reporting(-1); ?>

<html>
	<head>
		<title>Sign Up for iSchool Retreat</title>
		<style type="text/css">
			body { font-family: Candara, Helvetica, "Helvetica Neue," sans-serif }
			label, input[type='text'], input[type='email'] { display: inline-block; margin: .5em 0; }
			label { width: 10em; padding-left: 1em }
			input[type='text'], input[type='email'] { width: 10em; margin: 0 10em 0 4% }
			fieldset { max-width: 50% }
		</style>
	</head>
	<body>

 	<h1>Sign up for the iSchool retreat!</h1>
 	<p>We'll use your responses as we plan; we want the day to be enjoyable as well as useful!</p>
 	
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

		<fieldset><legend>Days you would be able to come to the retreat:</legend>
		<input type="checkbox" name="days[]" id="sunday" value="sunday"><label for="sunday">Sunday</label><br>
		<input type="checkbox" name="days[]" id="monday" value="monday"><label for="monday">Monday</label><br>
		<input type="checkbox" name="days[]" id="tuesday" value="tuesday"><label for="tuesday">Tuesday</label><br>
		<input type="checkbox" name="days[]" id="wednesday" value="wednesday"><label for="wednesday">Wednesday</label><br>
		<input type="checkbox" name="days[]" id="thursday" value="thursday"><label for="thursday">Thursday</label><br>
		<input type="checkbox" name="days[]" id="friday" value="friday"><label for="friday">Friday</label><br>
		<input type="checkbox" name="days[]" id="saturday" value="saturday"><label for="saturday">Saturday</label>
		</fieldset>
		
		<fieldset><legend>Dietary choices (lunch will be provided):</legend>
		<input type="radio" name="food" id="vegetarian" value="Vegetarian"><label for="vegetarian">Vegetarian</label><br>
		<input type="radio" name="food" id="vegan" value="Vegan"><label for="vegan">Vegan</label><br>
		<input type="radio" name="food" id="glutenfree" value="Gluten-free"><label for="glutenfree">Gluten-free</label><br>
		<input type="radio" name="food" id="kosher" value="Kosher"><label for="kosher">Kosher</label><br>
		<input type="radio" name="food" id="halal" value="Halal"><label for="halal">Halal</label><br>
		<input type="radio" name="food" id="none" value="None/other"><label for="none">None of these, or a different choice (specify below)</label><br>
		<label for="otherfood">Other choice not listed above: </label><input type="text" name="otherfood">
		</fieldset>

		<input name="submit" type="submit" value="Sign up">
	</form>
	


	</body>
</html>
