<?php include 'header.php'; ?>

<div class="admin-wrapper">
	<div class="container">
		<div class="admin-container">
			
			<div class="admin-column-1-1">

				<?php admin_menus(); ?>

			</div>

			<div class="admin-column-1-2">

				<?php

				if ( isset( $_GET['page'] ) ) {

					$page = $_GET['page'];

					if ( $page == 'form' ) {
						include 'part/admin_dekorasi/dekorasi-form.php';
					} else if ( $page == 'view' ) {
						include 'part/admin_dekorasi/dekorasi-view.php';
					} else if ( $page == 'edit' ) {
						include 'part/admin_dekorasi/dekorasi-edit.php';
					} else {
						include 'part/admin_dekorasi/dekorasi-data.php';
					}
				} else {
					include 'part/admin_dekorasi/dekorasi-data.php';
				}

				?>

			</div>

		</div>
	</div>
</div>

<?php include 'footer.php'; ?>