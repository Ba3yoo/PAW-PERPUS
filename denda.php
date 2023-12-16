<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="dendastyles.css">
    <link rel="icon" href="/assets/images/icon.png" type="image/x-icon">
    <title>Denda</title>
</head>

<body>
    <?php
    include_once "layouts/navbar.php";
    ?>
    <h2>Data Denda</h2>
    <nav class="navbar navbar-white bg-white">
    <form class="d-flex justify-content-between custom-search-form" method="post" action="">
        <input class="form-control mr-sm-2" type="search" name="search_query" placeholder="Cari data denda" aria-label="Search">
        <button class="btn btn-outline-success custom-search-button" type="submit" style="margin-left: 0.5rem;">Search</button>
    </form>
</nav>

    <?php

include_once "Model/m_denda.php";
include_once "Model/Database.php";

$dendaModel = new m_denda();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchQuery = $_POST["search_query"];
    $dataDenda = $dendaModel->searchDenda($searchQuery);
} else {
    $dataDenda = $dendaModel->tampilDenda();
}
include_once "View/DendaTabel.php";

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
              if ($row['status_bayar'] == 0) {
                  echo '<tr id="row_' . $row['id_denda'] . '">
                          <th scope="row">' . $row['id_denda'] . '</th>
                          <td>' . $row['id_pengembalian'] . '</td>
                          <td>' . $row['total_denda'] . '</td>
                          <td>' . ($row['status_bayar'] == 1 ? 'Sudah Bayar' : 'Belum Bayar') . '</td>
                          <td><button onclick="bayarDenda(' . $row['id_denda'] . ')" class="btn btn-primary">Bayar Denda</button></td>
                      </tr>';
              }
          }
          

    echo '</tbody></table>';
} else {
    echo '<p>Tidak ada data denda yang perlu ditampilkan.</p>';
}
?>

    <script>
    function bayarDenda(idDenda) {
        console.log("Button clicked with ID Denda: " + idDenda);
        $.ajax({
            type: "POST",
            url: "Controller/bayarDenda.php",
            data: {
                id_denda: idDenda
            },
            success: function(response) {
                console.log(response);
                alert(response);
                $("#row_" + idDenda).hide();
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                alert("Gagal memperbarui status bayar. Error: " + error);
            }
        });
    }
    </script>
</body>

</html>