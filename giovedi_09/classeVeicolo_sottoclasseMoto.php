<?php
class Veicolo {
    public $ruote = 4;
}

class Moto extends Veicolo {
    public function numeroRuote() {
        return $this->ruote;
    }
}


$liberty = new Moto();
$liberty->ruote = 2;
echo $liberty->numeroRuote();