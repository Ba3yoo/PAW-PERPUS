<?php
require_once "Database.php";

class m_dataBuku {
    private $idBuku, $judul, $pengarang, $penerbit, $ISBN, $tahun, $stok;
    public function tambahBuku($judul, $pengarang, $penerbit, $ISBN, $tahun, $stok) {
        $db = new Database();
        $mysqli = $db->getConnection();
        $rs = $mysqli->query("INSERT INTO buku (judul, pengarang, penerbit, isbn, tahun, stok) VALUES ('$judul', '$pengarang','$penerbit','$ISBN','$tahun','$stok')");
        return $rs;
    }

    public function hapusBuku($idBuku) {
        $db = new Database();
        $mysqli = $db->getConnection();
        $rs = $mysqli->query("DELETE FROM buku WHERE id_buku = '$idBuku'");
        return $rs;
    }

    public function editBuku($idBuku, $judul, $pengarang, $penerbit, $ISBN, $tahun, $stok) {
        $db = new Database();
        $mysqli = $db->getConnection();
        $rs = $mysqli->query("UPDATE buku SET judul = '$judul' pengarang = '$pengarang' penerbit = '$penerbit' isbn = '$ISBN' tahun = '$tahun' stok = '$stok' where id_buku = '$idBuku'");
        return $rs;
    }

    public function cariBuku($judul, $pengarang, $penerbit) {
        $db = new Database();
        $mysqli = $db->getConnection();
        $rs = $mysqli->query("SELECT * FROM buku WHERE judul LIKE '%$judul%' OR pengarang LIKE '%$pengarang%' OR penerbit LIKE '%$penerbit%'");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->hasil = $rows;
        return $this->hasil;
    }

    public function tampilBuku() {
        $db = new Database();
        $mysqli = $db->getConnection();
        $rs = $mysqli->query("SELECT * FROM buku");
        $rows = array();
        while($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->hasil = $rows;
        return $this->hasil;
    }
}
