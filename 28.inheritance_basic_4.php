<?php
class Produk {
    public $sku;
    public $stok;
}

class Televisi extends Produk {
    public $ukuranLayar;
}

class MesinCuci extends Produk {
    public $kapasitas;
}

class Speaker extends Produk {
    public $konfigurasi;
}

$produksi01 = new Televisi();
$produksi02 = new MesinCuci();
$produksi03 = new Speaker();
//reza