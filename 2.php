<?php

function duplicateNumber($data) {
    $tag = 0;
    for($i = 0; $i < count($data); $i++) {
        for($j = $i+1; $j < count($data); $j++) {
            if($data[$i] == $data[$j]) {
                $tag = $data[$j];
                array_splice($data, $j, 1);
                if($data[$i] == $tag) {
                    array_splice($data, $i, 1);
                }
            }
        }
    }
    return $data;
}

$data = [5,10,15,10,7];
$res = duplicateNumber($data);

print_r($res);