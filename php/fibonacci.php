<?php
function recursiveFibonacci($target) {
    if($target <= 2) return 1;
    return recursiveFibonacci($target - 1) + recursiveFibonacci($target - 2);
}

function iterativeFibonacci($target) {
    if($target <= 1) return $target;

    $fib = [0, 1];

    for ($i = 2; $i <= $target; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib[$target];
}
?>