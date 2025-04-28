<?php
abstract class produk{
protected $judul,
        $penulis,
        $penerbit,
        $harga ;
public function __construct($judul ="tidak memiliki judul", $penulis = "tidak memiliki penulis", $penerbit = "tidak memiliki penerbit", $harga = 0)
{
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga  = $harga;
}



abstract public function get();

public function getjudul(){
   return $this->judul;
}
public function set_judul($judul){
    $this->judul = $judul;
}
public function getpenulis(){
    return $this->penulis;
 }
 public function set_penulis($penulis){
     $this->penulis = $penulis;
 }
 public function getpenerbit(){
    return $this->penerbit;
 }
 public function set_penerbit($penerbit){
     $this->penerbit = $penerbit;
 }
 public function getharga(){
    return $this->harga;
 }
 public function set_harga($harga){
     $this->harga = $harga;
 }
 
}