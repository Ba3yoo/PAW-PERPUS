<?php
require_once "Database.php";

class m_pengembalian {

    public static function getPengembalian() {
        $db = new Database();
        $mysqli = $db->getConnection();
        $result = $mysqli->query("SELECT pengembalian.id_pengembalian, anggota.nama, buku.judul, pengembalian.tgl_pinjam, pengembalian.tgl_kembali, pengembalian.tgl_terima
                                FROM pengembalian
                                JOIN anggota ON anggota.id_anggota = pengembalian.id_anggota
                                JOIN buku ON buku.id_buku = pengembalian.id_buku;");
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;


    }

    public function addPengembalian($id_peminjaman) {
        $db = new Database();
        $mysqli = $db->getConnection();
        $mysqli->query("INSERT INTO pengembalian (pengembalian.id_anggota, pengembalian.id_buku, pengembalian.tgl_pinjam, pengembalian.tgl_kembali) 
                        SELECT peminjaman.id_anggota, peminjaman.id_buku, peminjaman.tgl_pinjam, peminjaman.tgl_kembali 
                        FROM peminjaman 
                        WHERE peminjaman.id_peminjaman = '$id_peminjaman'");
        $query = "SELECT id_buku FROM pengembalian ORDER BY id_pengembalian DESC LIMIT 1;";
        $rs = $mysqli->query($query);
        
        if ($rs) {
            if ($rs->num_rows > 0) {
                $row = $rs->fetch_assoc();
                $id_buku = $row["id_buku"];
                
                // Lakukan update jika id_buku tidak kosong
                if ($id_buku !== null) {
                    $updateQuery = "UPDATE buku SET stok = stok + 1 WHERE id_buku = '$id_buku';";
                    $result = $mysqli->query($updateQuery);
        
                    if (!$result) {
                        echo "Error in query: $updateQuery. Error message: " . $mysqli->error;
                    }
                } else {
                    echo "Tidak ada data id_buku yang ditemukan dari tabel pengembalian.";
                }
            } else {
                echo "Tidak ada data di tabel pengembalian.";
            }
        } else {
            echo "Error in query: $query. Error message: " . $mysqli->error;
        }
        
        $this->deletePeminjaman($id_peminjaman);
        $query = "SELECT id_pengembalian
        FROM pengembalian
        ORDER BY id_pengembalian DESC
        LIMIT 1;";
        $rs = $mysqli->query($query);
        if ($rs) {
            $row = $rs->fetch_assoc();
            $id_pengembalian = $row["id_pengembalian"];
        } else {
            echo "Error in query: $query. Error message: " . $mysqli->error;
        }
        $this->createFee($id_pengembalian);
    }

    function deletePeminjaman($id_peminjaman) {
        $db = new Database();
        $mysqli = $db->getConnection();
        $mysqli->query("DELETE FROM peminjaman WHERE id_peminjaman = '$id_peminjaman'");
    }

    function createFee($id_pengembalian) {
        $db = new Database();
        $mysqli = $db->getConnection();
    
        $query = "SELECT DATEDIFF(tgl_terima, tgl_kembali) AS tanggal 
                  FROM pengembalian 
                  WHERE id_pengembalian = ?";
    
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("i", $id_pengembalian);
        $stmt->execute();
        $result = $stmt->get_result();
    
        while ($row = $result->fetch_assoc()) {
            $date = $row["tanggal"];
            if ($date > 0) {
                $total_denda = $date * 500;
                $mysqli->query("INSERT INTO denda (id_pengembalian, total_denda, status_bayar)
                                VALUES ('$id_pengembalian', '$total_denda', 0)");
            }
        }
    
        $stmt->close();
    }
    
}