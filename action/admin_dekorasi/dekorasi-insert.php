<?php

require_once '../../class/Database.php';
require_once '../../class/Dekorasi.php';

$database = new Database();
$db = $database->connect();

$dekorasi = new Dekorasi( $db );

$dekorasi->dekorasi_nama = $_POST['dekorasi_nama'];
$dekorasi->dekorasi_paket = $_POST['dekorasi_paket'];
$dekorasi->dekorasi_stok = $_POST['dekorasi_stok'];
$dekorasi->dekorasi_harga = $_POST['dekorasi_harga'];
$dekorasi->dekorasi_deskripsi = $_POST['dekorasi_deskripsi'];
$dekorasi->dekorasi_detail = $_POST['dekorasi_detail'];

if ( $dekorasi->insert() ) {
	header("location:../../admin-dekorasi.php?insert=true");
} else {
	header("location:../../admin-dekorasi.php?insert=false");
}

?>