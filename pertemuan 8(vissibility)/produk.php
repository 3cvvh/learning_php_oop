<?php 

class produk{
public $judul,
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
}
$komik = new buku("nura", "hiroshi shibashi","pt gramedia",5000,100);

$game = new game("bully","rockstar","rockstar",10000,30);





echo'<br>';
echo $komik->getlebel();
echo'<br>';
echo $game->getlebel();