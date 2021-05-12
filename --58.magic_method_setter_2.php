<?php
    class Produk{
        private $merek;
        private $harga;

    public function __set($name, $value)
    {
        if($name == "merek"){
            if (is_string($value)) {
                $this->merek = $value;
            }
            else {
                echo "Error: Merek harus berbentuk string <br>";
            }
        }

        else if($name == "harga"){
            if(is_int($value)) {
                $this->harga = $value;
            }
            else {
                echo "Error: Harga harus berbentuk angka <br>";
            }
        }

        else {
            echo "Maaf Property '$name' tidak tersedia";
        }
    }
}

$produk01 = new Produk();
$produk01->merek = 500;
$produk01->harga = "yamahal";
$produk01->tipe = "yamahal";

echo "<pre>";
print_r ($produk01);
echo "</pre>";


?>