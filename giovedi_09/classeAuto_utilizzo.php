<?php
class Automobile{
    public $marca;
    public $modello;

    public function __construct($marca, $modello){
        $this->marca = $marca;
        $this->modello = $modello;
    }

    public function dettagliAutomobile(){
        return "Marca: ".$this->marca."Modello: ".$this->modello;
    }    
}


$auto1=new Automobile("Fiat", "Panda");
$auto2=new Automobile("Opel", "Agila");
$auto3=new Automobile("Citroen","C3 AirCross");

echo $auto1->dettagliAutomobile();
echo "\n";
echo $auto2->dettagliAutomobile();
echo "\n";
echo $auto3->dettagliAutomobile();