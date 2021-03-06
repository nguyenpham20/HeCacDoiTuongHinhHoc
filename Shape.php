<?php
//dn lop shape
class Shape {
    public function __construct($name)
    {
        //khoi tao thuoc tinh
        $this->name = $name;
    }
//dn ham show
    public function show() {
        return "I am a shape. My name is $this->name";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');
//tao hinh tron vs cho ra kq
$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br/>';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br/>';
//tao hinh tru vs hien thi ra kq
$cylinder = new Cylinder('Cylinder 01', 3, 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br/>';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br/>';
//tao hinh chu nhat va cho ra ket qua
$rectangle = new Rectangle('Rectangle 01', 3, 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br/>';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br/>';
//tao hinh vuong va cho ra kq
$square = new Square('Square 01', 4, 4, 4);
echo 'Rectangle area: ' . $square->calculateArea() . '<br/>';
echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br/>';
?>
</body>
</html>
