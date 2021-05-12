<?php
    class Produk{
        public static $totalProduk = 100;

        public static function cekProduk()
        {
            return "Total Produk ada 900";
        }
    }

    echo Produk::cekProduk();