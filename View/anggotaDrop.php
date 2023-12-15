<?php
foreach ($available as $option) {
    echo '<option value="' . $option['id_anggota'] . '" style="max-width: 250px;">' . $option['nama'] . '</option>';
}

echo '</select>';