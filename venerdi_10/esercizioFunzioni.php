<?php
class ContoBancario {
    private $saldo;
 
    public function __construct($saldoIniziale) {
        $this->saldo = $saldoIniziale;
    }
 
    public function deposita($importo) {
        if ($importo > 0) {
            $this->saldo += $importo;
        }
    }
 
    public function preleva($importo) {
        if ($importo <= $this->saldo) {
            $this->saldo -= $importo;
        }
        return 0; // Non sufficiente saldo
    }
 
    public function getSaldo() {
        return $this->saldo;
    }
}


$pippo = new ContoBancario(1000);
echo $pippo->getSaldo();
echo "\n";

$pippo->preleva(300);
echo $pippo->getSaldo();
echo "\n";

$pippo->deposita(200);
echo $pippo->getSaldo();