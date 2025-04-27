<?php
abstract class buah{
    public $nama,
    $warna;
   abstract public function makan();
    public function setwarna($warna){
        $this->warna = $warna;
    }

}

class buahnaga extends buah{

    public function makan()
    {
        //nyam nyam
    }

}
$buahnaga1 = new buahnaga();
$buahnaga1->makan("ungu");
?>