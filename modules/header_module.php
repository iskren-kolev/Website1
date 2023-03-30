<header>
    <h1>Iskren Kolev</h1>
    <p id="under_name"></p>
</header>

<?php
    include "./config/site_pages.php";

    // Get the current URL path
    $pathName = $_SERVER['REQUEST_URI'];

    // Find the corresponding page title for the current URL path
    $pageTitle = 'CV'; // Default to 'CV'

    foreach ($pages as $title => $url) {
        if ($url === $pathName) {
            $pageTitle = $title;
        break;
        }
    }

    // Output the page title
    echo '<span id="under_name">' . $pageTitle . '</span>';
    ?>

