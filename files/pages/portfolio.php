<?php
if (!session_id())
    session_start();
// require '..\includes\root.php';
require __DIR__ . '/../includes/root.php';
$_SESSION['pagename'] = "portfolio";
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

    <link href="../css/portfolio.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <!--<link href=".files/fonts/Wizards Magic.ttf" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <!--<link rel="icon" href="./images/Image7.gif">-->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

</head>

<body>

    <?php
    // require '../includes/menu2.php';
    require '../includes/header1.php';
    ?>
    <main>

        <div class="portfolio">
            <div class="box box1">
                <div class="box11">Our Work</div>
                <div class="box12">
                    <a href="https://www.scottishwroughtiron.com" target="_blank">
                        <img src="../images/AndySparks.png">
                    </a>
                </div>
                <div class="box13">
                    <a href="https://www.scottishwroughtiron.com" target="_blank">
                        Scottish Lion Wrought Iron
                    </a>
                </div>
                <div class="box14">
                    <a href="https://www.mainevillageweaver.com" target="_blank">
                        <img src="../images/PhyllisWorking.png">
                    </a>
                </div>
                <div class="box15">
                    <a href="https://www.mainevillageweaver.com" target="_blank">
                        Maine Village Weaver
                    </a>
                </div>
                <div class="box16">
                    <a href="http://www.elementalshift.com" target="_blank">
                        <img src="../images/Kirsten.png">
                    </a>
                </div>
                <div class="box17">
                    <a href="http://www.elementalshift.com" target="_blank">
                        Elemental Shift
                    </a>
                </div>

            </div>

            <div class="box box2">
                <div class="box20">
                    <!-- <?php require '../includes/logo.php';     ?> -->
                </div>
                <div class="box21">
                    Testimonial
                </div>
                <div class="box22">
                    Alchemy Web Designs receives five star rating with us for
                    their creative upgrading of our old Scottish Lion Wrought
                    Iron and Maine Village Weaver websites. The company also
                    gets five more stars for the good work after the sites were
                    launched. Solving problems in a timely manor is extremely
                    important to a successful small business and they do it
                    well with such good quality and reasonable price points.
                    A.E.Leck, Scottish Lion Wrought Iron
                    <div class="spacer20"></div>
                </div>
                <div class="spacer20"></div>
                <div class="box23">
                    Put the magic of the web&nbsp;to&nbsp;work.
                </div>
                <div class="spacer20"></div>
                <div class="box24">
                    Contact Us
                </div>
                <div class="spacer20"></div>
                <div class="spacer20"></div>
            </div>
        </div>
        </div>
    </main>

    <?php require '../includes/footer.php' ?>

</body>

</html>