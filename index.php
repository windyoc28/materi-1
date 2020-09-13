<?php

	class Mobil {
		public $merk, $tipe, $mesin, $max_speed;

		public function cetakTipe(){
			return $this->tipe;
		}

		function kecepatanMaksimal(){
			return "kecepatan maksimal dari mobil ini adalah ".$this->max_speed;
		}
	}

	$bmw = new mobil;
	$bmw->merk = "bmw";
	$bmw->tipe = "3201";
	$bmw->mesin = "200cc";
	$bmw->max_speed = "200km/h";

echo "Tipe".$bmw->kecepatanMaksimal();

