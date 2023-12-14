<?php
require "Database.php";


class BukuModel {
    public function tambahBuku($judul, $pengarang, $penerbit, $ISBN, $tahun, $stok) {
        require ("Database.php");
        $query = "INSERT denda SET status_bayar = 1 WHERE id_denda = '$id_denda'";

        $mysqli = Database::connect();
        $result = $mysqli->query($query);

        if($result){
            return true;
        } else{
            return false;
        }
    }

    public function hapusBuku($idBuku) {
    }

    public function cariBuku($kataKunci) {
    }

    public function tampilBuku() {
    }
}
