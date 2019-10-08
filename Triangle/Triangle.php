<?php
include_once "Shape.php";

class Triangle extends Shape
{
    private $side1 = 1.0;
    private $side2 = 1.0;
    private $side3 = 1.0;

    public function Triangle()
    {
        $this->side1;
        $this->side2;
        $this->side3;
    }

    public function __construct($name, $color, $side1, $side2, $side3)
    {
        parent::__construct($name, $color);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function getSide1()
    {
        return $this->side1;
    }

    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    public function getSide2()
    {
        return $this->side2;
    }

    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    public function getSide3()
    {
        return $this->side3;
    }

    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }

    public function getArea()
    {
        return pow((($this->getPerimeter() / 2) * ($this->getPerimeter() / 2 - $this->side1) * ($this->getPerimeter() / 2 - $this->side2) * ($this->getPerimeter() / 2 - $this->side3)), 0.5);
    }

    public function getPerimeter()
    {
        return ($this->side1 + $this->side2 + $this->side3);
    }

    public function toString()
    {
        return "Color: " . $this->color . ". Area: " . $this->getArea() . ". Perimeter: " . $this->getPerimeter();
    }
}