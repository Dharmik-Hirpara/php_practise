<?php
session_start();
?>
<?php 
session_unset();
session_destroy();
echo "all session got destroyed ";
?>