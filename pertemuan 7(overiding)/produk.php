<?php 

class produk{
public $judul,
        $penulis,
        $penerbit;
protected $harga ;
protected $diskon;
public function __construct($judul ="tidak memiliki judul", $penulis = "tidak memiliki penulis", $penerbit = "tidak memiliki penerbit", $harga = 0,)
{
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga  = $harga;
}

public function getlebel(){
    return "$this->penerbit, $this->penulis ";
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
    $string = "{$this->judul} " .parent::getlebel() ." (Rp. {$this->harga}) - {$this->halaman} .  halaman";
    return $string;
}
public function get_diskon($diskon){
    $this->diskon = $diskon;
}
public function get_harga(){
return $this->harga - ($this->harga * $this->diskon)/100;
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
    $string = "{$this->judul} ".parent::getlebel()." (Rp. {$this->harga}) ~ {$this->waktu} . jam";
    return $string;
 }
 public function getharga(){
    return"$this->harga"-($this->harga * $this->diskon)/100;
 }
 public function getdiskon($diskon = 0){
    $this->diskon = $diskon;
 }
}
$komik = new buku("nura", "hiroshi shibashi","pt gramedia",5000,100);

$game = new game("bully","rockstar","rockstar",10000,30);





echo'<br>';
echo $komik->getlebel();
echo'<br>';
echo $game->getlebel();
echo '<hr>';
$game->getdiskon(100);
echo $game->getharga(). "harga diskon game";
echo "<br>";
$komik->get_diskon(100);
echo $komik->get_harga() . "harga diskon komik";