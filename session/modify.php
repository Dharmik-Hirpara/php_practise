<?php
session_start();
?>
<?php
$_session["favbird"] = "Lion";
print_r( $_SESSION );
echo "<br>";
?>