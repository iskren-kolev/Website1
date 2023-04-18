<!DOCTYPE html>
<html lang="en">
    <!--including HEAD module-->
    <?php include ('./modules/head.php');?>

	<body>
    <?php include ('./modules/header_module.php'); ?>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	</body>
</html>
		