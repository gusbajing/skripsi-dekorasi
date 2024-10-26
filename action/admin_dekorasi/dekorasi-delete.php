<?php

if ( isset( $_GET['id'] ) ) {
	$id = $_GET['id'];
} else {
	header("location:../../admin-dekorasi.php?delete=false");
}

require_once '../../class/Database.php';
require_once '../../class/Dekorasi.php';

$database = new Database();
$db = $database->connect();

$dekorasi = new Dekorasi( $db );

if ( $dekorasi->delete( $id ) ) {
	header("location:../../admin-dekorasi.php?delete=true");
} else {
	header("location:../../admin-dekorasi.php?delete=false");
}

?>