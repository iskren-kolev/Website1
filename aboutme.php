<!DOCTYPE html>
<html lang="en">
    <!--including HEAD module-->
    <?php include ('./modules/head.php');?>

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
		<script src="./javascript/highlightActivePage.js"></script>
        <script src="./javascript/countdown.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
