<?php

// https://leetcode.com/problems/two-sum

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        for($i=0; $i <= count($nums)-2; $i++) {
            for($j=$i+1; $j <= count($nums)-1; $j++) {
                 $sum = $nums[$i] + $nums[$j];
                if($sum == $target) {
                    return [$i, $j];
                }
            }
        }
        return [];
    }
}
