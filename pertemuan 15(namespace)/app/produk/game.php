<?php
class game extends produk implements CETAK{
    public $waktu;
     public function __construct($judul ="tidak memiliki judul", $penulis = "tidak memiliki penulis", $penerbit = "tidak memiliki penerbit", $harga = 0, $waktu = 0)
     {
         parent::__construct($judul, $penulis, $penerbit, $harga,);
         $this->waktu = $waktu;
     }
  public function getlebel(){
     $string = "game:".$this->get() ."~{$this->waktu}";
     return $string;
  }
  public function get(){
     return "$this->penerbit, $this->penulis, $this->harga, $this->judul, ";
 }
 }