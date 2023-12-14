<?php

class PinjamController {
    public $model;
    public function addColumn( $memberid, $bookid) {
        include_once 'Model/m_pinjam.php';
        $this->model = new m_pinjam();
        $this->model->addBorrow($memberid, $bookid);
    }
    public function dropDown() {
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