<?php 

namespace Models;

use Config\DbConnection;
require_once(__DIR__.'\..\config\DbConnection.php');

class CandidateModel {
    private $full_name;
    private $birthdate;
    private $picture;
    private $bio;

    private $db;

    public function __construct($full_name, $birthdate, $picture, $bio)
    {
        $this->full_name = $full_name;
        $this->$birthdate = $birthdate;
        $this->picture = $picture;
        $this->bio = $bio;

        $this->db = new DbConnection();
    }

    public static function get_all()
    {
        $db = new DbConnection();
        $res = $db->query("SELECT * FROM CANDIDATE");
    }
}