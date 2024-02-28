<?php
$name = array(
    "abc"=>123,
    "cdb"=>345);
$name["abc"] = 984;
print_r($name);
echo $name["abc"];
?>