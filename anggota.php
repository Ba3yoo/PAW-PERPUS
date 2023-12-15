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
      </div>
        <div class="card">
          <h5 class="card-header">Data Anggota  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAnggota">Tambah Anggota</button></h5>
          <!-- Modal -->
            <form class="container" name="addition" method="post" action="">
            <div class="modal fade" id="addAnggota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Anggota</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <div class="form-group">
                        <label>Nama Anggota</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Status Anggota</label>
                        <select name="status">
                          <option value="1">Aktif</option>
                          <option value="0">Tidak Aktif</option>
                        </select>
                    </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" name="add" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
            <!-- Tutup Modal -->

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
</body>
</html>