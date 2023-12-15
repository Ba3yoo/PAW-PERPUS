<?php
class anggotaController {
    public $model;
    
    public function addAnggota($nama, $status) {
        include_once 'Model/m_anggota.php';
        $this->model = new m_anggota();
        $this->model->addAnggota($nama, $status);
    }
    public function searchAnggota($keyword) {
        include_once '../Model/m_anggota.php';
        $this->model = new m_anggota();
        $hasilPencarian = $this->model->cariBuku($kataKunci);
        include 'View/tabelAnggota.php';
    }
    public function deleteAnggota($idAnggota) {
        include_once '../Model/m_anggota.php';
        $this->model = new m_anggota();
        $this->model->deleteAnggota($idAnggota);
        header('Location: ../anggota.php');
    }
    public function editAnggota($id, $nama, $status) {
        include_once '../Model/m_anggota.php';
        $this->model = new m_anggota();
        $this->model->addAnggota($id, $nama, $status);
    }
    public function showAnggota() {
        include_once 'Model/m_anggota.php';
        $this->model = new m_anggota();
        $anggota = $this->model->showAnggota();
        include 'View/tabelAnggota.php';
    }
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $controller = new anggotaController();
    $controller->deleteAnggota($id);
} else if(isset($_GET['search'])){
    $keyword = $_GET['keyword'];
    $controller = new anggotaController();
    $controller->searchAnggota($keyword);
} else if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $status = $_POST['status'];
    $controller = new anggotaController();
    $controller->editAnggota($id, $nama, $status);
    header('Location: anggota.php');
} if (isset($_POST['nama'])) {
    $controller = new anggotaController();
    $controller->addAnggota($_POST['nama'], $_POST['status']);
    unset($_POST['nama']);
    header('Location: anggota.php');
}