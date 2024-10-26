<?php

require_once '../../class/Database.php';
require_once '../../class/User.php';

$database = new Database();
$db = $database->connect();

$user = new User( $db );

$user->sewa_dekorasi_id = $_POST['dekorasi_id'];
$user->sewa_nama = $_POST['sewa_nama'];
$user->sewa_telepon = $_POST['sewa_telepon'];
$user->sewa_alamat = $_POST['sewa_alamat'];
$user->sewa_tanggal = $_POST['sewa_tanggal'];
$user->sewa_lama = $_POST['sewa_lama'];

if ( $user->insert() ) {
	header("location:../../index.php?insert=true");
} else {
	header("location:../../index.php?insert=false");
}

?>