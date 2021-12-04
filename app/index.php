<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/Views/home.php';
        break;
    case '' :
        require __DIR__ . '/Views/home.php';
        break;
    case '/register' :
        require __DIR__ . '/Views/Form/register.php';
        break;
}

?>
