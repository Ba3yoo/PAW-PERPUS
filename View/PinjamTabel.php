<?php
foreach ($borrow as $borrow) {
        echo "<tr>",
        "<td>$borrow[id_peminjaman]</td>",
        "<td>$borrow[id_buku]</td>",
        "<td>$borrow[id_anggota]</td>",
        "<td>$borrow[tgl_pinjam]</td>",
        "<td>$borrow[tgl_kembali]</td>",
        "</tr>";
}
echo "</tbody>";
echo "</table>";
