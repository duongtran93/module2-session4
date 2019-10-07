<?php
include_once "Circle.php";
class Cylinder extends Circle
{
    public $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function Volume()
    {
        return parent::area() * $this->height;
    }

    public function toString()
    {
        echo "Height: " . $this->height;
        echo "<br>";
        echo "Radius: " . parent::get_radius();
        echo "<br>";
        echo "Color: " . parent::get_color();
        echo "<br>";
        echo "Volume: " . $this->Volume();
    }
}