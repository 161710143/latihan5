<?php
echo "<center>";

	require_once 'wisata.php';

	$identitas1 = new wisata("RAJA AMPAT", "satu bulan", "Bulan madu");
		echo "Tujuan = ".$identitas1->get_tujuan().'<br>';
		echo "lama = ".$identitas1->get_lama_berwisata().'<br>';
		echo "acara = ".$identitas1->get_acara().'<br>';
		echo "=============================================".'<br>';

	

?>