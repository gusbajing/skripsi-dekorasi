<?php

require_once 'class/Database.php';
require_once 'class/Dekorasi.php';

$database = new Database();
$db = $database->connect();

$dekorasi = new Dekorasi( $db );
$result = $dekorasi->view();

?>

<section class="paket-wrapper section-margin">
	<div class="container">
		<div class="paket-container">
			
			<div class="paket-header">
				<h2>Paket Dekorasi</h2>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, tenetur</p>
			</div>

			<div class="paket-column">

				<?php while ( $row = $result->fetch( PDO::FETCH_ASSOC ) ) { ?>
				
				<div class="paket-item">
					<div class="paket-image">
						<img src="img/img.jpg" alt="">
					</div>
					<div class="paket-entry">
						<h3>
							<a href="single.php?type=detail&id=<?php echo $row['dekorasi_id']; ?>">
								<?php echo $row['dekorasi_nama'] . ' - Paket ' . $row['dekorasi_paket']; ?>
							</a>
						</h3>
						<p>Rp <?php price_format( $row['dekorasi_harga'] ); ?></p>
						<form action="form.php" method="post">
							<input type="number" name="dekorasi_id" value="<?php echo $row['dekorasi_id']; ?>" hidden>
							<button type="submit" class="paket-cta">Sewa Dekorasi</button>
						</form>
							
					</div>
				</div>

				<?php } ?>

			</div>

		</div>
	</div>
</section>