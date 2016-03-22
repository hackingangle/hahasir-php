<?php
/**
 * 面向对象-类
 * Class
 * Mehtod
 * Property
 * Object
 * PSR
 */
class Person
{
    /**
     * 年龄
     * @var integer
     */
    public $age = 0;

    /**
     * 长大一岁
     * @return null
     */
    public function growUp() 
    {
        $this->age++;
    }
}

$hahaSir = new Person();
$hahaSir->growUp();
$hahaSir->growUp();
$hahaSir->growUp();
var_dump($hahaSir);

$zhangsan = new Person();
$zhangsan->growUp();
var_dump($zhangsan);
