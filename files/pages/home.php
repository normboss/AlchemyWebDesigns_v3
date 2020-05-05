<?php
if (!session_id())
    session_start();
// require __DIR__ . '/files/includes/root.php';
$_SESSION['pagename'] = "index";
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
    require '../includes/keywords.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/home.css" media="screen" rel="stylesheet" type="text/css">
    <!--<link href=".files/fonts/Wizards Magic.ttf" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <!--<link rel="icon" href="./images/Image7.gif">-->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

</head>

<body>

    <?php
    require '../includes/headerIndex.php';
    // require '../includes/header1.php';
    ?>
    <main>

        <div class="images">
            <div class="forrest">
                <div class="box box1">
                    <br>
                    <?php require '../includes/logo.php';     ?>

                </div>
                <div class="box box3">
                </div>
                <div class="box box3">
                    <?php
                    require '../includes/magic.php';
                    ?>
                </div>
            </div>
        </div>
        </div>
        <!-- <div id="click-me">Click Me</div> -->
    </main>

    <?php require '../includes/footer.php' ?>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <script>
        var text = document.getElementsByClassName("logo");

        gsap.from(text[0], 5, {
            opacity: 0,
            scale: ".1",
            ease: "power1.inOut",
            delay: 1
        });
        // gsap.to(text[0], 0.25, { rotation: -10, ease: Back.easeOut, delay: 5.5 });
        // gsap.to(text[0], 0.25, { rotation: 10, ease: Back.easeOut, delay: 5.75 });
        // gsap.to(text[0], 0.25, { rotation: 0, ease: Back.easeOut, delay: 6 });

        // gsap.from("#logo", 1, { left: -200, rotation: -90, scale: 0, ease: Back.easeOut, delay: 1.5 });
        // gsap.from("#address", 1, { left: "+=100", opacity: 0, ease: Back.easeOut, delay: 2.0 });
        // gsap.from("#content", 0.5, { opacity: 0, top: 100, delay: 3 });


        // $('#click-me').on('click', () => {
        //     $('.logo').toggle();
        //     // $('.logo').fadeOut();
        // });
    </script>

</body>

</html>