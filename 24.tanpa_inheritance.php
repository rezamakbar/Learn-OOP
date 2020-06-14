<?php
class Produk {
    public $merek = "Sharp";
    public $stok = 50;

    public function cekStok()
    {
        return "Sisa stok: ".$this->stok;
    }
}

$produksi01 = new Produk();
echo $produksi01->merek;
echo "<br>";
echo $produksi01->cekStok();
