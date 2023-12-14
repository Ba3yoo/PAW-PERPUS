<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="dendastyles.css">
    <title>Denda</title>
</head>
<body>
<?php
include_once "Model/m_denda.php"; // Pastikan memasukkan file class m_denda.php

// Membuat instance objek dari class m_denda
$dendaModel = new m_denda();

// Memanggil fungsi tampilDenda untuk mendapatkan data denda
$dataDenda = $dendaModel->tampilDenda();

// Menampilkan data dalam tabel HTML
if ($dataDenda !== false) {
    echo '<table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Denda</th>
                    <th scope="col">ID Pengembalian</th>
                    <th scope="col">Total Denda</th>
                    <th scope="col">Status Bayar</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>';
    
    foreach ($dataDenda as $row) {
        echo '<tr>
                <th scope="row">' . $row['id_denda'] . '</th>
                <td>' . $row['id_pengembalian'] . '</td>
                <td>' . $row['total_denda'] . '</td>
                <td>' . ($row['status_bayar'] == 1 ? 'Sudah Bayar' : 'Belum Bayar') . '</td>
                <td><button onclick="bayarDenda(' . $row['id_denda'] . ')" class="btn btn-primary">Bayar Denda</button></td>
            </tr>';
    }

    echo '</tbody></table>';
} else {
    echo '<p>Tidak ada data denda yang perlu ditampilkan.</p>';
}
?>
</body>
</html>