<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up for the Canva Workshop</title>
        <style>
            h1 {
                color: blue;
                font-family: 'Times New Roman', Times, serif;
            }

            h2 {
                font-family: 'Times New Roman', Times, serif;
            }
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
    <?php
        $firstname = 'Pranav';
        $lastname = 'Agrawal';
        $pronouns = 'they/them';
        $email = '';
        $phone = 'No phone number given';
        $source = ''; //checkbox
        $infosignup = 'No'; //radio


        if ($_POST['firstname'] != NULL){$firstname = $_POST['firstname'];}
        if ($_POST['lastname'] != NULL){$lastname = $_POST['lastname'];}
        if ($_POST['pronouns'] != NULL){$pronouns = $_POST['pronouns'];}
        if ($_POST['email'] != NULL){$email = $_POST['email'];}
        if ($_POST['phone'] != NULL){$phone = $_POST['phone'];}

        $sources = isset($_POST['source']) ? $_POST['source'] : array();
        foreach($sources as $value) {
            $day = $value;
        }

        if ($_POST['infosignup'] != NULL){$phone = $_POST['infosignup'];}
       

        $firstname= ucwords($firstname);
        $lastname= ucwords($lastname);

    ?>

    <center>
        <h1> We Will Be in Touch! </h1>
        <hr>
        </br>
        <h2><?php echo $firstname; echo $lastname;?></h2>
        </br>
        <h2> Thank you for signing up for the canva workshop. </h2>
        <h2> The organizers will reach out to you via email with further details shortly. </h2>
    </center>

    <?php
        $to = $email;
        $subject = "Worksop Sign-up Follow-up";

        $message = $email;
        $message .= "Hello " . $firstname . ",\r\n";
        $message .= "Hope you are having a great day!\r\n";
        $message .= "Thank you for signing up for the canva workshop.";
        $message .= "Please let us know, by replying to this email, if you would like to make changes to any of the details.";
        $message .= "We are excited to see you here.\r\n";
        $message .= "Best Regards, \r\n";
        $message .= "Pranav Agrawal";

        $header = "From:pragrawal@wisc.edu\r\n";
        $header .= "Cc: salo@wisc.edu\r\n";
        $header .= "Content-Type: text/plain; charset=utf-8\r\n";

        mail($to, $subject, $message, $header);
    ?>

    </body>
</html>



