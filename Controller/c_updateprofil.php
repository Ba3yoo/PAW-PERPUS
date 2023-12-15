<?php
require_once '../Model/m_profil.php';

$model = new m_profile();

if (isset($_POST['update_profile'])) {
    $userId = $_POST['user_id']; 
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];

    $updated = $model->updateProfile($userId, $fullName, $email);

    if ($updated) {
        echo "<script>alert('Profil berhasil diperbarui');</script>";
        echo "<script>window.location.href='../peminjaman.php';</script>";
        exit();
    } else {
        echo "<script>alert('Gagal memperbarui profil');</script>";
    }
}
?>
