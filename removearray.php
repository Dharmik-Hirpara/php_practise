<?php
$number = [1,3,5,6,7];
unset($number[4]);
print_r($number);
?>
<?php
$number = [1,3,5,6,7];
unset($number[0],$number[2],$number[3]);
print_r( $number);
?>