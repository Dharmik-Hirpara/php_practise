<?php
$str = "<h1>Hello World!ä¿堆</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING ,FILTER_FLAG_STRIP_HIGH);
echo $newstr;
?>