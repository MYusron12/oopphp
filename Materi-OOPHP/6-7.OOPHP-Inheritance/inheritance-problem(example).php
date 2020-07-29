<?php

//jualan produk
//komik
//game 
class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $jmlLembar,
        $tipe;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $jmlLembar = 0, $tipe ) {
    	$this->judul = $judul;
    	$this->penulis = $penulis;
    	$this->penerbit = $penerbit;
    	$this->harga = $harga;
    	$this->jmlHalaman = $jmlHalaman;
    	$this->jmlLembar = $jmlLembar;
    	$this->tipe = $tipe;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
		// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if ( $this->tipe == "Komik" ) {
			$str .= " - {$this->jmlHalaman} Halaman.";
		} else if ( $this->tipe == "Buku" ) {
			$str .= " - {$this->jmlLembar} Lembar.";
		}
		return $str;
	}
}

	
	


class CetakInfoProduk {
	public function cetak ( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen jump", 30000, 100, 0, "Komik");

$produk2 = new Produk("11:11", "Fiersa Besari", "Indonesia", 20000, 0, 50, "Buku");

// Komik : Masashi Kishimoto, Shonen jump
// Buku : Fiersa Besari, Indonesia
// Naruto | Masashi Kishimoto, Shonen jump (Rp. 30000)

// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 halaman.
// Buku : 11:11 | Fiersa Besari, Indonesia (Rp 20000) - 50 Lembar.

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();