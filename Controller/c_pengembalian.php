<?php

if (isset($_POST["id_peminjaman"])) {

$id_peminjaman = $_POST["id_peminjaman"];


include_once "../Model/Database.php";
$db = new Database();
$mysqli = $db->getConnection();
include_once "../Model/m_pengembalian.php";
$model = new m_pengembalian;
$model->addPengembalian($id_peminjaman);
$db->closeConnection();
} else {
echo "ID tidak valid.";
}