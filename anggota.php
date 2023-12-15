<?php
include_once 'Controller/anggotaController.php';
$controller = new anggotaController();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Anggota Perpustakaan</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <h1>Anggota</h1>
    </div>
  </div>

  <br>

  <div class="container">
    <div class="row">
      <div class="col-sm-15">
      <div class="feature" style="display: flex">
        <form action="anggotaController.php" method="get">
            <input type="search" name="keyword" placeholder="Cari anggota">
            <button type="submit" name="search" class="btn btn-secondary">Cari</button>
        </form>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addAnggota">Tambah Anggota</button>
      </div>
        <div class="card">
          <h5 class="card-header">Data Anggota</h5>
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID Anggota</th>
                  <th>Nama Anggota</th>
                  <th>Tanggal Daftar</th>
                  <th>Status</th>
                  <th colspan='2'>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $controller->showAnggota();
                ?>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="modal fade" id="addAnggota" tabindex="-1" role="dialog" aria-labelledby="addAnggota" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="labelAdd">Tambah Anggota</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="anggotaController.php" method="post">
                <label for="nama">Nama Anggota:</label>
                <input type="text" name="nama" placeholder="Nama Anggota Baru" required>
                <label for="status">Status Anggota:</label>
                <select id="cars" name="cars">
                    <option value="0">Tidak Aktif</option>
                    <option value="1">Aktif</option>
                </select>
                <button type="submit"name="add" class="btn btn-primary">Tambah</button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
</body>
</html>