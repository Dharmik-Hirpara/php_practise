<?php
class student
{
    public $name;
    public $rollno;

    function __construct($name1,$rollno1)
    {
        $this->name   = $name1;
        $this->rollno = $rollno1;
    }
    function __destruct()
    {
        echo "students in over now and classs is over now \n";

    }
}
$Dharmik = new student("Dharmik","123"."\n");
$ashuu   = new student("ashuu","456" );

?>
