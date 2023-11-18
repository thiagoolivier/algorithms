<?php
/**
 * Calculates the bigger sum based on the window passed as argument.
 * 
 * @param array $dataset Numbers to be added together.
 * @param int $window Size of the window to be added together.
 */

function maxSubArraySum(array $dataset, int $window)
{
    if (!isset($dataset) || $window < 1) {
        echo("Array vazio ou janela menor que 1.\n");
        return null;
    }

    $maxSum = 0;
    $tempSum = 0;

    for ($i = 0; $i < $window; $i++) {
        $maxSum += $dataset[$i];
    }

    $tempSum = $maxSum;

    for ($i = $window; $i < count($dataset); $i++) {
        $tempSum = $tempSum - $dataset[$i - $window] + $dataset[$i];
        $maxSum = max([$tempSum, $maxSum]);
    }

    return $maxSum;
}

$result = maxSubArraySum([2,3,5,1,10,6,7,10], 4);
var_dump($result);
?>