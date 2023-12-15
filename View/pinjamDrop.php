<?php
foreach ($available as $option) {
    echo '<option value="' . $option['id_buku'] . '" style="max-width: 250px;">' . $option['judul'] . '</option>';
}

echo '</select>';