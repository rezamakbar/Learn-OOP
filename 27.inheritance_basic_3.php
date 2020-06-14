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
class  TelevisiLCD extends Televisi {
    public $tipe = "LCD";

    public function cekStokTelevisiLCD()
    {
        return $this->tipe." ".$this->cekStokTelevisi();
    }
}

$produksi01 = new TelevisiLCD();
echo $produksi01->merek;
echo "<br>";
echo $produksi01->jenis;
echo "<br>";
echo $produksi01->tipe;
echo "<br>";
echo $produksi01->cekStokTelevisiLCD();