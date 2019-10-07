<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle = new Circle(3, "red");
echo "Circle class: ";
echo "<br>";
$circle->toString();
echo "<br>";

$cylinder = new Cylinder(3, "red", 5);
echo "Cylinder class: ";
echo "<br>";
$cylinder->toString();