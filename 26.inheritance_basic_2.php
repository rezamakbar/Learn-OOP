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
    public $jenis = "Televisi";

    public function cekStokTelevisi()
    {
        return $this->jenis." ".$this->merek.", ".$this->cekStok();
    }
}

$produksi01 = new Televisi();
echo $produksi01->jenis;
echo "<br>";
echo $produksi01->cekStokTelevisi();