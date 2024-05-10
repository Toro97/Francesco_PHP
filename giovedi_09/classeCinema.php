<?php
class Cinema
{
    private $films = [];

    public function __construct()
    {
        $this->films = [];
    }

    public function aggiungiFilm($titolo, $posti)
    {
        if (!isset($this->films[strtolower($titolo)]) && $posti > 0) {
            $this->films[strtolower($titolo)] = $posti;
            return true;
        }
        return false;
    }

    public function prenotaPosto($titolo)
    {
        if (isset($this->films[strtolower($titolo)])  && $this->films[strtolower($titolo)] > 0) {
            $this->films[strtolower($titolo)] -= 1;
            return true;
        }
        return false;
    }

    public function prenotazioni()
    {
        echo "\nFilm in programmazione e posti disponibili";
        //var_dump($this->films);
        foreach ($this->films as $film => $nPos) {
            echo "\n".strtolower($film)." | $nPos";
        }
    }
}



$eliseo = new Cinema();
if ($eliseo->aggiungiFilm("Come ti ammazzo il bodyguard", 3)){
    echo "Inserimento del film completato correttamente";
}
else{
    echo "Inserimento del film non  riuscito, film già presente oppure numero posti <=0";
}
$eliseo->prenotazioni();

echo "\n";
echo "\n";
if ($eliseo->prenotaPosto("Come ti ammazzo il bodyguard")){
    echo "Posto prenotato";
} else{
    echo "non è  stato possibile prenotare il posto, il film inserito non è in elenco oppure i posti sono esauriti";
}
echo "\n";
if ($eliseo->prenotaPosto("Come ti ammazzo il bodyguard")){
    echo "Posto prenotato";
} else{
    echo "non è  stato possibile prenotare il posto, il film inserito non è in elenco oppure i posti sono esauriti";
}
echo "\n";
if ($eliseo->prenotaPosto("Come ti ammazzo il bodyguard")){
    echo "Posto prenotato";
} else{
    echo "non è  stato possibile prenotare il posto, il film inserito non è in elenco oppure i posti sono esauriti";
}
echo "\n";
if ($eliseo->prenotaPosto("Come ti ammazzo il bodyguard")){
    echo "Posto prenotato";
} else{
    echo "non è  stato possibile prenotare il posto, il film inserito non è in elenco oppure i posti sono esauriti";
}
$eliseo->prenotazioni();

echo "\n";
echo "\n";
if ($eliseo->aggiungiFilm("DeadPool", 300)){
    echo "Inserimento del film completato  correttamente";
}
else{
    echo "Inserimento del film non  riuscito, film già presente oppure numero posti <=0";
}
$eliseo->prenotazioni();

echo "\n";
echo "\n";
if ($eliseo->aggiungiFilm("DEADPOOL", 100)){
    echo "Inserimento del film completato  correttamente";
}
else{
    echo "Inserimento del film non  riuscito, film già presente oppure numero posti <=0";
}
$eliseo->prenotazioni();

echo "\n";
echo "\n";
if ($eliseo->prenotaPosto("Avatar")){
    echo "Posto prenotato";
} else{
    echo "non è  stato possibile prenotare il posto, il film inserito non è in elenco oppure i posti sono esauriti";
}