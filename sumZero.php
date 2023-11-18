<?php
/**
 * Verifies the the provided dataset to identify the initial pair of numbers whose summation equals zero.
 * The provided dataset must me previously sorted for this context.
 * @param array $dataset The array to be verified.
 * @return mixed The fisrt pair of values whose summation equals to zero or null.
 */
function sumZero(array $dataset): array|null
{
    if (!isset($dataset)) {
        echo "Empty or undefined dataset\n";
        return null;
    }

    $left = 0;
    $right = count($dataset) - 1;

    while ($left < $right) {
        $result = $dataset[$left] + $dataset[$right];

        if ($result === 0) {
            return [$dataset[$left], $dataset[$right]];
        } else if ($result > 0) {
            $right--;
        } else {
            $left++;
        }
    }

    return null;
}

sumZero([-5, -4, -2, 0, 6, 8, 9, 10]);
?>