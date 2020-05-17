<?php
//dn lop rectangle ke thua lop shape
include_once('Shape.php');
class Rectangle extends Shape {
    public $width;
    public $height;
//dn ham khoi tao
    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
//dn ham tinh toan
    public function calculateArea() {
        return $this->height * $this->width;
    }

    public function calculatePerimeter() {
        return ($this->height + $this->width) *2;
    }
}