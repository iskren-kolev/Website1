<!DOCTYPE html>
<html>

	<head>
		<title>Iso's site</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--take the hamburger icon from here-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            <?php include "./stylesheets/index.css" ?>
        </style>
	</head>

	<body id="page_identifier_1">

		<?php include ('./modules/header_module.php'); ?>

		<?php include ('./modules/navigation_bar_module.php') ?>

		<section>
			<h2 id="summaryh2">Summary</h2>
			<p class="summary"><img src="./sources/pic_of_me.jpg" width="80px" alt="IMAGE">
			Hello,<br>
			I am Iskren from Ruse,Bulgaria. 
			I am responsible, disciplined and creative. 
			I like to create and fix things. In my free time, I like to ride a bike and a motorcycle. 
			I like walks in the mountains and forests. 
			My hobby is restoring old cars and motorbikes as well as repairing battery packs.</p>
        </section>
		
		<section>
			<h2>Education</h2>
			<ul>
				<li><b>Master degree of Computer systems and networks - University of Ruse</b> | 2018-2019</li>
				<li><b>Bachalor degreee of Computer Science -  University of Ruse</b> | 2014 - 2018 </li>
				<li><b>Computer techniques and technologies - Middle school</b> | 2009 - 2014 </li>
			</ul>
        </section>
		
        <section>
			<h2>Experience</h2>
			<ul>
				<li><b>Database operator - Ruse Regional Library</b> | 2015-2016</li>
				<li><b>Тrainee computer technician - GIS Computers</b> | 2014-2015</li>
				<li><b>Computer technician - IMField</b> | 2013 - 2014 </li>
			</ul>
        </section>
		
        <section>
			<h2>IT Skills</h2>
			<table id="skills">
				<tr><th>Skill</th><th>Level</th></tr>
				<tr><td>HTML</td><td>Entry</td></tr>
				<tr><td>CSS</td><td>Entry</td></tr>
				<tr><td>JavaScript</td><td>Entry</td></tr>
			</table>
        </section>
		
		<?php include ('./modules/footer_module.php');?>

		<script src="./javascript/hamburger_menu.js"></script>

	</body>
</html>
