<?php

class Solution
{

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isUgly($num) {
        if ($num < 1) {
            return false;
        }

        while ($num % 2 == 0 || $num % 3 == 0 || $num % 5 == 0) {
            if ($num % 2 == 0) {
                $num = $num / 2;
            }
            if ($num % 3 == 0) {
                $num = $num / 3;
            }
            if ($num % 5 == 0) {
                $num = $num / 5;
            }
        }
        return $num == 1;
    }
}

$num = 5;
$sol = new Solution();
var_dump($sol->isUgly($num));