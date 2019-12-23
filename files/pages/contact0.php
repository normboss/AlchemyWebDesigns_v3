<?php
if (!session_id())
    session_start();
// require '..\includes\root.php';
require __DIR__ . '/../includes/root.php';
$_SESSION['pagename'] = "contact";
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>Alchemy Web Design</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/contact0.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <!--<link href=".files/fonts/Wizards Magic.ttf" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <!--<link rel="icon" href="./images/Image7.gif">-->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

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
                <form method="post" class="contactform" action="https://www1.domain.com/scripts/formemail.bml" name="contactform">
                    <input type="hidden" name="my_email" value="norm.bosse0@gmail.com">
                    <label for="email">Your Email Address</label>
                    <input maxlength="80" name="email" size="40" type="text">
                    <label for="subject">Subject</label>
                    <input maxlength="80" name="subject" size="40" type="text">
                    <label for="message">Message</label>
                    <textarea cols="40" maxlength="1000" name="message" rows="5"></textarea>
                    <input type="hidden" name="required" value="email,message">
                    <input type="hidden" name="thankyou_url" value="https://www.alchemywebdesigns.com/files/pages/thankyou.php">
                    <label for="submit"></label>
                    <input type="submit" name="submit" value="Send">
                </form>

            </div>

        </div>
    </main>

    <?php require '../includes/footer.php' ?>


</body>

</html>