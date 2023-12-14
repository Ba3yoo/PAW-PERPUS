<?php
require_once "Database.php";

class m_pengembalian {

    public static function getPengembalian($id) {
        $db = new Database();
        $mysqli = $db->getConnection();
        $result = $mysqli->query("SELECT");
        if ($result) {
            return $result->fetch_assoc();
        } else {
            return false;
        }


    }
}