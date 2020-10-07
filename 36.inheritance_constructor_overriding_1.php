<<<<<<< HEAD
<?php
class Produk{
    public $jenis;
    public $merek;
    public $stok;

    public function __construct($jenis, $merek, $stok)
    {
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
    }
}
class Televisi extends Produk {
    public function __construct()
    {
    }
}

$produk01 = new Televisi("Televisi", "Samsung", 20);

echo "<pre>";
print_r ($produk01);
=======
<?php
class Produk{
    public $jenis;
    public $merek;
    public $stok;

    public function __construct($jenis, $merek, $stok)
    {
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
    }
}

class Televisi extends Produk {
    public function __construct()
    {
    }
}

$produk01 = new Televisi("Televisi", "Samsung", 20);

echo "<pre>";
print_r ($produk01);
>>>>>>> b908566fb01a8aaa76c53b501743f00eccb0d866
echo"</pre>";