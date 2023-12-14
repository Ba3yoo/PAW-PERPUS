<!-- daftar_buku.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <ul>
        <?php foreach ($daftarBuku as $buku): ?>
            <li><?= $buku ?></li>
        <?php endforeach; ?>
    </ul>
    <form action="controller.php?action=tambahBuku" method="post">
        <input type="text" name="dataBuku" placeholder="Data Buku" required>
        <button type="submit">Tambah Buku</button>
    </form>
</body>
</html>

<!-- hasil_pencarian.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian</title>
</head>
<body>
    <h1>Hasil Pencarian</h1>
    <ul>
        <?php foreach ($hasilPencarian as $hasil): ?>
            <li><?= $hasil ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
