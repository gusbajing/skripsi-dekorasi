<?php

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "dekorasi";
    public $conn;

    public function connect() {
        
        $this->conn = null;

        try {

            $this->conn = new PDO( "mysql:host=" . $this->host . ";dbname=" . $this->database, $this->username, $this->password );
            
            $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

        } catch ( PDOException $e ) {
            echo "Koneksi Gagal: " . $e->getMessage();
        }

        return $this->conn;
    }
    
}

?>