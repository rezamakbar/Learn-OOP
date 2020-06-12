<?php
class Produk {
    public $jenis;
    public $merek;
    public $stok;

    public function pesanProduk(){
        $this->stok = $this->stok - 1;
    }

    public function borongProduk($jumlah){
        $this->stok = $this->stok - $jumlah;
    }

    public function cekStok(){
        return "Sisa stok: ". $this->stok ."<br>";
    }
}

$produksi01 = new Produk();
$produksi01->jenis = "Televisi";
$produksi01->merek = "Samsung";
$produksi01->stok = 54;

echo $produksi01->cekStok();

$produksi01->borongProduk(10);
echo $produksi01->cekStok();

$produksi01->borongProduk(25);
echo $produksi01->cekStok();