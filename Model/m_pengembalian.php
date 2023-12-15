<?php
require_once "Database.php";

class m_pengembalian {

    public static function getPengembalian($id) {
        $db = new Database();
        $mysqli = $db->getConnection();
        $result = $mysqli->query("SELECT");
        if ($result) {
            return $result->fetch_assoc();
        } else {
            return false;
        }


    }

    public function addPengembalian($id_peminjaman) {
        $db = new Database();
        $mysqli = $db->getConnection();
        $mysqli->query("INSERT INTO pengembalian (pengembalian.id_anggota, pengembalian.id_buku, pengembalian.tgl_pinjam, pengembalian.tgl_kembali) 
                        SELECT peminjaman.id_anggota, peminjaman.id_buku, peminjaman.tgl_pinjam, peminjaman.tgl_kembali 
                        FROM peminjaman 
                        WHERE peminjaman.id_peminjaman = $id_peminjaman");
        $mysqli->query("UPDATE buku
                        SET stok = stok + 1
                        WHERE id_buku = nomor_buku;");
        $this->deletePeminjaman($id_peminjaman);
        $id_pengembalian = $mysqli->query("SELECT id_pengembalian
                                            FROM pengembalian
                                            ORDER BY id_pengembalian DESC
                                            LIMIT 1;");
        $this->createFee($id_pengembalian);
    }

    function deletePeminjaman($id_peminjaman) {
        $db = new Database();
        $mysqli = $db->getConnection();
        $mysqli->query("DELETE * FROM peminjaman WHERE id_peminjaman = $id_peminjaman");
    }

    function createFee($id_pengembalian) {
        $db = new Database();
        $mysqli = $db->getConnection();
    
        $query = "SELECT DATEDIFF(tgl_terima, tgl_kembali) AS tanggal 
                  FROM pengembalian 
                  WHERE id_pengembalian = ?";
    
        // Gunakan prepared statement untuk melindungi dari SQL injection
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("i", $id_pengembalian);
        $stmt->execute();
        $result = $stmt->get_result();
    
        while ($row = $result->fetch_assoc()) {
            $date = $row["tanggal"];
            if ($date > 0) {
                // Insert data denda dengan perhitungan tanggal * 500
                $total_denda = $date * 500;
                $mysqli->query("INSERT INTO denda (id_pengembalian, total_denda, status_bayar)
                                VALUES ($id_pengembalian, $total_denda, 0)");
            }
        }
    
        $stmt->close();
    }
    
}