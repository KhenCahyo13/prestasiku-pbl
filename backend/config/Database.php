<?php
$host = "KHOIRUL"; 
$db_name = "prestasiku_db"; 
$username = "";
$password = ""; 

try {
    $conn = new PDO("sqlsrv:server=$host;Database=$db_name", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Koneksi berhasil!";
} catch (PDOException $exception) {
    echo "Koneksi Gagal: " . $exception->getMessage();
}

// class Database {
//   private $host = "KHOIRUL";
//   private $db_name = "prestasiku_db";
//   private $username = "";
//   private $password = "";
//   private $conn;

//   public function getConnection() {
//     $this->conn = null;

//     try {
//       $this->conn = new PDO("sqlsrv:server=$this->host;Database=$this->db_name", $this->username, $this->password);
//       $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     } catch (PDOException $exception) {
//       echo "Koneksi Gagal: " . $exception->getMessage();
//     }

//     return $this->conn;
//   }
// }