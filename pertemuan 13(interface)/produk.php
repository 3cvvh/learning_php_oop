<?php 
interface CETAK{
    public function getlebel();
}
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
$produk1 = new buku("nura", "hiroshi shibashi","pt gramedia",5000,100);

$produk2 = new game("bully","rockstar","rockstar",10000,30);
 $cetak = new cetak_info();
 $cetak->tambah($produk1);
$cetak->tambah($produk2);
echo $cetak->cetak();




