<?php
try
{
    $GLOBALS['db'] = new PDO('mysql:host=localhost:3306;dbname=cms;charset=utf8', 'root', 'password');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>