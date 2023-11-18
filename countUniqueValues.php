<?php

function countUniqueValues(array $dataset): int
{
    if (count($dataset) === 0) {
        return false;
    }

    $i = 0;

    for ($j = 1; $j < count($dataset); $j++) {
        if ($dataset[$i] < $dataset[$j]) {
            $i++;
            $dataset[$i] = $dataset[$j];
        }
    }

    return $i + 1;
}

$result = countUniqueValues([1, 1, 1, 1, 2, 2, 3, 3, 4, 4, 5, 6, 6, 7, 7, 7, 8, 8, 8, 8, 8, 8, 8, 9, 10]);

var_dump($result);

?>