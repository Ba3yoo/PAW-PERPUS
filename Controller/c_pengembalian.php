<?php

if (isset($_POST["id_peminjaman"])) {

$id_peminjaman = $_POST["id_peminjaman"];


include_once "../Model/Database.php";
$db = new Database();
$mysqli = $db->getConnection();

try {
    include_once "../Model/m_pengembalian.php";
    $model = new m_pengembalian;
    $data = $model->addPengembalian($id_peminjaman);

    ;

    if ($data) {
        echo "Denda berhasil dibayar.";
    } else {
        echo "Gagal memperbarui status bayar.";
    }
} catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}

$db->closeConnection();
} else {
echo "ID Denda tidak valid.";
}