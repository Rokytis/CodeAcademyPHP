<?php

$t = date("H");
echo $t . '<br>';

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
// phpinfo();  // visa informacija parodo

echo '<br>';

if ($t > 17) echo 'vakaras';
else echo 'diena';
echo '<br>';

echo $t > 17 ? 'vakaras' : 'diena'; // tas pats kaip pries tai
echo '<br>';

