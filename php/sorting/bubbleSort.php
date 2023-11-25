<?php
function bubbleSort($arr)
{   
    $n = count($arr);

    if ($n === 0) {
        return [];
    }

    for ($i = 0; $i < $n - 1; $i++) {
        $swapped = false;
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
                $swapped = true;
            }
        }
        if ($swapped === false) break;
    }
    
    return $arr;
}
?>