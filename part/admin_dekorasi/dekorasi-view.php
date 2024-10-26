<?php

if ( isset( $_GET['id'] ) ) {
	$id = $_GET['id'];
} else {
	header("location:admin-dekorasi.php?error=invalid_id");
}

require_once 'class/Database.php';
require_once 'class/Dekorasi.php';

$database = new Database();
$db = $database->connect();

$dekorasi = new Dekorasi( $db );

$dekorasi->dekorasi_id = $id;
$result = $dekorasi->view( 'id' );
$row = $result->fetch( PDO::FETCH_ASSOC );

?>

<div class="admin-header">
	<h2>Detail Data Dekorasi</h2>
	<p>
		<span><a href="#">Admin</a></span>
		<span>/</span>
		<span>Detail Data Dekorasi</span>
	</p>
</div>

<div class="admin-main">
	
	<div class="input-group">
		<label for="">Nama Dekorasi</label>
		<input type="text" value="<?php echo $row['dekorasi_nama']; ?>" disabled>
	</div>

	<div class="input-group">
		<label for="">Paket Dekorasi</label>
		<input type="text" value="Paket <?php echo $row['dekorasi_paket']; ?>" disabled>
	</div>

	<div class="input-group">
		<label for="">Stok Dekorasi</label>
		<input type="number" value="<?php echo $row['dekorasi_stok']; ?>" disabled>
	</div>

	<div class="input-group">
		<label for="">Harga Dekorasi</label>
		<input type="text" value="Rp <?php price_format( $row['dekorasi_harga'] ); ?>" disabled>
	</div>

	<div class="input-group">
		<label for="">Deskripsi Dekorasi</label>
		<textarea name="" cols="30" rows="3" disabled><?php echo $row['dekorasi_deskripsi']; ?></textarea>
	</div>

	<div class="input-group">
		<label for="">Detail Dekorasi</label>
		<textarea name="" cols="30" rows="3" disabled><?php echo $row['dekorasi_detail']; ?></textarea>
	</div>

	<div class="input-group">
		<a href="admin-dekorasi.php" class="cta-link">< Kembali</a>
	</div>

</div>