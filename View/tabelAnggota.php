<?php
$model = new m_anggota();
$anggota = $model->showAnggota();

include_once "View/tabelAnggota.php";
foreach ($anggota as $row) {
    echo "<tr>",
        "<td>{$row['id_anggota']}</td>",
        "<td>{$row['nama']}</td>",
        "<td>{$row['tgl_daftar']}</td>";
        if($row['status_aktif'] == 0){
            echo "<td>Tidak Aktif</td>";
        } else if($row['status_aktif'] == 1){
            echo "<td>Aktif</td>";
        }
        echo "<td><a href='editAnggota.php?edit={$row['id_anggota']}?nama={$row['nama']}?status={$row['status_aktif']}' class='btn btn-primary'>Edit</a></td>";
        echo "<td><a href='controller/anggotaController.php?delete={$row['id_anggota']}' class='btn btn-secondary'>Delete</a></td>";
        echo "</tr>";
}

echo "</tbody>";
echo "</table>";