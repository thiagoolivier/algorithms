<?php

$numberList = [1, 2, 3, 4, 5];
$anNumberList = [1, 4, 9, 16];

function hasSquared($firstArr, $secondArr) 
{
    if (count($firstArr) != count($secondArr)) {
        echo("Error: Arrays are different in size.\n");
        return false;
    }

    foreach ($firstArr as $key => $value) {
        // Procurar o valor ao quadrado no segundo array
        $keyInSecondArr = array_search($value ** 2, $secondArr);

        if ($keyInSecondArr === false) {
            echo "No squared value corresponding to $value in the second array.\n";
            return false;
        }

        unset($secondArr[$keyInSecondArr]);

        var_dump($secondArr);
        echo("\n");
    }

    echo("The second array has corresponding values.\n");
    return true;
}

hasSquared($numberList, $anNumberList);

?>