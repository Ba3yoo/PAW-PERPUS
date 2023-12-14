<?php
require "Database.php";

class m_denda{
    public function bayarDenda($id_denda){
        require ("Database.php");
        $query = "UPDATE denda SET status_bayar = 1 WHERE id_denda = '$id_denda'";

        $mysqli = Database::connect();
        $result = $mysqli->query($query);

        if($result){
            return true;
        } else{
            return false;
        }
    }

    public function tampilDenda(){
        require ("Database.php");
        $query = "SELECT * from denda where status_bayar = 0";

        $mysqli = Database::connect();
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