<?php
$array = ["apple","banana","cherry","date"];


ksort($array);

foreach ($array as $key => $value) {
    echo "Key= $key, Value= $value\n";
}
?>