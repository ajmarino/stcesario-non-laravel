<?php
    date_default_timezone_set('America/New_York');
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

        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="app" class="ff-lato">
            <a id="top" hidden></a>
            <global-header :links="routes"></global-header>

            <main role="main">

            </main>

            <global-footer year="<?php echo date('Y', strtotime('now')) ?>"></global-footer>
        </div>


        <script src="js/app.js"></script>
    </body>
</html>
