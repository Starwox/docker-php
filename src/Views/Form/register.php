<?php
/**
 * Created by PhpStorm.
 * User: starwox
 * Date: 04/12/2021
 * Time: 20:14
 */
//require('../../Entity/Users.php');

if(isset($_POST['register'])) {
    echo "This is Button1 that is selected";
}
?>

<form method="post">
    <label>Username:</label> <input type="text" name="username"><br>
    <label>Password:</label> <input type="text" name="password"><br>
    <input type="submit" name="register">
</form>