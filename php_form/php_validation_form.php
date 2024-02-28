<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation form</title>
</head>
<body>
    <?php

$name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email  = test_input($_POST["email"]);
    $gender  = test_input($_POST["gender"]);
    $comment = test_input($_POST["comment"]);
    $website = test_input($_POST["website"]);
}

function test_input($name) {
    $data = trim($name);
    $data = stripslashes($data); 
    $data = htmlspecialchars($data);
    return $data;
    }
    ?>

    

</body>
</html>