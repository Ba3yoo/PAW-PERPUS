<?php
foreach ($available as $option) {
    echo '<option value="' . $option['id_buku'] . '">' . $option['judul'] . '</option>';
}

echo '</select>';