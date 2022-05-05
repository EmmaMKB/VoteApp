<?php 

namespace Controllers;
use Models\ElectionModel;
require_once(__DIR__.'\..\models\ElectionModel.php');

if ($_POST) {
    if ($_POST['action']=="post_election") {
        ElectionController::new($_POST);
    }
}

class ElectionController {

    public static function new()
    {
        $data = new ElectionModel();        
        $data->__init($_POST['title'], $_POST['start_date'], $_POST['end_date'], $_POST['description']);        
        $data->new();
        header("Location: /admin/", true, 301);
    }

    public static function get_all()
    {
        $db_handler = new ElectionModel();

        $res = $db_handler::get_all();
        $data = [];

        while($row = $res->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

   
}