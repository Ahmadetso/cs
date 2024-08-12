<?php 
    function linearSearch($arr, $target) {
    foreach ($arr as $index => $value) {
        if ($value == $target) {
            return $index;
        }
    }
    return -1;
}
