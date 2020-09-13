<?php

class kucing {
	public $jumlah_kaki, $bisa_terbang, $bersuara;
 	
 	function jumlahkaki(){
	return "jumlah kakinya ".$this->jumlah_kaki;
} function suara(){
	return "suaranya ".$this->bersuara;
}
}
$momo = new kucing;
$momo->jumlah_kaki = "4";
$momo->bisa_terbang = "tidak bisa terbang";
$momo->bersuara = "meooong";

echo "momo adalah kucing <br>";
echo $momo->jumlahkaki();
echo "<br>";
echo $momo->suara();

echo "<hr>";

class anjing {
	public $jumlah_kaki, $bisa_terbang, $bersuara;
 	
 	function jumlahkaki(){
	return "jumlah kakinya ".$this->jumlah_kaki;
} function suara(){
	return "suaranya ".$this->bersuara;
}
}
$doggy = new anjing;
$doggy->jumlah_kaki = "4";
$doggy->bisa_terbang = "tidak bisa terbang";
$doggy->bersuara = "guk guk";

echo "doggy adalah anjing <br>";
echo $doggy->jumlahkaki();
echo "<br>";
echo $doggy->suara();

echo "<hr>";

class elang {
	public $jumlah_kaki, $bisa_terbang, $bersuara;
 	
 	function jumlahkaki(){
	return "jumlah kakinya ".$this->jumlah_kaki;
} function suara(){
	return "suaranya ".$this->bersuara;
}
}
$ling = new elang;
$ling->jumlah_kaki = "2";
$ling->bisa_terbang = "bisa terbang";
$ling->bersuara = "miip miip";

echo "ling adalah elang <br>";
echo $ling->jumlahkaki();
echo "<br>";
echo $ling->suara();

echo "<hr>";

class angsa {
	public $jumlah_kaki, $bisa_terbang, $bersuara;
 	
 	function jumlahkaki(){
	return "jumlah kakinya ".$this->jumlah_kaki;
} function suara(){
	return "suaranya ".$this->bersuara;
}
}
$swan = new angsa;
$swan->jumlah_kaki = "2";
$swan->bisa_terbang = "bisa terbang";
$swan->bersuara = "kwak kwak";

echo "swan adalah angsa <br>";
echo $swan->jumlahkaki();
echo "<br>";
echo $swan->suara();

echo "<hr>";