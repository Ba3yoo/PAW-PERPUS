<?php
foreach ($borrow as $borrow) {
        echo "<tr>",
        "<td>$borrow[id_peminjaman]</td>",
        "<td>$borrow[judul]</td>",
        "<td>$borrow[nama]</td>",
        "<td>$borrow[tgl_pinjam]</td>",
        "<td>$borrow[tgl_kembali]</td>",
        '<td><a class="btn btn-secondary" href="pengembalian.php?id='. "$borrow[id_peminjaman]" .'">Kembalikan</a></td>';
        "</tr>";
}
echo "</tbody>";
echo "</table>";
