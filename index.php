<?php
$array1 = [];
$array2 = [];
$array3 = [];
for ($i = 0; $i < 10; $i++) {
    array_push($array1, $i);
}
for ($i = 10; $i > 0; $i--) {
    array_push($array2, $i);
}
for ($i = 0; $i < count($array1); $i++) {
    array_push($array3, $array1[$i]);
}
for ($i = 0; $i < count($array2); $i++) {
    array_push($array3, $array2[$i]);
}
var_dump($array3);
?>