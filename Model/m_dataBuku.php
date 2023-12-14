<?php
require_once "Database.php";

class BukuModel {
    private $idBuku, $judul, $pengarang, $penerbit, $ISBN, $tahun, $stok;
    public function tambahBuku($judul, $pengarang, $penerbit, $ISBN, $tahun, $stok) {
        require ("Database.php");
        $rs = $mysqli->query("INSERT INTO buku VALUES ('$judul', '$pengarang','$penerbit','$ISBN','$tahun','$stok')");
        return $rs;
    }

    public function hapusBuku($idBuku) {
        require ("Database.php");
        $rs = $mysqli->query("DELETE FROM buku WHERE id_buku = '$idBuku'");
        return $rs;
    }

    public function cariBuku($judul, $pengarang, $penerbit) {
        require ("Database.php");
        $rs = $mysqli->query("SELECT * FROM buku WHERE judul LIKE '%$judul%' OR pengarang LIKE '%$pengarang%' OR penerbit LIKE '%$penerbit%'");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->hasil = $rows;
        return $this->hasil;
    }

    public function tampilBuku() {
        require ("Database.php");
        $rs = $mysqli->query("SELECT * FROM buku");
        $rows = array();
        while($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->hasil = $rows;
        return $this->hasil;
    }
}
