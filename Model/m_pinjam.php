<?php 
include_once "Database.php";

class m_pinjam {
    private $memberid;
    private $bookid;
    public $results;
    public function addBorrow($memberid, $bookid) {
        require ("Database.php");
        $mysqli->query("INSERT INTO peminjaman (`tgl_pinjam`, `tgl_kembali`, `id_buku`, `id_anggota`) VALUES (NOW(), DATEADD(day, 7, NOW()), '$bookid', '$memberid')");
    }
    public function getBorrow() {
        require ("Database.php");
        $rs = $mysqli->query("SELECT * FROM peminjaman");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->results = $rows;
        return $this->results;
    }
}