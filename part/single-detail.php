<?php

if ( isset( $_GET['id'] ) ) {
	$id = $_GET['id'];
} else {
	header("location:index.php?error=invalid_id");
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

<section class="single-wrapper">
	<div class="container">
		<div class="single-container">
			
			<div class="single-image">
				<img src="img/img.jpg" alt="">
			</div>

			<div class="single-metadata">
				<h2><?php echo $row['dekorasi_nama'] ?> - Paket <?php echo $row['dekorasi_paket']; ?></h2>
				<h3>Rp <?php price_format( $row['dekorasi_harga'] ); ?></h3>
			</div>

			<div class="single-entry">

				<p><?php echo $row['dekorasi_deskripsi']; ?></p>
				
				<ul class="custom-list">
					<?php

					$list = explode( '/', $row['dekorasi_detail'] );

					foreach ( $list as $item ) {
						echo '<li><span>' . icons( 'check' ) . '</span> ' . $item . '</li>';
					}

					?>
				</ul>
			</div>

		</div>
	</div>
</section>

<section class="fixed-cta-wrapper">
	<div class="container">
		<div class="fixed-cta-container">
			
			<a href="#">Pesan Sekarang</a>

		</div>
	</div>
</section>