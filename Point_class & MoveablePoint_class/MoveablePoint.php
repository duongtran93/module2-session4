<?php
include_once "Point.php";
class MoveablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function MoveablePoint($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function MovablePoint()
    {
        $this->xSpeed;
        $this->ySpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        return var_dump([$this->xSpeed, $this->ySpeed]);;
    }

    public function toString()
    {
        return parent::toString() . " ,speed=(" . $this->getXSpeed() . "," . $this->getYSpeed() . ")";
    }

    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return "(" .  $this->x .", " . $this->y . ")";
    }
}