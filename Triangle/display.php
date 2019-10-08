<?php
include_once "Triangle.php";

$triangle = new Triangle("Triangle", $_POST["color"], $_POST["side1"], $_POST["side2"], $_POST["side3"]);
echo $triangle->toString();