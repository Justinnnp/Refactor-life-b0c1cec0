<?php

function roundChange($argv)
{
    $change = (float) round($argv[1], 2);
    $change = (round($change / 0.5)) * 0.5;

    define(
            "GELDEUROS",
            [
    "50" => " euro",
    "20" => " euro",
    "10" => " euro",
    "5" => " euro",
    "2" => " euro",
    "1" => " euro",
    "0.50" => " euro cent",
    "0.20" => " euro cent",
    "0.10" => " euro cent",
    "0.05" => " euro cent",
]
        );
    foreach (GELDEUROS as $geldStuk => $value) {
        $geldStuk = (float) $geldStuk;
        $change = round($change, 2);
        
        if (floor($change / $geldStuk)) {
            $aantal = floor($change / $geldStuk);
            echo "$aantal x $geldStuk $value" .PHP_EOL;
            $change = $change - ($aantal * $geldStuk);
        }
    }
}
roundChange($argv);
