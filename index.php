<?php
function countElements($str,$y){
    $toArr=str_split($str);
    $count=0;
    for ($i=0;$i<count($toArr);$i++){
        if ($toArr[$i]===$y){
            $count++;
        }
    }
    return $count;
}

$str= 'stand up the vanguard';

print_r(countElements($str,'a'));
