<?php

include 'header.php';

if ( isset( $_GET['type'] ) ) {

	$type = $_GET['type'];

	if ( $type == 'detail' && isset( $_GET['id'] ) ) {

		include 'part/single-detail.php';

	} else if ( $type == 'single' ) {

		if ( isset( $_GET['page'] ) ) {

			$page = $_GET['page'];

			if ( $page == 'about' ) {

				include 'part/single-about.php';

			} else if ( $page == 'services' ) {

				include 'part/single-services.php';

			} else if ( $page == 'contact' ) {

				include 'part/single-contact.php';
				
			} else {
				header("location:index.php?error=invalid_page");
			}
		}	

	} else {
		header("location:index.php?error=invalid_page");
	}

} else {
	header("ilocation:ndex.php?error=invalid_page");
}

include 'footer.php';

?>