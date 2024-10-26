<?php

require_once 'class/Database.php';
require_once 'class/Dekorasi.php';

$database = new Database();
$db = $database->connect();

$dekorasi = new Dekorasi( $db );
$result = $dekorasi->view();

?>

<div class="admin-header">
	<h2>Data Dekorasi</h2>
	<p>
		<span><a href="#">Admin</a></span>
		<span>/</span>
		<span>Data Dekorasi</span>
	</p>
</div>

<div class="admin-main">
	<div class="table-group">
		<table>
			<tr>
				<th>No</th>
				<th>Nama Dekorasi</th>
				<th>Paket Dekorasi</th>
				<th>Stok</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>

			<?php $no = 1; while ( $row = $result->fetch( PDO::FETCH_ASSOC ) ) { ?>

			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['dekorasi_nama']; ?></td>
				<td>Paket <?php echo $row['dekorasi_paket']; ?></td>
				<td><?php echo $row['dekorasi_stok']; ?></td>
				<td>Rp <?php price_format( $row['dekorasi_harga'] ); ?></td>
				<td>
					<a href="admin-dekorasi.php?page=view&id=<?php echo $row['dekorasi_id']; ?>">Lihat</a>
					<span>/</span>
					<a href="#">Edit</a>
					<span>/</span>
					<a href="#">Hapus</a>
				</td>
			</tr>

			<?php } ?>

		</table>
		<a href="admin-dekorasi.php?page=form" class="cta-bottom-table">Tambah Data +</a>
	</div>
</div>