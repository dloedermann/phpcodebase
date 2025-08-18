<h2>Whaaaatz uuuuuup?</h2>
<?php

$arr1 = [1,2,4,6,7];
$arr2 = ["Hallo Datei! Ich bin PHP!", "Pedeer"];

function add(...$numbers) {
    for($i = 0; $i < count($numbers); $i++) {
        echo $numbers[$i];
    }
}
add(1,2,3,4,10);

$combined = [...$arr1, ...$arr2];
print_r($combined);
var_dump($combined);

?>