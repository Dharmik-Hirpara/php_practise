<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo " your user agent is:" .$_SERVER['HTTP_USER_AGENT'];
echo 'your ip address is:' . $_SERVER['REMOTE_ADDR'] ;   //this will give you the client's IP address
?>

</body>
</html>