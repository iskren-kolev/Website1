<!DOCTYPE html>
<html>

	<head>
		<title>Iso's site</title>		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--take the hamburger icon from here-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            <?php include "./stylesheets/aboutme.css" ?>
        </style>
	</head>

	<body id="page_identifier_3">
    <?php include ('./modules/header_module.php'); ?>

    <?php include ('./modules/navigation_bar_module.php') ?>

		<section>
			<h2 id="summaryh2">About me</h2>
			<p class="summary"><img src="./sources/pic_of_me.jpg" width="80px" alt="IMAGE">
			Hello,<br>
			I am Iskren from Ruse,Bulgaria. 
			I am responsible, disciplined and creative. 
			I like to create and fix things. In my free time, I like to ride a bike and a motorcycle. 
			I like walks in the mountains and forests. 
			My hobby is restoring old cars and motorbikes as well as repairing battery packs.</p>
        </section>

        <?php include ('./modules/footer_module.php');?>

		<script src="./javascript/hamburger_menu.js"></script>

    </body>
</html>
