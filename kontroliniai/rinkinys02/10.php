<?php
/**
Sukurkite PHP skriptą, kuriame aprašykime klasę loto, kurioje būtų viena savybė - $kamuoliukai, kuri bus masyvas, taip pat būtų metodas insert($kamuoliukas), kuris prideda naują kamuoliuko numerį į masyvą sąvybę $kamuoliukai. Taip pat sukurkite metodą vid(), kuris grąžintų masyve sąvybėje esančių elementų matematinį vidurkį.
 */
class loto
{
    public $kamuoliukai = [];

    function insert($kamuoliukas)
    {
        $this->kamuoliukai[] = $kamuoliukas;
    }

    function vid()
    {
        $suma = 0;
        foreach ($this->kamuoliukai as $a) {
            $suma += $a;
        }
        return $suma / count($this->kamuoliukai);
    }
}

$x = new loto();
$x->insert(1);
$x->insert(2);
$x->insert(3);
$x->insert(4);
echo $x->vid();