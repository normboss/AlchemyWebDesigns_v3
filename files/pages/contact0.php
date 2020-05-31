<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "contact";

if (isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    // $email_to = "norm.bosse0@gmail.com";
    // $email_to = "viewscaper@gmail.com";
    $email_to = "bosse.ann@gmail.com";
    $email_subject = "Alchemy Web Designs contact form message";


    function died($error)
    {
        // your error code can go here
        echo "I am very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error . "<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])
    ) {
        died('I am sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $message = $_POST['message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if (!preg_match($email_exp, $email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
    // $string_exp = "/^[A-Za-z .'-]+$/";
    // if (!preg_match($string_exp, $first_name)) {
    //     $error_message .= 'The First Name you entered does not appear to be valid.<br />';
    // }
    // if (!preg_match($string_exp, $last_name)) {
    //     $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
    // }
    if (strlen($message) < 2) {
        $error_message .= 'The message you entered do not appear to be valid.<br />';
    }
    if (strlen($error_message) > 0) {
        died($error_message);
    }


    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message = "This message is from ";
    $email_message .= clean_string($name) . ".\n\n";
    // $email_message .= "Email: " . clean_string($email_from) . "\n";
    $email_message .= clean_string($message) . "\n\n";

    // create email headers
    $headers = 'From: ' . $email_from . "\r\n" .
        'Reply-To: ' . $email_from . "\r\n" .
        'Bcc: norm.bosse0@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($email_to, $email_subject, $email_message, $headers);
?>


    <!-- include your own success html here -->

    <script type="text/javascript">
        window.location = "thankyou.php";
    </script>

<?php
}
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <?php
    require '../includes/globalSiteTag.html';
    ?>

    <title>Alchemy Web Designs | Contact Us</title>
    <meta name=="description" content="Reach out to us with a message. We'd love to hear from you!">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/contact.css" media="screen" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function onSubmit(token) {
            $("#contact-form").attr("action", "misc.php");
            document.getElementById("contact-form").submit();
        }
    </script>
</head>

<body>

    <?php
    //  require '../includes/menu2.php'; 
    require '../includes/header1.php';
    ?>
    <main>

        <div class="contact-container">
            <br>
            <div class="magic-block">
                <?php
                require '../includes/magic.php';
                ?>
            </div>
            <div class="spacer20"></div>
            <div class="form-container">
                <div>
                    We enjoy meeting and working with people who love what they do.
                    <br>
                    <div class="spacer10"></div>
                    Connect with us and together We will create an on line presence that effectively represents your vision.
                </div>

                <!-- <form action="send-form-email.php" class="contactform" method="post" name="contactform"> -->
                <form id="contact-form" action="thankyou.php" class="contactform" method="post" name="contactform">
                    <label for="name">Your Name *</label>
                    <input maxlength="50" name="name" size="30" type="text">
                    <label for="email">Email Address *</label>
                    <input maxlength="80" name="email" size="30" type="text">
                    <label for="message">Comments *</label>
                    <textarea cols="30" maxlength="1000" name="message" rows="5"></textarea> * = required<br>
                    <!-- <input class="submit" type="submit" value="Submit »"> -->
                    <button class="g-recaptcha submit" data-sitekey="6Ld82v0UAAAAAIUG_P-YM0zTf9eoRCGEC3WTcf8N" data-callback='onSubmit'>Submit</button><br>
                </form>

            </div>

        </div>
    </main>

    <?php require '../includes/footer.php' ?>


</body>

</html>