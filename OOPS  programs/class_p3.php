<?php
class car{
    public $name;
    public $colour;


function set_name($name){
    $this->name = $name;
}
function get_name(){
    return $this->name;
}
function set_colour($colour){
    $this->colour = $colour;
}

function get_colour(){
    return $this->colour;
}
}

$volvo = new car();
$volvo->set_name("Volvo");
$volvo->set_colour("red");
echo "car name is ".$volvo->get_name()." and colour is ".$volvo->get_colour()."\n";


$audi = new car();
$audi->set_name("audi");
$audi->set_colour("white");
echo "car name is ".$audi->get_name()." and colour is ".$audi->get_colour()."\n";

$maruti = new car();
$maruti->set_name("maruti");
$maruti->set_colour("black");
echo "car name is ".$maruti->get_name()." and colour is ".$maruti->get_colour()."\n";




?>
