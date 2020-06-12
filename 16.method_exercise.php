<?php
class Produk {
    public $jenis;
    public $merek;
    public $stok;

    public function tambahStok($jumlah = 12)
    {
        $totalstok = $this->stok + $jumlah;

        if ($totalstok <=100) {
            $this->stok = $totalstok;
            $pesan = "Stok berhasil ditambah <br>";
            $pesan .= "Jumlah stok saat ini: ".$this->stok."<br>";
        }
        else {
            $pesan = "Maaf, stok sudah penuh. Penambahan stok dibatalkan <br>";
            $pesan .= "Jumlah stok saat ini: ".$this->stok."<br>";
        }
        return $pesan;
        }
    }

$produk01 = new Produk();
$produk01->jenis = "Televisi";
$produk01->merek = "Samsung";
$produk01->stok = 54;

echo $produk01->tambahStok();
echo "<br>";
echo $produk01->tambahStok(20);
echo "<br>";
echo $produk01->tambahStok(15);