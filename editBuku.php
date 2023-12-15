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
                        <input type="hidden" name="id_buku" value="<?php echo $_GET['edit']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Judul Buku</label>
                        <input type="text" name="judul" value="<?php echo $_GET['judul']; ?>" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Nama Pengarang</label>
                        <input type="text" name="pengarang" value="<?php echo $_GET['pengarang']; ?>" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" name="penerbit" value="<?php echo $_GET['penerbit']; ?>" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>ISBN</label>
                        <input type="text" name="isbn" value="<?php echo $_GET['isbn']; ?>" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Tahun</label>
                        <input type="text" name="tahun" value="<?php echo $_GET['tahun']; ?>" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>stok</label>
                        <input type="text" name="stok" value="<?php echo $_GET['stok']; ?>" required>
                    </div>
                    <br>
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