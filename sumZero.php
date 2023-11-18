<?php

function sumZero(array $data)
{
    if (!isset($data)) {
        return false;
    }

    $left = 0;
    $right = count($data) - 1;

    while ($left < $right) {
        $result = $data[$left] + $data[$right];

        if ( $result === 0) {
            return [$data[$left], $data[$right]];
        } 
        else if ($result > 0) {
            $right--;
        } else {
            $left++;
        }
    }
    
    return null;
}

$result = sumZero([-5, -4, -2, 0, 6, 8, 9, 10]);
var_dump($result);

?>