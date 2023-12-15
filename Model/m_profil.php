<?php
require_once 'Database.php';

class m_profile {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function updateProfile($userId, $fullName, $email) {
        $connection = $this->db->getConnection();
        $stmt = $connection->prepare("UPDATE akun SET name=?, email=? WHERE id_akun=?");
        $stmt->bind_param("ssi", $fullName, $email, $userId); 

        if ($stmt->execute()) {
            return true;
        } else {
            echo "Error: " . $stmt->error;
            return false;
        }
    }
}
?>