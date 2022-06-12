<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     * https://leetcode.com/problems/valid-palindrome
     */
    function isPalindrome($s) {
        $s = strtolower(preg_replace("/[^a-zA-Z0-9]+/", "", $s));
        return $s == strrev($s);
    }
}
