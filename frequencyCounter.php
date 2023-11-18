<?php
/**
 * Verifies if the $secondArr contains equivalent squared values for each item in $firstArr. 
 * @param array $originalArr Original array that contains the starting values.
 * @param array $squaredArr Contains a value list to be verified if they correspond to each value in $originalArr.
 * @return bool Returns true if $squaredArr has a corresponding value for each item of $origianalArr.
 */
function hasSquared(array $originalArr, array $squaredArr)
{
    if (count($originalArr) != count($squaredArr)) {
        echo "Error: Arrays are different in size.\n";
        return false;
    }

    foreach ($originalArr as $key => $value) {
        // Search the second array for squared $value in context.
        $keyInSquaredArr = array_search($value ** 2, $squaredArr);

        if ($keyInSquaredArr === false) {
            echo "No squared value corresponding to $value in the second array.\n";
            return false;
        }

        unset($squaredArr[$keyInSquaredArr]);
    }

    return true;
}

hasSquared([1, 2, 3, 4, 5], [1, 4, 9, 16]);
?>