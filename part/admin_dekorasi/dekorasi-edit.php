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
	<h2>Edit Data Dekorasi</h2>
	<p>
		<span><a href="#">Admin</a></span>
		<span>/</span>
		<span>Edit Data Dekorasi</span>
	</p>
</div>

<div class="admin-main">

	<form action="action/admin_dekorasi/dekorasi-update.php" method="post">
	
	<input type="number" name="dekorasi_id" value="<?php echo $row['dekorasi_id']; ?>" hidden>

	<div class="input-group">
		<label for="">Nama Dekorasi</label>
		<input type="text" name="dekorasi_nama" value="<?php echo $row['dekorasi_nama']; ?>" placeholder="Paket Dekorasi 1">
	</div>

	<div class="input-group">
		<label for="">Paket Dekorasi</label>
		<input type="number" name="dekorasi_paket" value="<?php echo $row['dekorasi_paket']; ?>" placeholder="1">
	</div>

	<div class="input-group">
		<label for="">Stok Dekorasi</label>
		<input type="number" name="dekorasi_stok" value="<?php echo $row['dekorasi_stok']; ?>" placeholder="1">
	</div>

	<div class="input-group">
		<label for="">Harga Dekorasi</label>
		<input type="number" name="dekorasi_harga" value="<?php echo $row['dekorasi_harga']; ?>" placeholder="10000000 ( format angka tanpa titik )">
	</div>

	<div class="input-group">
		<label for="">Deskripsi Dekorasi</label>
		<textarea name="dekorasi_deskripsi" cols="30" rows="3" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, consectetur."><?php echo $row['dekorasi_deskripsi']; ?></textarea>
	</div>

	<div class="input-group">
		<label for="">Detail Dekorasi</label>
		<textarea name="dekorasi_detail" cols="30" rows="3" placeholder="list include 1 / list include 2 / list include 3 ( pisahkan dengan garis miring / )"><?php echo $row['dekorasi_detail']; ?></textarea>
	</div>

	<div class="input-group">
		<button type="submit">Perbarui Data</button>
	</div>

	</form>

</div>