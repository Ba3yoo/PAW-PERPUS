<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
        .nav-item {
            margin-right: 7.7rem;
        }

        * {
            font-family: Garamond, serif;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg" style="background-color:#F27851;">
        <a href="index.php"><img src="assets/images/icon.png" alt="icon-perpus" style="margin-top: 0.2rem; margin-left:1.2rem; width:100px;"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="index.php" id="home-nav" style="margin-left:2rem;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="anggota.php" id="anggota-nav">Anggota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dataBuku.php" id="buku-nav">Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="peminjaman.php" id="peminjaman-nav">Peminjaman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pengembalian.php" id="pengembalian-nav">Pengembalian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="denda.php" id="denda-nav">Denda</a>
                </li>
                <a href="profile.php"><img src="assets/images/account-icon.png" alt="account-icon" style="width: 2rem; height: 2rem; margin-top: 0.2rem;"></a>
            </ul>
        </div>
    </nav>
</body>

</html>