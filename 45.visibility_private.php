<?php
    class Produk{
        private $merek;

         public function setMerek($merek)
        {
            return $this->merek;
        
        }
        public function getMerek($merek)
        {
            return $this->merek;        
        }
        
    }

    $Produk01 = new Produk;
    $Produk01->setMerek('Asus');

    echo $Produk01->getProduk();