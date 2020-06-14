<?php
class Produk {
    public $jenis;
    public $merek;
    public $stok;

    public function Produk($jenis, $merek,  $stok = 10)
    {
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
    }
}

$produk01 = new Produk ("PC", "Asus", 25);
$produk02 = new Produk ("Laptop", "Mac");

print_r ($produk01);
echo "<br>";
print_r ($produk02);