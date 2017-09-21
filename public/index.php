<?php
    date_default_timezone_set('America/New_York');

    require './helpers.php';
    require '../config/stcesario.php';


    if (!isset($_GET['_q'])){
        $_GET['_q'] = '/';
    }


    $url = $_GET['_q'];
    $url_parts = explode('/', $url);


    $components = [
        "jumbotron.php",
        "about-us.php",
        "parallax/block-1.php",
        "our-history.php",
        "parallax/block-2.php",
        "media.php",
        "parallax/block-3.php",
        "contact.php"
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


        <link href="https://fonts.googleapis.com/css?family=Oswald|Quattrocento" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Average|Fjalla+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Oswald" rel="stylesheet">

        <link rel="stylesheet" href="css/app.css?v=<?php echo strtotime('now') ?>">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <div id="site" class="ff-lato">
            <?php $settings->componentPath('global/header.php'); ?>
            <a id="top" hidden></a>

            <main role="main">

                <?php foreach ($components as $template) {
                    $settings->componentPath("components/{$template}");
                } ?>

            </main>

            <?php $settings->componentPath('global/footer.php'); ?>
        </div>


        <script src="js/plugins.js"></script>
        <script src="js/vendor/jquery.parallax-1.1.3.js"></script>
        <script src="js/app.js?v=<?php echo strtotime('now') ?>"></script>


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
