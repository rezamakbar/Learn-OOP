<?php
    class Produk{
        private $sku = "";
        private $stok = 0;

        private function setSku($sku)
        {
            if(preg_match("/^[A-Z]{3}[0-9]{3}$/",$sku))
            {
                $this->sku = $sku;
            } else {
                die("Error : Sku harus 6 digit (3 huruf dan 3 angka), seperti AAA001");
            }
        }

        private function setStok($stok)
        {
            if(is_int($stok) && ($stok>0)) {
                $this->stok = $stok;
            } else {
                die("Error: stok harus angka bulat positif");
            }
        }

        public function __construct($sku, $stok)
        {
            $this->setSku($sku);
            $this->setStok($stok);
        }

        public function getSku()
        {
            return $this->sku;
        }

        public function getStok()
        {
            return $this->stok;
        }
    }

$produk01=new Produk('ACR014',9);
echo"Stok produk ".$produk01->getSku().": ".$produk01->getStok()." buah";
//Stok produk ACR014: 9 buah

echo"<br>";

$produk02=new Produk('LNV023',100);
echo "Stok produk ".$produk02->getSku().": ".$produk02->getStok()." buah";
// Stok produk LNV023: 100 buah

echo"<br>";

$produk06=new Produk('XNZ03',109);
echo "Stok produk ".$produk06->getSku().": ".$produk06->getStok()." buah";
// Stok produk LNV023: 100 buah

echo"<br>";

$produk03=new Produk('2NV050',67);
echo"Stok produk ".$produk03->getSku().": ".$produk03->getStok()." buah";
// Error: sku harus 6 digit (3 huruf dan 3 angka), seperti AAA001

echo"<br>";


$produk04=new Produk('HP002',10);
echo"Stok produk ".$produk04->getSku().": ".$produk04->getStok()." buah";
// Error: sku harus 6 digit (3 huruf dan 3 angka), seperti AAA001

echo"<br>";



$produk05=new Produk('DEL099',-5);
echo"Stok produk ".$produk05->getSku().": ".$produk05->getStok()." buah";