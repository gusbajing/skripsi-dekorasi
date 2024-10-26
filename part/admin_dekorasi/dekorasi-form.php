<div class="admin-header">
	<h2>Tambah Data Dekorasi</h2>
	<p>
		<span><a href="#">Admin</a></span>
		<span>/</span>
		<span>Tambah Data Dekorasi</span>
	</p>
</div>

<div class="admin-main">

	<form action="action/admin_dekorasi/dekorasi-insert.php" method="post">
	
	<div class="input-group">
		<label for="">Nama Dekorasi</label>
		<input type="text" name="dekorasi_nama" placeholder="Paket Dekorasi 1">
	</div>

	<div class="input-group">
		<label for="">Paket Dekorasi</label>
		<input type="number" name="dekorasi_paket" placeholder="1">
	</div>

	<div class="input-group">
		<label for="">Stok Dekorasi</label>
		<input type="number" name="dekorasi_stok" placeholder="1">
	</div>

	<div class="input-group">
		<label for="">Harga Dekorasi</label>
		<input type="number" name="dekorasi_harga" placeholder="10000000 ( format angka tanpa titik )">
	</div>

	<div class="input-group">
		<label for="">Deskripsi Dekorasi</label>
		<textarea name="dekorasi_deskripsi" cols="30" rows="3" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, consectetur."></textarea>
	</div>

	<div class="input-group">
		<label for="">Detail Dekorasi</label>
		<textarea name="dekorasi_detail" cols="30" rows="3" placeholder="list include 1 / list include 2 / list include 3 ( pisahkan dengan garis miring / )"></textarea>
	</div>

	<div class="input-group">
		<button type="submit">Simpan Data</button>
	</div>

	</form>

</div>