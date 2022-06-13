<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     * https://leetcode.com/problems/remove-element/
     */
    function removeElement(&$nums, $val) {
        $arr_num = [];
        $arr = [];
        for($i=0;$i<count($nums);$i++) {
            if($nums[$i] == $val) {
                $arr[]='_';
            } else {
                $arr_num[]=$nums[$i];
            }
        }
        $nums = array_merge($arr_num,$arr);
        return count($arr_num);
        
    }
}
