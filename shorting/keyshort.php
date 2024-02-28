<?php
$age = ["peter"=> "23","monty"=>"34","paul"=>"50"];
ksort($age);
foreach($age as $x=>$v) {
    echo "key= ".$x. "  value= ", $v."\n";
}
?>