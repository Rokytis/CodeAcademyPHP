<?php
/**
Sukurkite PHP skriptą, kuriame aprašykime klasę taupyklė, kurioje būtų viena savybė - $pinigai, kuri bus masyvas, taip pat būtų metodas add($pinigas), kuris prideda naują pinigą į masyvą sąvybę $pinigai. Taip pat sukurkite metodą vidurkis(), kuris grąžintų masyve sąvybėje esančių elementų matematinį vidurkį.
 */
class taupykle
{
    public $pinigai = [];

    function add($pinigas)
    {
        $this->pinigai[] = $pinigas;
    }

    function vidurkis()
    {
        $suma = 0;
        foreach ($this->pinigai as $a) {
            $suma += $a;
        }
        return $suma / count($this->pinigai);
    }
}

$x = new taupykle();
$x->add(1);
$x->add(2);
$x->add(3);
$x->add(4);
echo $x->vidurkis();