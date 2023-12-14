<html>
    <head>
    </head>
    <body>
        <form action="index.php" method="post">
<?php
if(isset($_GET['o'])){
    include "Model/Database.php";
    $rs = $mysqli->query("SELECT * FROM buku WHERE id_buku ='$_GET[id_buku]'");
    $data = mysqli_fetch_array($rs);
    echo '<h2>Mengubah Informasi Data Buku</h2> 
    <input type="hidden" name="t" value="1"';
} else {
    echo '<h2>Menambahkan Data Buku</h2>
    <input type="hidden" name="t" value="2"';
}
?>

<p>Judul Buku</p>
<input type="text" name="nama" value="
<?php
if (isset($data['judul'])) 
echo $data['judul'];
?>"><br><br>

<p>Pengarang</p>
<input type="text" name="penulis" value="
<?php 
if (isset($data['pengarang'])) 
echo $data['pengarang'];
?>"><br><br>

<p>Penerbit</p>
<input type="text" name="terbit" value="
<?php 
if (isset($data['penerbit'])) 
echo $data['penerbit'];
?>"><br><br>

<p>ISBN</p>
<input type="number" name="nomor" value="
<?php 
if (isset($data['ISBN'])) 
echo $data['ISBN'];
?>"><br><br>

<p>tahun</p>
<input type="number" name="waktu" value="
<?php 
if (isset($data['tahun'])) 
echo $data['tahun'];
?>"><br><br>

<p>stok</p>
<input type="number" name="sisa" value="
<?php 
if (isset($data['stok'])) 
echo $data['stok'];
?>"><br><br>

<input type="submit" name="mit" value="Simpan">

</form>
</body>
</html>