<?php

class Dekorasi {

	private $conn;

	public $dekorasi_id;

	public function __construct( $db ) {
        $this->conn = $db;
    }

    //////////////////////////////////////////////////////////////

    public function view( $condition = '' ) {

    	if ( $condition == 'id' ) {

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

    }

    //////////////////////////////////////////////////////////////

    public function update() {

    }

    //////////////////////////////////////////////////////////////

    public function delete() {

    }

    //////////////////////////////////////////////////////////////
}

?>