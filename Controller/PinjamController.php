<?php

class PinjamController {
    public $model;
    public function addColumn( $memberid, $bookid) {
        include_once 'Model/m_pinjam.php';
        $this->model = new m_pinjam();
        $this->model->addBorrow($memberid, $bookid);
    }
    public function tableView() {
        include_once 'Model/m_pinjam.php';
        $this->model = new m_pinjam();
        $borrow = $this->model->getBorrow();
        include 'View/pinjamTabel.php';
    }
}