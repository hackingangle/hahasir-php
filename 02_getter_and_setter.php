<?php
/**
 * 属性setter和getter
 * 面向对象第一大特性：封装：public protected private 、方法、属性
 */
class Person 
{
    /**
     * 姓名
     * @var string
     */
    private $name;

    /**
     * 年龄
     * @var integer
     */
    private $age;

    /**
     * 构造方法-内置保留-特殊的方法
     * @param string $name 姓名
     */
    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * 设定年龄
     * @param integer $age 年龄
     */
    public function setAge($age) 
    {
        if ($age < 0) {
            throw new Exception("class[Person]`s proterty:age is invalid.");
        }
        $this->age = $age;
    }

    /**
     * 获取年龄的天数
     * @return integer
     */
    public function getAge() {
        return $this->age * 365;
    }

}

$zhangsan = new Person("zhangsan");
// $zhangsan->age = -24;
$zhangsan->setAge(25);
var_dump($zhangsan);
var_dump($zhangsan->getAge());

$lisi = new Person("lisi");
$lisi->setAge(40);
// $lisi->age = -100;
var_dump($lisi);
var_dump($lisi->getAge());
