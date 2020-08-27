<?php

	class produk{
		public $namaBarang = "Sepatu",
				$merk = "Tomkins",
				$harga = 350000;

				//membuat method
				public function cetakProduk(){
					return " Rincian Produk : ";
				}
				public function cetakProduk2(){
					return "$this->namaBarang, $this->merk, $this->harga";
				}
	}

	$produk1= new produk();
	$produk2= new produk();
	$produk2 ->namaBarang ="Sepatu";
	$produk2 ->merk="Tomkins";
	$produk2 ->harga=350000;

	var_dump($produk1);
	echo "<br>";
	var_dump($produk2);
	echo "<br>";
	echo"<br>";
	echo $produk1 -> cetakProduk();
	echo $produk2 -> cetakProduk2();
?>

	
