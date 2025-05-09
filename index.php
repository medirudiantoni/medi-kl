<?php 

// $data = [10, 9, 4, 6];

function answer($data, $n){
    $counts = array_count_values($data);
    $res = [];

    foreach($data as $id){
        if($counts[$id] <= $n){
            return $res[] = $id;
        }
    }

    return $res;
}

$data = [5, 10, 8, 4, 6, 9];
$n = 5;
$result = answer($data,$n);

print_r($result);


?>