<?php

include 'Controller/c_pengembalian.php';
$load = new c_pengembalian;
$load->tableView();

if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_peminjaman = $_GET['id'];
    include_once 'Controller/c_pengembalian.php';

    $controller = new c_pengembalian();
    $controller->tambahPengembalian($id_peminjaman);
}