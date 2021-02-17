<?php
    class Produk{
        private $merek;

        public function hello()
        {
            return "Ini adalah produk";
        }
    }

    $produk01 = new Produk;
    $produk01->merek ='Asus';

    echo $produk01->merek;
    echo '<br>';
    echo $produk01->hello();