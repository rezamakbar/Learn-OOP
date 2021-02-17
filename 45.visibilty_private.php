<?php
    class Produk
    {
        private $merek;

        public function setMerek($merek)
        {
            $this->merek = $merek;
            return $this->merek;
        }

        public function getMerek($merek)
        {
            $this->merek = $merek;
            return $this->merek;
        }
        
    }

    $produk01 = new Produk;
    $produk01->setMerek('Asus');

    echo $produk01->getMerek();
    