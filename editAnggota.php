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
  <link rel="icon" href="/assets/images/icon.png" type="image/x-icon">
  <title>Ubah Data Anggota</title>
</head>
<body>
  <?php
    include "layouts/navbar.php";
    if(isset($_GET['edit'])){
  ?>
  <div class="container">
    <div class="row">
      <h1>Edit Data Anggota</h1>
    </div>
  </div>

  <br>
      <form class="container" name="addition" method="post" action="">
          <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
          <label>Nama Anggota</label><br>
          <input type="text" name="nama" value="<?php echo $_GET['nama']; ?>" required>
          <br><br>
          <label>Status Anggota</label><br>
          <select id="status" name="status">
            <option value="0" <?php if($_GET['status'] == 0) echo 'selected'; ?>>Tidak Aktif</option>
            <option value="1" <?php if($_GET['status'] == 1) echo 'selected'; ?>>Aktif</option>
          </select>
          <br><br>
          <button type="submit" name="edit" class="btn btn-primary">Simpan</button>      
      </form>          
  <?php } ?>
</body>
</html>