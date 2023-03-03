<!DOCTYPE html>
<html>

	<head>
		<title>Iso's site</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--take the hamburger icon from here-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            <?php include "./stylesheets/contacts.css" ?>
        </style>
	</head>

	<body id="page_identifier_2">
    <?php include ('./modules/header_module.php'); ?>

    <?php include ('./modules/navigation_bar_module.php') ?>

        <section>
            <h2 id="contact-formh2">Contact Form</h2>
            <form id="contact-form">
                <label for="name">Name: </label><input placeholder="Name" id="name" type="text" /><br>
                <label for="email">Email: </label><input placeholder="Email" id="email" type="email" /><br>
                <textarea placeholder="Message"></textarea><br>
                <input type="submit" value="SEND">
            </form>
        </section>
       
		<section>
			<h2>Contacts</h2>
			<ul id="contacts">
				<li><a href="https://www.sololearn.com/profile/28081121" target="_blank">Sololearn</a></li>
				<li><a href="https://www.facebook.com/profile.php?id=100000258668957" target="_blank">Facebook</a></li>
			</ul>
		</section>

        <?php include ('./modules/footer_module.php');?>

		<script src="./javascript/hamburger_menu.js"></script>

	</body>
</html>
		