const pathName = window.location.pathname;
switch (pathName) {
    case '/index.php':
        document.getElementById('under_name').innerHTML = 'CV';
        break;
    case '/aboutme.php':
        document.getElementById('under_name').innerHTML = 'About me';
        break;
    case '/contacts.php':
        document.getElementById('under_name').innerHTML = 'Contact';
        break;
    default:
        document.getElementById('under_name').innerHTML = 'CV';
}