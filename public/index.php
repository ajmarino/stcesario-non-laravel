<?php
    require './helpers.php';
    require '../config/stcesario.php';


    if (!isset($_GET['_q'])){
        $_GET['_q'] = '/';
    }


    $url = $_GET['_q'];
    $url_parts = explode('/', $url);


    $components = [
        // "_jumbotron.php",
        // "_about-us.php",
        // "parallax/_block-1.php",
        // "_our-history.php",
        // "parallax/_block-2.php",
        // "_media.php",
        // "parallax/_block-3.php",
        // "_contact.php"
    ];


    $settings = new Settings;
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>St. Cesario Society</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div id="site">
            <?php require_once $settings->componentPath('global/header.php'); ?>

            <main role="main">
                
                <?php foreach ($components as $template) {
                    include_once $settings->componentPath("components/{$template}");
                } ?>

            </main>

            <?php require_once $settings->componentPath('global/footer.php'); ?>
        </div>

        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
