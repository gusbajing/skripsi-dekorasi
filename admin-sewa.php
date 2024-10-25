<?php include 'header.php'; ?>

<div class="admin-wrapper">
	<div class="container">
		<div class="admin-container">
			
			<div class="admin-column-1-1">

				<div class="admin-menus">
					<h2>Dashboard</h2>
					<ul>
						<li><a href="#">Data Penyewaan</a></li>
						<li><a href="#">Data Dekorasi</a></li>
						<li><a href="#">Data Pelanggan</a></li>
						<li><a href="#">Logout</a></li>
					</ul>
				</div>

			</div>

			<div class="admin-column-1-2">

				<div class="admin-header">
					<h2>Data Penyewaan</h2>
					<p>
						<span><a href="#">Admin</a></span>
						<span>/</span>
						<span>Data Penyewaan</span>
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
								<th>Aksi</th>
							</tr>

							<?php $no = 1; for ( $i = 1; $i <= 5; $i++ ) { ?>

							<tr>
								<td><?php echo $no++; ?></td>
								<td>Dekorasi Adat Bali</td>
								<td>Paket 1</td>
								<td>1</td>
								<td>
									<a href="#">Lihat</a>
									<span>/</span>
									<a href="#">Edit</a>
									<span>/</span>
									<a href="#">Hapus</a>
								</td>
							</tr>

							<?php } ?>
				
						</table>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>

<?php include 'footer.php'; ?>