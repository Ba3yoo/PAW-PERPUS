<?php

include 'Controller/c_pengembalian.php';
$load = new c_pengembalian;
$load->tableView();

// Pastikan $_GET['id'] ada dan merupakan angka (untuk keamanan)
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_peminjaman = $_GET['id'];

    // Sekarang Anda memiliki $id_peminjaman untuk digunakan dalam pemanggilan method atau query lainnya

    // Misalnya, jika ingin memanggil method `tambahPengembalian` dari c_pengembalian.php dengan ID tersebut:
    include_once 'Controller/c_pengembalian.php';

    $controller = new c_pengembalian();
    $controller->tambahPengembalian($id_peminjaman);
    
    // Atau Anda dapat melakukan hal lain sesuai kebutuhan aplikasi Anda di sini
}