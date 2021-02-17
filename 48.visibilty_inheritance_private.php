<?php
    class Produk{
        private $merek = "Asus";

        private function hello()
        {
            return "ini adalah produk";
        }
        
    }

    class Laptop extends produk
    {
        public function helloLaptop()
        {
            return $this->hello()." Laptop ".$this->merek;
        }
    }

    $produk01 = new Laptop;
    $produk01->helloLaptop();
    
    