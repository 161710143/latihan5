<?php

	class wisata {
		public $tujuan;
		public $lama_berwisata;
		public $acara;


		function __construct ($tujuan, $lama_berwisata, $acara) {
			$this->tujuan = $tujuan;
			$this->lama_berwisata= $lama_berwisata;
			$this->acara = $acara;
		}

		function get_tujuan(){
			return $this->tujuan;
		}

		function get_lama_berwisata(){
			return $this->lama_berwisata;
		}

		function get_acara(){
			return $this->acara;
		}
	}



?>