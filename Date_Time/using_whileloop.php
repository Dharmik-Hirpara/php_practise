<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?Php
$startdate = strtotime("saturday");
$enddate = strtotime("+6 weeks",$startdate);

while($startdate < $enddate) {
    echo date("M d",$startdate)."<br>";
    $startdate = strtotime("+1 week", $startdate);
    $enddate = strtotime("", $enddate);
}
?>

</body>
</html>
