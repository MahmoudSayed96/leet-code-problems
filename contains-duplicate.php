<?php

/**
* https://leetcode.com/problems/contains-duplicate/
*/

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) { 
        if(count(array_unique($nums)) < count($nums)) {
            return true;
        }
        return false;
    }
}
