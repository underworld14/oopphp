<?php 

abstract class Buah {
    private $warna;

    abstract public function makan();

    protected function getWarna() {
        return $this->warna;
    }
    protected function setWarna($warna) {
        $this->warna = $warna;
    }
}

class Apel extends Buah {
    public function __construct($warna) {
        $this->setWarna($warna);
    }
    public function makan() {
        return "Dimakan sampai tengah, Apel " . $this->getWarna() . " ini rasanya enak";
    }
}

$manalagi = new Apel('hijau');

var_dump($manalagi);

echo $manalagi->makan();



