<?php
/**
 * Calculates the bigger sum based on the window passed as argument.
 * 
 * @param array $dataset Numbers to be added together.
 * @param int $window Size of the window to be added together.
 * @return mixed The maximum sum found between the values given.
 */
function maxSubArraySum(array $dataset, int $window): int
{
    if (!isset($dataset) || $window < 1) {
        echo "Empty array or less than 1 window size provided.\n";
        return false;
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

maxSubArraySum([2, 3, 5, 1, 10, 6, 7, 10], 4);
?>