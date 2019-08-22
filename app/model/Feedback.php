<?php


namespace App\Model;

use App\Config\DBConnection;
use Exception;

class Feedback
{

    private $db;

    public function __construct()
    {
        $this->db = (new DBConnection());
    }

    /**
     * Check input parameters
     * @param $str
     * @return string
     */
    private function safe($str)
    {
        return mysqli_real_escape_string($this->db->connection(), $str);
    }


    /**
     * Insert contact info
     * @param $array
     * @return array
     */
    public function save($array)
    {
        try {

            $connection = $this->db->connection();
            foreach ($array as $item => $value) ${"$item"} = $this->safe($value);
            $query = "INSERT INTO contact (full_name, email, institute_name, phone, message)";
            $query .= "VALUES('{$full_name}', '{$email}', '{$institute}', '{$phone}', '{$message}')";
            $result = $connection->query($query);
            if ($result) {
                return [
                    'code' => 800,
                    'message' => 'Successfully saved!'
                ];
            } else throw new Exception('Oops, something went wrong!');
        } catch (Exception $exception) {
            return [
                'code' => 900,
                'message' => $exception->getMessage()
            ];
        }
    }

    /**
     * Get all the contact lists
     * @return array
     */
    public function getList()
    {
        try {
            $connection = $this->db->connection();
            $query = "SELECT * FROM contact ORDER BY id DESC";
            $result = $connection->query($query);

            $res_arr = [];
            if ($result->num_rows) {
                while ($row = $result->fetch_row()) {
                    array_push($res_arr, $row);
                }
            }
            $this->db->disconnect();
            return [
                'code' => 800,
                'message' => 'Successfully retrieved',
                'data' => $res_arr
            ];
        } catch (Exception $exception) {
            return [
                'code' => 900,
                'message' => $exception->getMessage()
            ];
        }
    }
}