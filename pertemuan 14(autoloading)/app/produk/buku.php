<?php
class buku extends produk implements CETAK{
    public $halaman;
    public function __construct($judul ="tidak memiliki judul", $penulis = "tidak memiliki penulis", $penerbit = "tidak memiliki penerbit", $harga = 0,$halaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->halaman = $halaman;
    }
    public function get(){
        return "$this->penerbit, $this->penulis, $this->harga, $this->judul, ";
    }

public function getlebel(){
    $string = "komik:". $this->get(). -"$this->halaman";
    return $string;
}
}