<?php
/**
Padaryti klasę personalas. Sukurti funkciją persona. Parametrai: a) vardas, b) pavardė, c) lytis. Funkcija turi patalpinti personos duomenis kaip asociatyvinį masyvą į klasės savybę darbuotojai (paprastas masyvas). Sukurti funkciją kiekMoteru kuri gražina personalo moterų skaiciu. Sukurti funkciją kiekVyru kuri gražina personalo vyrų skaičių.
 */
class personalas {
    public $darbuotojai =[];
    function persona($va, $pa, $ly){
        $this->darbuotojai[] = [
            'Vardas' => $va,
            'Pavarde' => $pa,
            'Lytis' => $ly,
        ];
    }

/*
    function kiekMoteru(){                             //foreach variantas
        $i = 0;
        foreach($this->darbuotojai as $zmogus){
            if ($zmogus['Lytis'] == 'Moteris') $i++;
        }
        return $i;
    }
*/
    function kiekMoteru(){
        $MoteruKiekis = 0;
        for ($i = 0; $i < count($this->darbuotojai); $i++) {
            $zmogus = $this->darbuotojai[$i];
            if ($zmogus['Lytis'] == 'Moteris') {
                $MoteruKiekis++;
            }
        }
        return $MoteruKiekis;
    }

    function kiekVyru(){
        $VyruKiekis = 0;
        for ($i = 0; $i < count($this->darbuotojai); $i++) {
            $zmogus = $this->darbuotojai[$i];
            if ($zmogus['Lytis'] == 'Vyras') {
                $VyruKiekis++;
            }
        }
        return $VyruKiekis;
    }
}
//$zmogus['Lytis'] == 'Vyras'

$o = new personalas();
$o-> persona('Petras', 'Petraitis','Vyras');
$o-> persona('Jonas', 'Jonaitis','Vyras');
$o-> persona('Greta', 'Jankauskaite','Moteris');
$o-> persona('Ona', 'Petriene','Moteris');
var_dump($o);
echo 'Moteru yra: ' . $o->kiekMoteru() . '<br>';
echo 'Vyru yra: ' . $o->kiekVyru() . '<br>';
