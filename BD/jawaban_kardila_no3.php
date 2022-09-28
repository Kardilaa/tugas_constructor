<?php
class tiket_bus{

    public $tujuan = "bogor";
    public $no_bus = "002";
    public $harga = "25000";
    public $jumlah ="4";

    public FUNCTION __construct(){
        echo " Tujuan bus ";
    }
    public FUNCTION __destruct(){
        echo " tujuan no bus";

    }public FUNCTION __tujuan_bus(){
        return "tujuan bus $this->tujuan, no_bus :$this->no_bus,harga : $this->harga,jumlah : $this->jumlah";
    }
}
$tiket_bus = new tiket_bus();

echo "<br/>";
echo $tiket_bus->__tujuan_bus();
echo "<br/>";
?>