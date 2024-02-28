<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $d = strtotime("5:58pm April 23 2025");
    echo "created date is ". date("Y-m-d  \n h:i:sa",$d)."<br>";


    $dd = strtotime("Tommorow");
    date_default_timezone_set("Asia/kolkata");
    echo "Current date and time is".date("Y-m-d h:i:s A", $dd)."<br>";

    $d = strtotime("next Saturday");
    echo date("Y-m-d h:i:s", $d)."<br>";


    

    ?>
</body>
</html>