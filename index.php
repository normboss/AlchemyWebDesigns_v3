<?php
if (!session_id())
    session_start();
$_SESSION['pagenumber'] = "0";
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    require 'files/includes/globalSiteTag.html';
    ?>
    <title>Alchemy Web Designs | Custom website design</title>
    <meta name=="description" content="Put the magic of the web to work! Providing attractive, responsive websites to increase your customer base & bolster business. Personalized customer contact a specialty!">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        a {
            color: #ddd;
        }
    </style>
</head>
<body>
    <a href="./files/pages/home.php">Click to enter</a>

    <script>

    window.location.href = "./files/pages/home.php";
    </script>
</body>
</html>
