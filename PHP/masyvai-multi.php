<?php

$m = [
    ['var' => 'Jonas',
'pav' => 'Jonaitis',
        'amz' => 35],
    ['var' => 'Petras',
        'pav' => 'Petraitis',
        'amz' => 40],
    ['var' => 'Antanas',
        'pav' => 'Antanaitis',
        'amz' => 43]
];

//var_dump($m);
echo '<table>';
echo '<tr><th>Vardas</th><th>Pavarde</th><th>Amzius</th></tr>';
for ($i = 0; $i<count($m); $i++) {
echo '<tr>';
    echo '<td>' . $m[$i]['var'] . '</td>';
    echo '<td>' . $m[$i]['pav'] . '</td>';
    echo '<td>' . $m[$i]['amz'] . '</td>';
    echo '<td>';
    echo '</tr>';
}
echo '</table>';

echo '<br>';
$n = [
[1,115,16,13,165],
    [1,115,16,13,165],
    [1,115,16,13,165],
    [1,115,16,13,165],
];
echo '<table>';
for ($i = 0; $i<count($n); $i++) {
    echo '<tr>';
    for ($j = 0; $j<count($n[$i]); $j++){
        echo '<td>' . $n[$i][$j] . '</td>';
    }
    echo '</tr>';
}
echo '</table>';