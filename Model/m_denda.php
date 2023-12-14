<?php
require_once "Database.php";

class m_denda{
    public function bayarDenda($id_denda){
        $query = "UPDATE denda SET status_bayar = 1 WHERE id_denda = '$id_denda'";

        $db = new Database();
        $mysqli = $db->getConnection();
        $result = $mysqli->query($query);

        if($result){
            return true;
        } else{
            return false;
        }
    }

    public function tampilDenda(){
        $query = "SELECT * from denda where status_bayar = 0";

        $db = new Database();
        $mysqli = $db->getConnection();
        $result = $mysqli->query($query);
        if($result){
            $data = array();
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }else{
            return false;
        }
    }


}