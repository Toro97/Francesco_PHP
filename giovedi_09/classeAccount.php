<?php
class Account {
    private $saldo;
 
    public function __construct($saldoIniziale) {
        $this->saldo = $saldoIniziale;
    }

    private function stampaOperazione($op, $val) {
        if ($op) {
            echo "Deposito di: $val\n\tSaldo finale: $this->saldo";
        }
        else {
            echo "Prelievo di: $val\n\tSaldo finale: $this->saldo";
        }
    }
 
    public function deposita($importo) {
        if ($importo > 0) {
            $this->saldo += $importo;
            $this->stampaOperazione(true, $importo);
        }
    }
 
    public function preleva($importo) {
        if ($importo <= $this->saldo) {
            $this->saldo -= $importo;
            $this->stampaOperazione(false, $importo);
        }
        return 0; // Non sufficiente saldo
    }
 
    public function getSaldo() {
        return $this->saldo;
    }
}


$pippo = new Account(1000);
echo $pippo->getSaldo();
echo "\n";

$pippo->preleva(300);
echo $pippo->getSaldo();
echo "\n";

$pippo->deposita(200);
echo $pippo->getSaldo();
