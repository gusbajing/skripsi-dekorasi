<?php

class Dekorasi {

	private $conn;

	public $dekorasi_id;
	public $dekorasi_nama;
	public $dekorasi_paket;
	public $dekorasi_stok;
	public $dekorasi_harga;
	public $dekorasi_deskripsi;
	public $dekorasi_detail;

	public function __construct( $db ) {
        $this->conn = $db;
    }

    //////////////////////////////////////////////////////////////

    public function view( $con = '' ) {

    	if ( $con == 'id' ) {

    		$query = "SELECT * FROM dekorasi WHERE dekorasi_id = :dekorasi_id";

    		$stmt = $this->conn->prepare( $query );

    		$this->dekorasi_id = htmlspecialchars( strip_tags( $this->dekorasi_id ) );

            $stmt->bindParam( ":dekorasi_id", $this->dekorasi_id );

    		$stmt->execute();

    	} else {

    		$query = "SELECT * FROM dekorasi";

	    	$stmt = $this->conn->prepare( $query );

	    	$stmt->execute();

    	}

    	return $stmt;
    }

    //////////////////////////////////////////////////////////////

    public function insert() {

    	$query = "INSERT INTO dekorasi ( dekorasi_nama, dekorasi_paket, dekorasi_stok, dekorasi_harga, dekorasi_deskripsi, dekorasi_detail ) VALUES ( :dekorasi_nama, :dekorasi_paket, :dekorasi_stok, :dekorasi_harga, :dekorasi_deskripsi, :dekorasi_detail )";

    	$stmt = $this->conn->prepare( $query );

		$this->dekorasi_nama = htmlspecialchars( strip_tags( $this->dekorasi_nama ) );
		$this->dekorasi_paket = htmlspecialchars( strip_tags( $this->dekorasi_paket ) );
		$this->dekorasi_stok = htmlspecialchars( strip_tags( $this->dekorasi_stok ) );
		$this->dekorasi_harga = htmlspecialchars( strip_tags( $this->dekorasi_harga ) );
		$this->dekorasi_deskripsi = htmlspecialchars( strip_tags( $this->dekorasi_deskripsi ) );
		$this->dekorasi_detail = htmlspecialchars( strip_tags( $this->dekorasi_detail ) );

        $stmt->bindParam( ":dekorasi_nama", $this->dekorasi_nama );
        $stmt->bindParam( ":dekorasi_paket", $this->dekorasi_paket );
        $stmt->bindParam( ":dekorasi_stok", $this->dekorasi_stok );
        $stmt->bindParam( ":dekorasi_harga", $this->dekorasi_harga );
        $stmt->bindParam( ":dekorasi_deskripsi", $this->dekorasi_deskripsi );
        $stmt->bindParam( ":dekorasi_detail", $this->dekorasi_detail );

        if ( $stmt->execute() ) {
        	return true;
        }

        return false;
    }

    //////////////////////////////////////////////////////////////

    public function update() {

    	$query = "UPDATE dekorasi SET 
    			  dekorasi_nama = :dekorasi_nama, 
    			  dekorasi_paket = :dekorasi_paket, 
    			  dekorasi_stok = :dekorasi_stok, 
    			  dekorasi_harga = :dekorasi_harga, 
    			  dekorasi_deskripsi = :dekorasi_deskripsi, 
    			  dekorasi_detail = :dekorasi_detail 
    			  WHERE dekorasi_id = :dekorasi_id";

    	$stmt = $this->conn->prepare( $query );

    	$this->dekorasi_id = htmlspecialchars( strip_tags( $this->dekorasi_id ) );
    	$this->dekorasi_nama = htmlspecialchars( strip_tags( $this->dekorasi_nama ) );
		$this->dekorasi_paket = htmlspecialchars( strip_tags( $this->dekorasi_paket ) );
		$this->dekorasi_stok = htmlspecialchars( strip_tags( $this->dekorasi_stok ) );
		$this->dekorasi_harga = htmlspecialchars( strip_tags( $this->dekorasi_harga ) );
		$this->dekorasi_deskripsi = htmlspecialchars( strip_tags( $this->dekorasi_deskripsi ) );
		$this->dekorasi_detail = htmlspecialchars( strip_tags( $this->dekorasi_detail ) );

		$stmt->bindParam( ":dekorasi_id", $this->dekorasi_id );
        $stmt->bindParam( ":dekorasi_nama", $this->dekorasi_nama );
        $stmt->bindParam( ":dekorasi_paket", $this->dekorasi_paket );
        $stmt->bindParam( ":dekorasi_stok", $this->dekorasi_stok );
        $stmt->bindParam( ":dekorasi_harga", $this->dekorasi_harga );
        $stmt->bindParam( ":dekorasi_deskripsi", $this->dekorasi_deskripsi );
        $stmt->bindParam( ":dekorasi_detail", $this->dekorasi_detail );

        if ( $stmt->execute() ) {
        	return true;
        }

        return false;

    }

    //////////////////////////////////////////////////////////////

    public function delete( $id ) {

    	$query = "DELETE FROM dekorasi WHERE dekorasi_id = :dekorasi_id";

    	$stmt = $this->conn->prepare( $query );

    	$this->dekorasi_id = htmlspecialchars( strip_tags( $id ) );

    	$stmt->bindParam( ":dekorasi_id", $this->dekorasi_id );

    	if ( $stmt->execute() ) {
        	return true;
        }

        return false;
    }

    //////////////////////////////////////////////////////////////
}

?>