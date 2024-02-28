<?php
//we do sorting by using implode function
$name = array("ok","happya", "codel", "rashi");
sort($name);
$clenth = count($name);
for($x=0;$x< $clenth;$x++){
    echo $name[$x]."\n";
}
?>