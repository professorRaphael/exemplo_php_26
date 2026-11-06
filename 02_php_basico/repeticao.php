<?php
for ($i = 1; $i <= 3; $i++) {
    echo "for: $i\n";
}

$numero = 1;
while ($numero <= 2) {
    echo "while: $numero\n";
    $numero++;
}

do {
    echo "do...while: $numero\n";
    $numero++;
} while ($numero < 4);
