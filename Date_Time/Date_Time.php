<?php
echo "today date is ".date("d/m/y")."\n"."<br>";
echo "today date is ".date("d-m-y")."\n"."<br>";
echo "today date is ".date("d.m.y")."<br>";
echo "today is ".date("l")."\n"."<br>";

?>
</head>
<body>
<?php
date_default_timezone_set('Asia/kolkata');
echo "time is" .date ("h:i:s")."<br>";
?>
&copy;2010-<?php echo date("Y")."<br>";

$d = mktime(11,0,0, date("m"), date("d"), date("y"));
echo $d;


?>
</body>
</html>