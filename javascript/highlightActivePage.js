if (window.location.pathname === "/index.php") {
    document.querySelector('a[href="./index.php"]').setAttribute("id","active");
    document.querySelector('a:not[href="./index.php"]').setAttribute("id","");
} else if(window.location.pathname === "/aboutme.php"){
    document.querySelector('a[href="./aboutme.php"]').setAttribute("id","active");
    document.querySelector('a:not[href="./aboutme.php"]').setAttribute("id","");
} else if(window.location.pathname === "/contacts.php"){
    document.querySelector('a[href="./contacts.php"]').setAttribute("id","active");
    document.querySelector('a:not[href="./contacts.php"]').setAttribute("id","");
}else{
    document.querySelector('a[href="./index.php"]').setAttribute("id","active");
    document.querySelector('a:not[href="./index.php"]').setAttribute("id","");
}