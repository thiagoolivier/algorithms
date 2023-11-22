<?php
/**
 * Returns the number of unique values in the array.
 * @param array $dataset The array of numbers to be checked.
 * @return int Number of times that unique values were found.
 */
function countUniqueValues(array $dataset): int
{
    if (count($dataset) === 0) {
        echo "Empty arrays can't be checked.\n";
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

countUniqueValues([1, 1, 1, 1, 2, 2, 3, 3, 4, 4, 5, 6, 6, 7, 7, 7, 8, 8, 8, 8, 8, 8, 8, 9, 10]);

?>