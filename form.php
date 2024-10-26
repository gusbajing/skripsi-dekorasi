<?php

include 'header.php';

if ( ! $_POST['dekorasi_id'] == '' ) {
	$id = $_POST['dekorasi_id'];
} else {
	header("location:index.php?error=invalid_id");
}

require_once 'class/Database.php';
require_once 'class/Dekorasi.php';
require_once 'class/User.php';

$database = new Database();
$db = $database->connect();

$dekorasi = new Dekorasi( $db );
$user = new User( $db );

$dekorasi->dekorasi_id = $id;
$result = $dekorasi->view( 'id' );
$row = $result->fetch( PDO::FETCH_ASSOC );

if ( isset( $_COOKIE['user_token'] ) ) {

	$user_token = $_COOKIE['user_token'];

	$user->user_token = $user_token;
	$result_user = $user->view( 'token' );
	$row_user = $result_user->fetch( PDO::FETCH_ASSOC );

?>

<div class="single-wrapper">
	<div class="container">
		<div class="single-container">
			
			<h2>Formulir Penyewaan Dekorasi</h2>

			<form action="action/user_form/user-form.php" method="post">

			<input type="text" name="dekorasi_id" value="<?php echo $id; ?>" hidden>

			<div class="input-group">
				<label for="">Nama Lengkap</label>
				<input type="text" name="sewa_nama" value="<?php echo $row_user['user_nama']; ?>" placeholder="Nama Lengkap Anda">
			</div>

			<div class="input-group">
				<label for="">No Telepon</label>
				<input type="text" name="sewa_telepon" placeholder="6285123456789 (Tanpa 0 di depan)" value="<?php echo $row_user['user_telepon']; ?>">
			</div>

			<div class="input-group">
				<label for="">Alamat Lengkap</label>
				<input type="text" name="sewa_alamat" value="<?php echo $row_user['user_alamat']; ?>" placeholder="Alamat Lengkap Anda">
			</div>

			<div class="input-group">
				<label for="">Tanggal Acara</label>
				<input type="date" name="sewa_tanggal" placeholder="Tanggal Mulai Acara">
			</div>

			<div class="input-group">
				<label for="">Lama Acara</label>
				<input type="number" name="sewa_lama" max="30" placeholder="Lama Waktu Acara (Hari)">
			</div>

			<div class="input-group">
				<label for="">Paket Dekorasi</label>
				<input type="text" value="<?php echo $row['dekorasi_nama'] . ' - Paket' . $row['dekorasi_paket']; ?> - Rp <?php price_format( $row['dekorasi_harga'] ); ?>" disabled>
			</div>

			<h3>Total: Rp <?php price_format( $row['dekorasi_harga'] ); ?></h3>

			<div class="input-group">
				<button type="submit">Proses Pemesanan</button>
			</div>

			</form>

			<p><b>Penting:</b> Setelah Anda mengirimkan formulir ini, dalam waktu 1x24 jam Admin akan menghubungi Anda untuk proses selanjutnya. Jadi pastikan no telepon yang di inputkan sudah benar dan terdaftar pada aplikasi Whatsapp.</p>

		</div>
	</div>
</div>

<?php

} else {

?>

<div class="single-wrapper">
	<div class="container">
		<div class="single-container">
			
			<h2>Formulir Penyewaan Dekorasi</h2>

			<form action="action/user_form/user-form.php" method="post">

			<input type="text" name="dekorasi_id" value="<?php echo $id; ?>" hidden>

			<div class="input-group">
				<label for="">Nama Lengkap</label>
				<input type="text" name="sewa_nama" placeholder="Nama Lengkap Anda">
			</div>

			<div class="input-group">
				<label for="">No Telepon</label>
				<input type="text" name="sewa_telepon" placeholder="6285123456789 (Tanpa 0 di depan)" value="62">
			</div>

			<div class="input-group">
				<label for="">Alamat Lengkap</label>
				<input type="text" name="sewa_alamat" placeholder="Alamat Lengkap Anda">
			</div>

			<div class="input-group">
				<label for="">Tanggal Acara</label>
				<input type="date" name="sewa_tanggal" placeholder="Tanggal Mulai Acara">
			</div>

			<div class="input-group">
				<label for="">Lama Acara</label>
				<input type="number" name="sewa_lama" max="30" placeholder="Lama Waktu Acara (Hari)">
			</div>

			<div class="input-group">
				<label for="">Paket Dekorasi</label>
				<input type="text" value="<?php echo $row['dekorasi_nama'] . ' - Paket' . $row['dekorasi_paket']; ?> - Rp <?php price_format( $row['dekorasi_harga'] ); ?>" disabled>
			</div>

			<h3>Total: Rp <?php price_format( $row['dekorasi_harga'] ); ?></h3>

			<div class="input-group">
				<button type="submit">Proses Pemesanan</button>
			</div>

			</form>

			<p><b>Penting:</b> Setelah Anda mengirimkan formulir ini, dalam waktu 1x24 jam Admin akan menghubungi Anda untuk proses selanjutnya. Jadi pastikan no telepon yang di inputkan sudah benar dan terdaftar pada aplikasi Whatsapp.</p>

		</div>
	</div>
</div>

<?php } ?>

<?php include 'footer.php'; ?>