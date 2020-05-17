<?php
//dn lop circle ke thua lop shape
include_once('Shape.php');
class Circle extends Shape {
    //khoi tao bien radius
    public $radius;
//dn ham khoi tao
    public  function __construct($name,$radius)
    {
        //
        parent::__construct($name);
        $this->radius = $radius;
    }
    //dn ham tinh toan
    public function calculateArea() {
        return pi() * pow($this->radius,2);
    }
    public function calculatePerimeter() {
        return pi() * $this->radius*2;
    }
}
