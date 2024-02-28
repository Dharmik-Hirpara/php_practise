<?php
$filters = filter_list();
foreach ($filters as $filter) {
    echo $filter . "\n";
}
?>
<?php
/*int
boolean
float
validate_regexp
validate_domain
validate_url
validate_email
validate_ip
validate_mac
string
stripped
encoded
special_chars
full_special_chars
unsafe_raw
email
url
number_int
number_float
add_slashes
callback*/

$ip = "127.0.0.1";
if(!filter_var($ip, FILTER_VALIDATE_IP)=== false){
    echo("$ip is a valid ip adress");
}else{
    echo ("$ip is not a valid ip address");
};
?>


