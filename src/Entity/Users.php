<?php
/**
 * Created by PhpStorm.
 * User: starwox
 * Date: 03/12/2021
 * Time: 15:30
 */


class Users {



    // Properties

    /**
     * @var int The article ID from the database
     */
    public $id;

    /**
     * @var int The article ID from the database
     */
    public $username;

    /**
     * @var int The article ID from the database
     */
    public $password;

    /**
     * @var int The article ID from the database
     */
    public $admin = false;


    protected $db;

    public function __construct()
    {
        global $db;

        $this->db = $db;
    }

    function getAllUsers() {
        $sql = "SELECT * FROM users";
        $result = $this->db->query($sql);

        if ($result->num_rows > 0) {
            echo $result;
        } else {
            echo false;
        }
        $this->db->close();
    }

    function addUser($username, $password) {
        $sql = 'INSERT INTO users(username, password) VALUES (:username, :password)';

        $insertRecipe = $this->db->prepare($sql);

        $encoded = password_hash( $password, PASSWORD_DEFAULT);

        $insertRecipe->execute([
            'username' => $username,
            'password' => $encoded,
        ]);
    }
}