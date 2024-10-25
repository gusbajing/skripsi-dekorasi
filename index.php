<?php include 'header.php'; ?>

<section class="hero-wrapper section-margin">
	<div class="container">
		<div class="hero-container">
			
			<div class="hero-item-1">
				<h2>Menyewakan Dekorasi Adat Bali</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, illum facere error sunt quam consectetur necessitatibus vitae veritatis provident, reprehenderit, quidem. Mollitia quod soluta, laboriosam aliquam suscipit explicabo maiores, autem.</p>
				<a href="#">Lihat Paket Dekorasi</a>
			</div>

			<div class="hero-item-2">
				<div class="hero-item-image">
					<img src="img/img.jpg" alt="">
				</div>
			</div>

		</div>
	</div>
</section>

<section class="about-wrapper section-margin">
	<div class="container">
		<div class="about-container">
			
			<div class="about-item">
				<h2>Tentang Kami</h2>
				<p>Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Tenetur ducimus nam culpa architecto, voluptas? Tempora voluptas dolorem exercitationem dolor fugit voluptatibus rem, quisquam accusamus. At ratione atque corporis beatae fugit iusto expedita, tempore sit doloribus harum non excepturi corrupti! Ratione iure suscipit pariatur eius vero iusto velit repellat, ea atque.</p>
				<a href="#">Selengkapnya</a>
			</div>

		</div>
	</div>
</section>

<section class="paket-wrapper section-margin">
	<div class="container">
		<div class="paket-container">
			
			<div class="paket-header">
				<h2>Paket Dekorasi</h2>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, tenetur</p>
			</div>

			<div class="paket-column">

				<?php for ( $i = 1; $i <= 4; $i++ ) { ?>
				
				<div class="paket-item">
					<div class="paket-image">
						<img src="img/img.jpg" alt="">
					</div>
					<div class="paket-entry">
						<h3><a href="single.php?type=detail&id=">Paket Dekorasi</a></h3>
						<p>Rp 5.000.000</p>
						<a href="#" class="paket-cta">Sewa Dekorasi</a>
					</div>
				</div>

				<?php } ?>

			</div>

		</div>
	</div>
</section>

<?php include 'footer.php'; ?>