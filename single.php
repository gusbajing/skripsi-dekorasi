<?php

include 'header.php';

if ( isset( $_GET['type'] ) ) {

	$type = $_GET['type'];

	if ( $type == 'detail' ) {
		include 'part/single-detail.php';
	} else if ( $type == 'single' ) {
		include 'part/single-about.php';
	} else {
		header("index.php?error=invalid_page");
	}

} else {
	header("index.php?error=invalid_page");
}

include 'footer.php';

?>