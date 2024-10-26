<?php

class User {

	private $conn;

	public $sewa_dekorasi_id;
	public $sewa_nama;
	public $sewa_telepon;
	public $sewa_alamat;
	public $user_token;
	public $sewa_tanggal;
	public $sewa_lama;

	public function __construct( $db ) {
        $this->conn = $db;
    }

    //////////////////////////////////////////////////////////////

    public function view( $con = '' ) {

    	if ( $con == 'token' ) {

    		$query = "SELECT * FROM user WHERE user_token = :user_token";

    		$stmt = $this->conn->prepare( $query );

	    	$this->user_token = htmlspecialchars( strip_tags( $this->user_token ) );

	    	$stmt->bindParam( ':user_token', $this->user_token );

	    	$stmt->execute();

    	} else {

    		$query = "SELECT * FROM user";

    		$stmt = $this->conn->prepare( $query );

	    	$stmt->execute();

    	}

    	return $stmt;
    }

    //////////////////////////////////////////////////////////////

    public function invoice( $length ) {

    	$char = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    	$char_length = strlen( $char );
    	$random_string = '';

    	for ( $i = 0; $i < $length; $i++ ) {

    		$random_string .= $char[random_int( 0, $char_length - 1 )];
    	}

    	$curr_date = date('dmY');

    	$invoice = 'JRD/' . $curr_date . '/' . $random_string;

    	return $invoice;
    }

    //////////////////////////////////////////////////////////////

    public function insert() {

    	if ( isset( $_COOKIE['user_token'] ) ) {

            $user_token = $_COOKIE['user_token'];

        } else {

        	$user_token = $this->invoice( 8 );

	    	$q_user = "INSERT INTO user ( user_nama, user_alamat, user_telepon, user_token ) VALUES ( :user_nama, :user_alamat, :user_telepon, :user_token )";

	    	$stmt_user = $this->conn->prepare( $q_user );

	    	$this->sewa_nama = htmlspecialchars( strip_tags( $this->sewa_nama ) );
	    	$this->sewa_telepon = htmlspecialchars( strip_tags( $this->sewa_telepon ) );
	    	$this->sewa_alamat = htmlspecialchars( strip_tags( $this->sewa_alamat ) );
	    	$this->user_token = $user_token;

	    	$stmt_user->bindParam( ':user_nama', $this->sewa_nama );
	    	$stmt_user->bindParam( ':user_telepon', $this->sewa_telepon );
	    	$stmt_user->bindParam( ':user_alamat', $this->sewa_alamat );
	    	$stmt_user->bindParam( ':user_token', $this->user_token );

	    	$stmt_user->execute();
	    }

	    $q_sewa = "INSERT INTO sewa ( sewa_dekorasi_id, sewa_user_token, sewa_tanggal, sewa_lama, sewa_status ) VALUES ( :sewa_dekorasi_id, :sewa_user_token, :sewa_tanggal, :sewa_lama, 'pending' )";

	    $stmt_sewa = $this->conn->prepare( $q_sewa );

	    $this->sewa_dekorasi_id = htmlspecialchars( strip_tags( $this->sewa_dekorasi_id ) );
	    $this->sewa_user_token = $user_token;
	    $this->sewa_tanggal = htmlspecialchars( strip_tags( $this->sewa_tanggal ) );
	    $this->sewa_lama = htmlspecialchars( strip_tags( $this->sewa_lama ) );

	    $stmt_sewa->bindParam( ':sewa_dekorasi_id', $this->sewa_dekorasi_id );
	    $stmt_sewa->bindParam( ':sewa_user_token', $this->sewa_user_token );
	    $stmt_sewa->bindParam( ':sewa_tanggal', $this->sewa_tanggal );
	    $stmt_sewa->bindParam( ':sewa_lama', $this->sewa_lama );

	    if ( $stmt_sewa->execute() ) {

	    	setcookie( 'user_token', $user_token, strtotime( '+1 year' ), "/" );

	    	return true;
	    }

	    return false;

    }

    //////////////////////////////////////////////////////////////

    //////////////////////////////////////////////////////////////

    //////////////////////////////////////////////////////////////
}

?>