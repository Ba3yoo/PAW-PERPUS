<?php
class c_dataBuku {
    public $bukuModel;

    public function tambahKolom($id_buku, $judul, $pengarang, $penerbit, $ISBN, $tahun, $stok) {
        include_once 'Model/m_dataBuku.php';
        $this->model = new m_pinjam();
        $this->model->tambahBuku($memberid, $bookid);
    }

    public function cariBuku($kataKunci) {
        include_once "m_dataBuku.php";
        $hasilPencarian = $this->bukuModel->cariBuku($kataKunci);
    }

    public function tampilBuku() {
        include_once 'Model/m_dataBuku.php';
        $this->model = new m_dataBuku();
        $borrow = $this->model->tampilBuku();
        include 'View/v_dataBuku.php';
    }
}
