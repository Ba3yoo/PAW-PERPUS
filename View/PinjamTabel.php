<?php
foreach ($borrow as $borrow) {
        echo "<tr>",
        "<td>$borrow[id_peminjaman]</td>",
        "<td>$borrow[judul]</td>",
        "<td>$borrow[nama]</td>",
        "<td>$borrow[tgl_pinjam]</td>",
        "<td>$borrow[tgl_kembali]</td>",
        "<td><button>Sudah Kembali</button></td>";
        "</tr>";
}
echo "</tbody>";
echo "</table>";
