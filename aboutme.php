<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Iso's site</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--take the hamburger icon from here-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            <?php include "./stylesheets/aboutme.css" ?>
        </style>
	</head>

	<body>
        <?php include ('./modules/header_module.php'); ?>
        <?php include ('./modules/navigation_bar_module.php') ?>
        <section>
            <h2 id="summaryh2">Timer</h2>
            <div id="timerSection"></div>
            <img id="timerImage" src="./sources/timer.png">
            <button id="resetButton">Reset</button>
        </section>
        <?php include ('./modules/footer_module.php');?>
		<script src="./javascript/hamburger_menu.js"></script>
        <script src="./javascript/countdown.js"></script>
    </body>
</html>
