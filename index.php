<!DOCTYPE html>
<html lang="en">
    <!--including HEAD module-->
    <?php include ('./modules/head.php');?>

	<body>
		<?php include ('./modules/header_module.php'); ?>
		<?php include ('./modules/navigation_bar_module.php') ?>

        <section class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Summary
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="summary"><img src="./sources/pic_of_me.jpg" width="80" alt="IMAGE">
                            Hello,<br>
                            I am Iskren from Ruse,Bulgaria.
                            I am responsible, disciplined and creative.
                            I like to create and fix things. In my free time, I like to ride a bike and a motorcycle.
                            I like walks in the mountains and forests.
                            My hobby is restoring old cars and motorbikes as well as repairing battery packs.</p>                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Education
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li><b>Master degree of Computer systems and networks - University of Ruse</b> | 2018-2019</li>
                            <li><b>Bachalor degreee of Computer Science -  University of Ruse</b> | 2014 - 2018 </li>
                            <li><b>Computer techniques and technologies - Middle school</b> | 2009 - 2014 </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Skills
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <table id="skills">
                            <tr><th>Skill</th><th>Level</th></tr>
                            <tr><td>HTML</td><td>Entry</td></tr>
                            <tr><td>CSS</td><td>Entry</td></tr>
                            <tr><td>JavaScript</td><td>Entry</td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
		<!--<section>
			<h2 id="summaryh2">Summary</h2>
			<p class="summary"><img src="./sources/pic_of_me.jpg" width="80" alt="IMAGE">
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
        </section>-->
		
		<?php include ('./modules/footer_module.php');?>

		<script src="./javascript/hamburger_menu.js"></script>
		<script src="./javascript/highlightActivePage.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	</body>
</html>
