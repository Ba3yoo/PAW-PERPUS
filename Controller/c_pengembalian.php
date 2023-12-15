<?php

class c_pengembalian {

    function tambahPengembalian() {
        include_once "../Model/Database.php";
        $db = new Database();
        $mysqli = $db->getConnection();
        include_once "../Model/m_pengembalian.php";
        $model = new m_pengembalian;
        $model->addPengembalian($id_peminjaman);
        $db->closeConnection();
    }

    function tableView() {
        include_once "Model/m_pengembalian.php";
        $model = new m_pengembalian;
        $data = $model->getPengembalian();
        include 'View/v_pengembalian..php';
    }
}




