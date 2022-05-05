<?php 

namespace Models;

use Config\DbConnection;
require_once(__DIR__.'\..\config\DbConnection.php');

class UserModel {
   
    private $name;
    private $email;
    private $password;
    private $tel;
    private $role;

    private static $db;

    
    public function __construct()
    {
        self::$db = new DbConnection();

        $this->role = "ROLE_USER";
    }

    public function __init($name, $email, $password, $tel)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->tel = $tel;
    }

    public function new()
    {
        var_dump($this);
        $query = "INSERT INTO USERS (name, email, password, tel, role) VALUES (?, ?, ?, ?, ?)";
        $stmt = self::$db->db->prepare($query);
        $stmt->bind_param("sssss", $this->name, $this->email, $this->password, $this->tel, $this->role);
        $stmt->execute();
    }

    public static function get($email, $password)
    {
        $query = "SELECT * FROM USERS WHERE email=? AND password=?";
        $stmt = self::$db->db->prepare($query);
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result;
    }
}