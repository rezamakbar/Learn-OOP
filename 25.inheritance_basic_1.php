<?php
class Produk {
    public $merek = "Sharp";
    public $stok = 50;

    public function cekStok()
    {
        return "Sisa stok: ".$this->stok;
    }
}
class Televisi extends Produk {
}

$produksi01 = new Televisi();
echo $produksi01->merek;
echo "<br>";
echo $produksi01->cekStok();