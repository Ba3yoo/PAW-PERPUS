<?php
foreach ($denda as $denda) {
        echo "<tr>",
        "<td>$denda[id_denda]</td>",
        "<td>$denda[id_pengembalian]</td>",
        "<td>$denda[total_denda]</td>",
        "<td>$denda[status_bayar]</td>",
        "</tr>";
}
echo "</tbody>";
echo "</table>";
