<?php
/**
Padaryti klasę automobiliai. Sukurti funkciją automobilis. Parametrai: a) gamintojas, b) modelis, c) kuras: benzinas, dyzelis, d) kuro sąnaudos (kiek litrų / 100km). Funkcija turi patalpinti automobilio duomenis kaip asociatyvinį masyvą į klasės savybę sąrašas (paprastas masyvas). Sukurti funkciją kurovidurkisDyzelis kuri gražina dyzelinių masinų kuro sanaudų vidurkį. Sukurti funkcija kurovidurkisBenzinas kuri gražina benzininių masinų kuro sąnaudų vidurkį.
 */
//PATAISYK!!!!!!!!!!!
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

//PATAISYK!!!!!!!!!!!