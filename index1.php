<?php
if (!session_id())
    session_start();
require __DIR__ . '/files/includes/root.php';
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

    <link href="./files/css/index1.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <!--<link href=".files/fonts/Wizards Magic.ttf" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <!--<link rel="icon" href="./images/Image7.gif">-->
    <link rel="icon" type="image/png" sizes="16x16" href="./files/images/favicon-16x16.png">

</head>

<body>

    <?php
     require './files/includes/menu2.php'; 
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
                    <span class="title">ALCHEMY</span><span class="sub-title"> Web&nbsp;Designs</span>
                </div>
                <div class="box box2">
                    Bring the Magic of the web to work
                </div>
                <div class="box box3">
                    <ul class="copy">
                        <li>We take our name from the alchemists of old.</li>
                        <li>Alchemists worked behind the scenes & wrote in code.</li>
                        <li>Their quest was transformation.</li>
                        <li>Their symbol was gold.</li>
                        <li>We develop websites</li>
                        <li>to work magic-</li>
                        <li>pure gold.</li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </main>

    <?php require './files/pages/footer.php' ?>

</body>

</html>