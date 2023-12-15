<?php
include_once 'Controller/PinjamController.php';
$controller = new PinjamController();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Document</title>
</head>

<body>

<?php
  include "layouts/navbar.php";
?>

  <div class="container">
    <div class="row">
      <h1>Peminjaman</h1>
    </div>
  </div>
  <br>
  <form class="container" name="addition" method="post" action="">
    <div class="row">
      <div class="input-group">
        <div class="col-xs-6">
          <select name="id_peminjam" class="btn btn-light dropdown-toggle">
            <option value="">ID Anggota...</option>
            <?php
            $controller->dropDownMember();
            ?>
        </div>
        <span class="input-group-addon" style="padding:10px;">&nbsp</span>
        <div class="col-xs-6">
          <select name="dropdown" class="btn btn-light dropdown-toggle">
            <option value="">Select</option>
            <?php
            $controller->dropDownBook();
            ?>
        </div>
      </div>
      <div class="col-xs-6">
        <input type="submit" class="btn btn-primary" id="addbutton" value="Tambah" disabled>
      </div>
    </div>
  </form>

  <br>

  <div class="container">
    <div class="row">

      <div class="col-sm-15">

        <div class="card">
          <h5 class="card-header">Riwayat Peminjaman Buku</h5>
          <div class="card-body">
            <div style="height:300px;overflow:auto;">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Judul Buku</th>
                    <th>Peminjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $controller->tableView();
                  ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
<script>
  let d = document,
    [inputs, submitter] = [
      d.querySelectorAll('[type="text"], select'),
      d.querySelector('#addbutton')
    ]
  submitter.disabled = true

  for (i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener('input', () => {
      let values = []
      inputs.forEach(v => values.push(v.value))
      submitter.disabled = values.includes('')
    })
  }

  const current = document.getElementById("peminjaman-nav");
  current.classList.add("active");
  current.setAttribute("aria-current", "page");
</script>

</html>