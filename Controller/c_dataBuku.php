<?php
require_once "m_dataBuku.php";

class BukuController {
    private $bukuModel;

    public function __construct() {
        $this->bukuModel = new m_dataBuku();
    }

    public function tambahBuku($judul, $pengarang, $penerbit, $ISBN, $tahun, $stok) {
        $result = $this->bukuModel->tambahBuku($judul, $pengarang, $penerbit, $ISBN, $tahun, $stok);
        if ($result) {
            echo "Buku berhasil ditambahkan.";
        } else {
            echo "Gagal menambahkan buku.";
        }
    }

    public function hapusBuku($idBuku) {
        $result = $this->bukuModel->hapusBuku($idBuku);
        if ($result) {
            echo "Buku berhasil dihapus.";
        } else {
            echo "Gagal menghapus buku.";
        }
    }

    public function cariBuku($kataKunci) {
        $hasilPencarian = $this->bukuModel->cariBuku($kataKunci);
    }

    public function tampilBuku() {
        $buku = $this->bukuModel->tampilBuku();
        include_once "View/v_dataBuku.php";
    }
}