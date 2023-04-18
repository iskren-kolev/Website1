if (window.location.pathname === "/index.php") {
    document.querySelector('a[href="./index.php"]').setAttribute("id","active");
} else if (window.location.pathname === "/aboutme.php"){
    document.querySelector('a[href="./aboutme.php"]').setAttribute("id","active");
} else if (window.location.pathname === "/contacts.php"){
    document.querySelector('a[href="./contacts.php"]').setAttribute("id","active");
} else {
    document.querySelector('a[href="./index.php"]').setAttribute("id","active");
}