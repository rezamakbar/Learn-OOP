<?php
class Produk{
    private $merek ='';

    public function setMerek($merek)
    {
        if(is_string($merek)) {
            $this->merek = $merek;
        }
        else {
            echo "Error: merke harus berbentuk string <br>";
        }
    }

    public function getMerek()      
    {
        return strtoupper($this->merek);
    }
}

$produk01 = new Produk();
echo $produk01->setMerek(9);

$produk01->setMerek("Acer");
echo $produk01->getMerek();