<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     * https://www.youtube.com/watch?v=3jdxYj3DD98
     */
    function romanToInt($s) {
        $romain=[
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];
        $inpts = str_split($s);
        $sum = 0;
       for($i=0; $i< count($inpts); $i++) {
           $r1 = $inpts[$i];
           $r2 = $inpts[$i+1];
           if($romain[$r1] < $romain[$r2]) {
               $sum -=$romain[$r1];
           } else {
               $sum += $romain[$r1];
           }
       }
        return $sum;
    }
}
