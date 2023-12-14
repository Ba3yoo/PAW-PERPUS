<?php
$bukuModel = new m_dataBuku();
$buku = $bukuModel->tampilBuku();

include_once "View/c_dataBuku.php";
foreach ($buku as $row) {
    echo "<tr>",
        "<td>{$row['id_buku']}</td>",
        "<td>{$row['judul']}</td>",
        "<td>{$row['pengarang']}</td>",
        "<td>{$row['penerbit']}</td>",
        "<td>{$row['ISBN']}</td>",
        "<td>{$row['tahun']}</td>",
        "<td>{$row['stok']}</td>",
        "</tr>";
}

echo "</tbody>";
echo "</table>";