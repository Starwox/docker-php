<?php
/**
 * Created by PhpStorm.
 * User: starwox
 * Date: 03/12/2021
 * Time: 15:30
 */

class Users {
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
}