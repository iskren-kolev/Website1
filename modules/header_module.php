<div id="fixed-header">
    <header>
        <h1>Iskren Kolev</h1>
        <?php include "./config/change_header_name.php" ?>
        <p id="under_name"></p>
    </header>
    <div class="topnav" id="myTopnav">
        <?php include "./functions/showNavItems.php"?>
        <?php showNavItems($pages, $pageTitle);?>

        <!--<a href="./index.php">Home</a>
        <a href="./contacts.php">Contact</a>
        <a href="./aboutme.php">About me</a>-->
        <a href="javascript:void(0);" class="icon">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>