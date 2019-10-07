<?php


class Circle
{
    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function get_radius()
    {
        return $this->radius;
    }

    public function get_color()
    {
        return $this->color;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }

    public function toString()
    {
        echo "Radius: " . $this->get_radius();
        echo "<br>";
        echo "Color: " . $this->get_color();
        echo "<br>";
        echo "Area: " . $this->area();
    }
}