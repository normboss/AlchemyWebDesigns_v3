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

    <link href="../css/contact.css" media="screen" rel="stylesheet" type="text/css">
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

        <div class="images">
            <div class="forrest">
                <!-- <div class="box box0">
                    <?php
                    // require './files/includes/menu1.php'; 
                    ?>
                </div> -->
                <div class="box box1">
                    <br><br>
                    <!-- <span class="title">ALCHEMY</span><span class="sub-title"> Web&nbsp;Designs</span> -->
                    <?php
                    //  require '../includes/logo.php'; 
                    ?>

                </div>
                <div class="box box3">
                </div>
                <div class="box box3">
                    Put the Magic of the&nbsp;web to&nbsp;work
                    <div class="spacer20"></div>
                    Contact Us.
                </div>
            </div>
        </div>
        </div>
    </main>

    <?php require '../includes/footer.php' ?>


</body>

</html>