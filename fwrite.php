<?php
$myfile = fopen("notepad.txt", "w") or die("Unable to open file!");
$txt = "pycharm\n";
fwrite($myfile, $txt);
$txt = "pycharm\n";
fwrite($myfile, $txt);
fclose($myfile);
?>