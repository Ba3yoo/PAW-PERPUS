<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["id_denda"])) {

        $id_denda = $_POST["id_denda"];


        include_once "../Model/Database.php";
        $db = new Database();
        $mysqli = $db->getConnection();

        try {
            include_once "../Model/m_denda.php";
            $dendaModel = new m_denda();

            $bayarResult = $dendaModel->bayarDenda($id_denda);
        
            if ($bayarResult) {
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
} else {
    echo "Metode request tidak valid.";
}