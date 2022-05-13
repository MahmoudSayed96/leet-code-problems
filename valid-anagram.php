<?php

// https://leetcode.com/problems/valid-anagram

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        $arr_s = str_split($s);
        $arr_t = str_split($t);
        
        sort($arr_s);
        sort($arr_t);

        $str1 = implode($arr_s);
        $str2 = implode($arr_t);
        
        return $str1 === $str2;
        
    }
}
