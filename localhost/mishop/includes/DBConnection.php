<?php

	date_default_timezone_set('Asia/Ho_Chi_Minh');

	$conn = mysqli_connect("localhost", "root", "", "nguyenha_fstore");

	mysqli_set_charset($conn, "UTF8");

	$dir = "http://localhost/";

	if(!$conn) {
		echo "Error connect to database";
	}

	

?>
