<?php 

namespace Models;

use Config\DbConnection;
require_once(__DIR__.'\..\config\DbConnection.php');


class ElectionModel {
    private $title;
    private $start_date;
    private $end_date;
    private $description;

    private static $db;

    public function __construct()
    {
        self::$db = new DbConnection();
    }

    public function __init($title, $start_date, $end_date, $description)
    {
        $this->title = $title;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->description = $description;

    }

    public static function get_all()
    {
        $res = self::$db->db->query("SELECT * FROM ELECTIONS");
        return $res;
    }

    public function new()
    {
        $query = "INSERT INTO ELECTIONS (title, start_date, end_date, description) VALUES (?, ?, ?, ?)";
        $stmt = self::$db->db->prepare($query);
        $stmt->bind_param("ssss", $this->title, $this->start_date, $this->end_date, $this->description );
        $stmt->execute();
    }
}