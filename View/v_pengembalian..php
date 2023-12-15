<?php

include_once 'Controller/c_pengembalian.php';
$controller = new c_pengembalian();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <?php
    include "layouts/navbar.php";
    ?>

    <div class="card">
        <h5 class="card-header">Pengembalian Buku</h5>
        <div class="card-body">
            <div style="height:300px;overflow:auto;">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul Buku</th>
                            <th>Peminjam</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Tanggal Terima</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i = 1;
                        foreach ($data as $borrow) {
                            echo "<tr>",
                            "<td>".$i++."</td>",
                            "<td>".$borrow["nama"]."</td>",
                            "<td>".$borrow["judul"]."</td>",
                            "<td>".$borrow["tgl_pinjam"]."</td>",
                            "<td>".$borrow["tgl_kembali"]."</td>",
                            "<td>".$borrow["tgl_terima"]."</td>",
                            "</tr>";
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>
</html>