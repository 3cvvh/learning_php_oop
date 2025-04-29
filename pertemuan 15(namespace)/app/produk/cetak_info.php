<?php 
class cetak_info{
    public $info = [];

    public function tambah(produk $produk){
        $this->info[] = $produk;
    }
    public function cetak(){
        $string = "daftar produk : <br>";
        foreach($this->info as $p){
            $string .= "- {$p->getlebel()} <br>";
        }
        return $string;
    }
}