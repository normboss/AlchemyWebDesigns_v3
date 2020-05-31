<?php
if (!session_id())
    session_start();
function generateFormToken($form)
{
    // generate a token from an unique value
    $token = md5(uniqid(microtime(), true));
    // Write the generated token to the session variable to check it against the hidden field when the form is sent
    $_SESSION[$form . '_token'] = $token;
    return $token;
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

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function onSubmit(token) {
            // $("#contact-form").attr("action", "misc.php");
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
                <?php
                // generate a new token for the $_SESSION superglobal and put them in a hidden field
                $newToken = generateFormToken('form1');
                ?>
                <!-- <form action="misc.php" class="contactform" method="post" name="contactform"> -->
                <form id="contact-form" action="misc.php" class="contactform" method="post" name="contactform">
                    <label for="name">Your Name *</label>
                    <input maxlength="50" name="name" size="30" type="text">
                    <input type="hidden" name="token" value="<?php echo $newToken; ?>">
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