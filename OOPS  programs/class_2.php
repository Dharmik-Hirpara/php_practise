<?php
class Fruit {
    public $name;
    public $color;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }
}

$apple = new Fruit();
$apple->setName("apple");
$apple->setColor("red");
echo "fruit is " . $apple->getName()."\n";
echo "colour is " . $apple->getcolor();
?>

