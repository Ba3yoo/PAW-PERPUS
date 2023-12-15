<?php
class PinjamController {
    public $model;
    public function addColumn($memberid, $bookid) {
        include_once 'Model/m_pinjam.php';
        $this->model = new m_pinjam();
        $this->model->addBorrow($memberid, $bookid);
    }
    public function dropDownMember() {
        include_once 'Model/m_pinjam.php';
        $this->model = new m_pinjam();
        $available = $this->model->availMem();
        include 'View/anggotaDrop.php';
    }
    public function dropDownBook() {
        include_once 'Model/m_pinjam.php';
        $this->model = new m_pinjam();
        $available = $this->model->availBook();
        include 'View/pinjamDrop.php';
    }
    public function tableView() {
        include_once 'Model/m_pinjam.php';
        $this->model = new m_pinjam();
        $borrow = $this->model->getBorrow();
        include 'View/pinjamTabel.php';
    }
}


if(isset($_POST['id_peminjam'])) {
    $pinjamcontrol = new PinjamController();
    $pinjamcontrol->addColumn($_POST['id_peminjam'], $_POST['dropdown']);
    unset($_POST['id_peminjam']);
    header('Location: peminjaman.php');
}