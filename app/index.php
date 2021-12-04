<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '' :
        require __DIR__ . '/views/index.php';
        break;
}

?>

<html>
<head>

</head>
<body>
<h1>HELLO WORLD</h1>
</body>
</html>
