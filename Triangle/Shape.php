<?php


class Shape
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
}