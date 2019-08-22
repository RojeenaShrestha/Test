<?php


namespace App\model;


use App\Database\DBConnection;

class Contact
{


    public function __construct()
    {
    }

    public function save($array) {
        
    }

    public function getList() {
        $db = (new DBConnection());
        $connection = $db->connection();
        $query = 'SELECT * FROM contact';
        $result = $connection->query($query);

        $res_arr = [];
        if ($result->num_rows) {
            while ($row = $result->fetch_row()) {
                array_push($res_arr, $row);
            }
        }
        $db->disconnect();
        return $res_arr;
    }
}