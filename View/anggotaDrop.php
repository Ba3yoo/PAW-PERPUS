<?php
foreach ($available as $option) {
    echo '<option value="' . $option['id_anggota'] . '">' . $option['nama'] . '</option>';
}

echo '</select>';