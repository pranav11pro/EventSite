<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up for iSchool Retreat</title>
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
    <body>
    <?php
        $firstname = 'Pranav';
        $lastname = 'Agrawal';
        $pronouns = 'they/them';
        $email = '';
        $phone = 'No phone number given';

        $day = '';
        $food = '';


        if ($_POST['firstname'] != NULL){$firstname = $_POST['firstname'];}
        if ($_POST['lastname'] != NULL){$lastname = $_POST['lastname'];}
        if ($_POST['pronouns'] != NULL){$field = $_POST['pronouns'];}
        if ($_POST['email'] != NULL){$art_topic = $_POST['email'];}
        if ($_POST['phone'] != NULL){$art_why = $_POST['phone'];}

        $days = isset($_POST['days']) ? $_POST['days'] : array();
        foreach($days as $value) {
            $day = $value;
        }
        
        $food = $_POST['food'];
        if ($food == "None/other") {
            $food = $_POST['otherfood'];
        }         

        $firstname= ucwords($firstname);
        $lastname= ucwords($lastname);

    ?>

    <center>
        <h1> We Will Be in Touch! </h1>
        <hr>
        </br>
        <h2> Thank you for signing up for the school retreat. </h2>
        <h2> The organizers will reach out to you via email with the date of retreat and the lunch choices. </h2>
    </center>

    <?php
        $to = $email;
        $subject = "School Retreat Follow-up";

        $message = $email;
        $message .= "Hello " . $firstname . ",\r\n";
        $message .= "Hope you are having a great day!\r\n";
        $message .= "Thank you for signing up for the school retreat.";
        $message .= "You have chosen to join the retreat on " . $day . " .";
        $message .= "We will be serving you " . $food . " food.\r\n";
        $message .= "Please let us know, by replying to this email, if you would like to make chnages to any of the details.";
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



