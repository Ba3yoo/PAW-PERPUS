// controller.php
<?php
require_once 'BukuModel.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

$bukuModel = new BukuModel();

switch ($action) {
    case 'tambahBuku':
        $dataBuku = $_POST['dataBuku'];
        $bukuModel->tambahBuku($dataBuku);
        header('Location: daftar_buku.php');
        break;

    case 'hapusBuku':
        $idBuku = $_GET['idBuku'];
        $bukuModel->hapusBuku($idBuku);
        header('Location: daftar_buku.php');
        break;

    case 'cariBuku':
        $kataKunci = $_POST['kataKunci'];
        $hasilPencarian = $bukuModel->cariBuku($kataKunci);
        include 'hasil_pencarian.php';
        break;

    default:
        $daftarBuku = $bukuModel->dapatkanSemuaBuku();
        include 'daftar_buku.php';
}
