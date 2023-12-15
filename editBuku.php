<!-- ... Bagian lain dari kode Anda ... -->
<?php
include_once 'Controller/c_dataBuku.php';
$controller = new c_dataBuku();

if(isset($_GET['edit'])){
?>

<!-- Modal -->
<form class="container" name="addition" method="post" action="">
            <div class="modal fade" id="editBuku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Buku</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Anggota</label>
                        <input type="text" name="nama" value="<?php echo $_GET['nama']; ?>" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Status Anggota</label><br>
                        <select id="status" name="status">
                        <option value="0" <?php if($_GET['status'] == 0) echo 'selected'; ?>>Tidak Aktif</option>
                        <option value="1" <?php if($_GET['status'] == 1) echo 'selected'; ?>>Aktif</option>
                    </select>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" name="edit" class="btn btn-primary">Simpan Buku</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
<!-- Tutup Modal -->
<?php 
} ?>