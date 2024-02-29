<?php
class Employee
{
    public $name;
    public $salary;


    function __construct($name1, $salary2)
    {
        $this->name   = $name1;
        $this->salary = $salary2;
    }
}

$Dharmik = new employee("Dharmik",25000);
$ashuu   = new employee("ashuu",5000);

echo "name of the employe is $Dharmik->name $Dharmik->salary \n";
echo "name of the employe is $ashuu->name $ashuu->salary";
?>
let
