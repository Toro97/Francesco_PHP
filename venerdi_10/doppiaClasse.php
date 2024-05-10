<?php
class Articolo{
    private $nome;
    private $amount;

    public function __construct($nome, $amount){
        $this->nome = $nome;
        $this->amount = $amount;
    }
}

class Inventario{
    private $articoli=[];

    public function __construct(){
        $this->articoli=[];
    }

    public function aggiungiArticolo($articolo){
        if (!empty($this->articoli)){
            foreach ($this->articoli as $art) {
                if (strtolower($art->nome) == strtolower($articolo->nome)){
                    $this->articoli[] = $articolo;
                    return true;
                }
            }
        }
        return false;
    }

    public function rimuoviArticolo($articolo){
        $i=0;
        foreach ($this->articoli as $art) {
            if (!isset($art->nome)){
                unset($this->articoli[$i]);
                return true;
            }
            $i++;
        }
        return false;
    }

    public function aggiornaQuantita($articolo, $amount){
        $i=0;
        foreach ($this->articoli as $art) {
            if (!isset($art->nome)){
                $art = new Articolo($articolo, $amount);
                return true;
            }
            $i++;
        }
        return false;
    }
}

function stampami($inventario){
    foreach($inventario as $art){
        echo $art->nome;
    }
}

$crackers=new Articolo("crackers", 199);
$borraccia=new Articolo("borraccia", 2);

$lidl=new Inventario();
$lidl->aggiungiArticolo($crackers);
$lidl->aggiungiArticolo($borraccia);
//stampami($lidl);

//$lidl->aggiornaQuantita("crackers",100);
