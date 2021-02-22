<?php

function persistence($num,$counter = 0){
    $numbers = str_split($num);
    if(count($numbers) === 1){
        echo $counter;
        return;
    }
    $total = 1;
    foreach ($numbers as $number) {
     $total = $total * $number;
    }
    $counter++;
    persistence($total, $counter);
}

persistence(999);

?>

