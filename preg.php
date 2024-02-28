<?php
$Name = "Dharmik Hirpara";
$pattern = "/hirpa/";
echo preg_match($pattern,$Name)."\n";
echo preg_match_all($pattern,$Name);  //Returns the number of matches found in a string using regular expressions.

?>