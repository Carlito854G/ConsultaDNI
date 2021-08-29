<?php
	require('reniec.php');

	if (isset($_POST['dni'])) {
		$_r = new Reniec();

		echo json_encode($_r->search($_POST['dni']));
	}
	if (isset($_REQUEST['dni'])) {
		$_r = new Reniec();

		echo json_encode($_r->search($_REQUEST['dni']));
	}
?>