<?php
class c_dataBuku {
    public $bukuModel;

    public function tambahKolom($judul, $pengarang, $penerbit, $ISBN, $tahun, $stok) {
        include_once 'Model/m_dataBuku.php';
        $this->model = new m_dataBuku();
        $this->model->tambahBuku($judul, $pengarang, $penerbit, $ISBN, $tahun, $stok);
    }

    public function hapusBuku($judul) {
        include_once '../Model/m_dataBuku.php';
        $this->model = new m_dataBuku();
        $this->model->hapusBuku($judul);
        header('Location: ../dataBuku.php');
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

if (isset($_POST['judul'])) {
    $dataBuku = new c_dataBuku();
    $dataBuku->tambahKolom($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['isbn'], $_POST['tahun'], $_POST['stok']);
    unset($_POST['judul']);
    header('Location: dataBuku.php');
} else if(isset($_GET['delete'])){
    $controller = new c_dataBuku();
    $controller->hapusBuku($idBuku);
    $idBuku = $_GET['delete'];
    unset($_POST['delete']);
    header('Location: dataBuku.php');
}