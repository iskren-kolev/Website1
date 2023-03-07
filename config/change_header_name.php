<?php
// Define an array of page titles and their corresponding URLs
$pages = array(
    'CV' => '/index.php',
    'About me' => '/aboutme.php',
    'Contact' => '/contacts.php'
);

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