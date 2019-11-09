<?php

//jualan produk
//komik
//game 
class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
    	$this->judul = $judul;
    	$this->penulis = $penulis;
    	$this->penerbit = $penerbit;
    	$this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen jump", 30000);

$produk2 = new Produk("11':'11", "Fiersa Besari", "Indonesia", 20000);
$produk3 = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Buku : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
