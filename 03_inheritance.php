<?php
/**
 * 继承
 * 约定
 * 抽象类、接口
 */

/**
 * 图形
 */
abstract class Shape
{
    /**
     * 面积
     * @return int 面积
     */
    abstract public function getArea();
}

/**
 * 正方形
 */
class Square extends Shape
{
    /**
     * 边长
     * @var integer
     */
    protected $length = 10;

    /**
     * 面积
     * @return int 面积
     */
    public function getArea()
    {
        return pow($this->length, 2);
    }
}

/**
 * 三角形
 */
class Triangle extends Shape
{
    /**
     * 宽
     * @var integer
     */
    protected $width = 100;

    /**
     * 高
     * @var integer
     */
    protected $height = 20;

    /**
     * 面积
     * @return int 面积
     */
    public function getArea()
    {
        return (int)(0.5 * $this->width * $this->height);
    }
}

/**
 * 圆
 */
class Circle extends Shape
{
    /**
     * 半径
     * @var integer
     */
    protected $radio = 10;

    /**
     * 面积
     * @return int 面积
     */
    public function getArea()
    {
        return (int)(3.1415926 * pow($this->radio, 2));
    }
}

/**
 * 有颜色的圆
 */
class SpecialCircle extends Circle
{
    /**
     * 颜色
     * @var string
     */
    protected $color;

    /**
     * 半径
     * @var integer
     */
    protected $radio = 100;

    /**
     * init color
     * @param string $color 颜色
     */
    public function __construct($color = "red")
    {
        $this->color = $color;
    }

    /**
     * 面积
     * @return int 面积
     */
    public function getColor()
    {
        return $this->color;
    }
}

$square = new Square();
var_dump($square->getArea());

$triangle = new Triangle();
var_dump($triangle->getArea());

$circle = new Circle();
var_dump($circle->getArea());

$sCircle = new SpecialCircle("blue");
var_dump($sCircle->getArea(), $sCircle->getColor());
