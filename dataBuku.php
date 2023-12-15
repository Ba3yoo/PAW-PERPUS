<?php
include_once 'Controller/c_dataBuku.php';
$controller = new c_dataBuku();
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

  <!-- <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Peminjaman</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul> -->

  <div class="container">
    <div class="row">
      <h1>Data Buku</h1>
    </div>
  </div>

  <br>

  <div class="container">
    <div class="row">

      <div class="col-sm-15">

        <div class="card">
          <h5 class="card-header">Data Buku Perpustakaan</h5>
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Judul Buku</th>
                  <th>Pengarang</th>
                  <th>Penerbit</th>
                  <th>ISBN</th>
                  <th>Tahun</th>
                  <th>Stok</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $controller->tampilBuku();
                ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
<script>
  let d = document, [inputs, submitter] = [
    d.querySelectorAll('[type="text"], select'),
    d.querySelector('#addbutton')]
submitter.disabled = true

for (i = 0; i < inputs.length; i++) {
  inputs[i].addEventListener('input',() => {
    let values = []
    inputs.forEach(v => values.push(v.value))
    submitter.disabled = values.includes('')
  })
}
</script>
</html>