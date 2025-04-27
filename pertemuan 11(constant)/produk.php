<?php 

class produk{
private $judul,
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

public function getlebel(){
    return "$this->penerbit, $this->penulis, $this->harga, $this->judul, ";
}

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
class buku extends produk{
    public $halaman;
    public function __construct($judul ="tidak memiliki judul", $penulis = "tidak memiliki penulis", $penerbit = "tidak memiliki penerbit", $harga = 0,$halaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->halaman = $halaman;
    }

public function getlebel(){
    $string = "komik:". parent::getlebel(). -"$this->halaman";
    return $string;
}
}
class game extends produk{
   public $waktu;
    public function __construct($judul ="tidak memiliki judul", $penulis = "tidak memiliki penulis", $penerbit = "tidak memiliki penerbit", $harga = 0, $waktu = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga,);
        $this->waktu = $waktu;
    }
 public function getlebel(){
    $string = "game:".parent::getlebel() ."~{$this->waktu}";
    return $string;
 }
}
$produk1 = new buku("nura", "hiroshi shibashi","pt gramedia",5000,100);

$produk2 = new game("bully","rockstar","rockstar",10000,30);





echo'<br>';
echo $produk1->getlebel();
echo'<br>';
echo $produk2->getlebel();
echo "<br>";
echo $produk1->getjudul();
echo "<br>";
$produk2->set_judul("boku no pico");
echo $produk2->getjudul();
$produk2->set_harga(1);
echo $produk2->getharga();